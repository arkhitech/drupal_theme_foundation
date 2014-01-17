<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function drupal_theme_foundation_form_system_theme_settings_alter(&$form, &$form_state) {
  if (!isset($form['drupal_theme_foundation'])) {
    $form['drupal_theme_foundation'] = array(
      '#type' => 'vertical_tabs',
      '#weight' => -10,
    );

    /*
     * Misc Settings.
    $form['drupal_theme_foundation']['misc'] = array(
      '#type' => 'fieldset',
      '#title' => t('Misc Settings'),
      '#collapsible' => TRUE,
    );
     */

    $form['zurb_foundation']['misc']['slider_display'] = array(
        '#type' => 'checkbox',
        '#title' => t('Show Slider'),
        '#description'   => t('Use the checkbox to enable or disable the slider.'),
        '#default_value' => theme_get_setting('slider_display','drupal_theme_foundation'),
    );
	
  }
}
