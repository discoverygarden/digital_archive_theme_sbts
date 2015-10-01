<?php
/**
 * @file
 * Islandora solr search navigation block.
 *
 * Variables available:
 * - $return_link: link to reutrn to original search.
 * - $prev_link: Link to previous object in search result.
 * - $next_link: link to next object in the search result.
 *
 */
?>

<div class="search-navigation-block-template-wrapper">
  <div id="islandora-solr-search-prev-link">
    <?php if (isset($prev_link)):?>
    <div class="nav-prev-obj">
    </div>
    <div class="nav-prev-link">
      <?php print $prev_link; ?>
    </div>
    <?php endif;?>
  </div>
  <div id="islandora-solr-search-return-link">
  <?php print $return_link; ?>
  </div>
  <div id="islandora-solr-search-next-link">
  <?php if (isset($next_link)):?>
    <div class="nav-next-obj">
    </div>
    <div class="nav-next-link">
      <?php print $next_link; ?>
    </div>
    <?php endif;?>
  </div>
</div>

