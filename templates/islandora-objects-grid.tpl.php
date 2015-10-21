<?php

/**
 * @file
 * Render a bunch of objects in a list or grid view.
 */
?>

<div class="islandora-objects-grid clearfix in-theme">
 <?php foreach($objects as $object): ?>
   <div class="islandora-objects-grid-item">
     <dl class="islandora-object <?php print $object['class']; ?>">
         <dt class="islandora-object-thumb"><div class="hrm"><div class="islandora-link-object"><?php print $object['thumb']; ?></div></div></dt>
         <dd class="islandora-object-caption"><?php print $object['link']; ?></dd>
     </dl>
   </div>
 <?php endforeach; ?>
</div>
