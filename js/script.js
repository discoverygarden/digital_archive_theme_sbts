/**
 * @file
 * A JavaScript behaviour to control the active class on collection menu items
 *
 */

(function ($, Drupal, window, document, undefined) {
Drupal.behaviors.islandora_menu_item_active = {
  attach: function(context, settings) {
    $(document).ready(function() {
      var location = window.location.href;
      var minFontSize = 14;
      if (location.indexOf("islandora/object") >=0) {
        $('.islandora-collections').addClass('active');
      }
      if (location.indexOf("islandora/search") >=0) {
        $('.advanced-search').addClass('active');
      }
      function resizeText(multiplier, reset, max = null) {
        if (reset) {
          document.body.style.fontSize = minFontSize + "px";
          document.body.style.fontSize = "";
          return;
        } else {
          if (document.body.style.fontSize == "") {
            document.body.style.fontSize = "1.0em";
          }
          document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em";
        }
      }
      $('#type-size').click(function(e){
       e.preventDefault();
       var  maxFontSize = 4;
       var currentFontSize = parseFloat(document.body.style.fontSize);
       if (currentFontSize >= maxFontSize) {
         resizeText(1, true, minFontSize);
         return;
       }
       resizeText(1, false);
      });
    });
  }
};
})(jQuery, Drupal, this, this.document);
