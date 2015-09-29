<?php
/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function nyhs_theme_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL)  {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }
  $form['nyhs_theme_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Custom NYHS Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['nyhs_theme_settings']['collection_bg_datastream'] = array(
    '#type' => 'textfield',
    '#title' => t('Collection View Background Datastream'),
    '#default_value' => theme_get_setting('collection_bg_datastream'),
    '#description'   => t("The datastream to use as an objects image representation in the collection view (EX: OBJ, MEDIUM, TN), defaults to TN"),
  );
    $form['nyhs_theme_settings']['slideshow_bg_datastream'] = array(
    '#type' => 'textfield',
    '#title' => t('Frontpage Slideshow Background Datastream'),
    '#default_value' => theme_get_setting('slideshow_bg_datastream'),
    '#description'   => t("The datastream to use as an objects image representation in the collection view (EX: OBJ, MEDIUM, TN), defaults to TN"),
  );
}
