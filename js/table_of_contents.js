/**
 * @file
 * Creates the jsTree table of contents.
 */

(function ($) {
  Drupal.behaviors.islandora_solr_table_of_contents_jstree = {
    attach: function (context, settings) {
      if (typeof settings.islandora_solr_table_of_contents.jstree.info != 'undefined') {
        
        for (var id in settings.islandora_solr_table_of_contents.jstree.info) {
          var jstree_settings = settings.islandora_solr_table_of_contents.jstree.info[id]; 
          var hash_id = '#' + id;
          $(hash_id).once('islandora-solr-table-of-contents-jstree', function () {
            $.extend(jstree_settings, {
              'core': {
                'data': {
                  'url': function (node) {
                    var endpoint = node.id === '#' ? jstree_settings.pid : node.id;
                    return Drupal.settings.basePath + "islandora_solr_table_of_contents/" + endpoint;
                  }
                }
              }
            });
            // Build the jsTree and restore the state if needed.
            $(hash_id).jstree(jstree_settings);
            if (jstree_settings.plugins.indexOf('state') > -1) {
              $(hash_id).jstree(true).restore_state();
            }
            // For some strange reason, it doesn't register the select_node event
            // as a link, so we're binding it manually.
            $(hash_id).bind("select_node.jstree", function(node, selected, event) {
              if (typeof selected.event != 'undefined') {
                if (selected.event.type == 'click') {
                  window.location = Drupal.settings.basePath + "islandora/object/" + selected.node.id;
                }
              }
            });
          });
        }
        function updateThumb(){
          $('#islandora-solr-table-of-contents-tree .jstree-container-ul').each(function(){
            $(this).find('.jstree-node').each(function(){
              var encoded_pid = encodeURIComponent($(this).attr('id'));
              var thumb_background_style = "background: white url(/islandora/object/" + encoded_pid +
                "/datastream/TN/view) no-repeat center center; background-size:32px;";
              $(this).find('a').find('i').attr('style', thumb_background_style);
            });
          });
        }
        $('#islandora-solr-table-of-contents-tree').bind('loaded.jstree', function(e, data) {
          // invoked after jstree has loaded
          updateThumb();
          $('#islandora-solr-table-of-contents-tree')
         .on('open_node.jstree', function (e, data) {
           updateThumb();
         })
         .on('load_node.jstree', function (e, data) {
           console.log("data node");
           console.log(data.node);
           updateThumb();
         });
       });
      }
    }
  };
})(jQuery.noConflict(true));
