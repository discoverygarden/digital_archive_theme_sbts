<?php
/**
 * @file
 * Template file to style output.
 */
?>
<?php
  print $book_object_id ? l(t('Return to Book View'), "islandora/object/{$book_object_id}") : t('Orphaned page (no associated book)');
?>
<?php if (isset($viewer)): ?>
  <div id="book-page-viewer">
    <?php print $viewer; ?>
    <?php if ($parent_collections): ?>
      <div>
        <h2><?php print t('In collections'); ?></h2>
        <ul>
          <?php foreach ($parent_collections as $collection): ?>
            <li><?php print l($collection->label, "islandora/object/{$collection->id}"); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <?php print $object_metadata; ?>

  </div>
<?php elseif (isset($object['JPG']) && islandora_datastream_access(ISLANDORA_VIEW_OBJECTS, $object['JPG'])): ?>
  <div id="book-page-image">
    <?php
      $params = array(
        'path' => url("islandora/object/{$object->id}/datastream/JPG/view"),
        'attributes' => array(),
      );
      print theme('image', $params);
    ?>
  </div>
<?php endif; ?>
<!-- @todo Add table of metadata values -->
