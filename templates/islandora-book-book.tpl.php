<?php
/**
 * @file
 * Template file to style output.
 */
?>
<div class="book-object-wrapper">
<?php if(isset($viewer)): ?>
  <div id="book-viewer">
    <?php print $viewer; ?>

  </div>
  <div class="subsequent-pages-wrapper">
    <?php if (theme_get_setting('show_subsequent_pages') != 0):?>
      <h1 class="block__title block-title"><?php print t("Subsequent Pages"); ?></h1>
      <?php print views_embed_view('subsequent_pages', 'block', $object->id); ?>
    <?php endif; ?>
  </div>
<?php endif; ?>

<?php if($display_metadata === 1): ?>
  <div class="islandora-book-metadata">
    <?php if($parent_collections): ?>
  <div>
        <h1><?php print t('In Collection(s)'); ?></h1>
    <ul>
      <?php foreach ($parent_collections as $collection): ?>
        <li><?php print l($collection->label, "islandora/object/{$collection->id}"); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <?php print $metadata; ?>
  </div>
<?php endif; ?>
</div>
