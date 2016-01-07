<?php

/**
 * @file
 * islandora-basic-collection-wrapper.tpl.php
 *
 * @TODO: needs documentation about file and variables
 */
?>

<div class="islandora-basic-collection-wrapper">

<div class="collection-image-service-links-wrapper">

  <div class="collection-image-wrapper" style="background: url(/islandora/object/<?php print $islandora_object->id; ?>/datastream/<?php print theme_get_setting('collection_bg_datastream'); ?>/view) no-repeat center center; background-size: cover; width:100%; height: 400px;"></div>
  <?php if (isset($service_links) && !empty($service_links)): ?>
  <?php print $service_links; ?>
  <?php endif; ?>
</div>

  <?php if (isset($collection_search) && !empty($collection_search)): ?>
  <div class="collection-view-collection-search-wrapper"><p><?php print $collection_search; ?></p></div>
  <?php endif; ?>

  <?php if (!empty($dc_array['dc:description']['value'])): ?>
  <div class="collection-view-about-this-collection">
    <h1 class="page__title title">About this collection</h1>
    <p><?php print nl2br($dc_array['dc:description']['value']); ?></p>
  </div>
  <?php endif; ?>
  <?php if (isset($collection_metadata) && !empty($collection_metadata)): ?>
  <div class="collection-view-descriptive-meta">
    <p><?php print $collection_metadata; ?></p>
  </div>
  <?php endif; ?>

  <div class="islandora-basic-collection clearfix">
    <span class="islandora-basic-collection-display-switch">
    <span class="islandora-objects-display-switch">
    <?php print $solr_display_switch;?>
    </span>
    </span>
    <?php print $collection_pager; ?>
    <?php print $collection_content; ?>
    <?php print $collection_pager; ?>
  </div>
</div>

