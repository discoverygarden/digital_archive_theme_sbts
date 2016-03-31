<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php if (isset($row->field_field_go_to_link[0])):?>
<div class="front-image" target="_blank" onclick="window.open('<?php print $row->field_field_go_to_link[0]['raw']['value'];?>', '<?php print $row->field_field_href_target[0]['raw']['value'];?>')">
<?php else:?>
<div class="front-image">
<?php endif;?>
  <div
    class="frontpage-image-inner"
    style="background: url(<?php print file_create_url($output);?>) no-repeat center <?php print $row->field_field_align_image[0]['raw']['value'];?>; background-size: cover;">
  </div>
</div>
