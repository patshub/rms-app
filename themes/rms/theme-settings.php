<?php
function rms_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface &$form_state, $form_id = NULL) {

  $form['facebook'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Facebook Link'),
    '#default_value' => theme_get_setting('facebook'),
  );
  $form['twitter'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Twitter Link'),
    '#default_value' => theme_get_setting('twitter'),
  );
  $form['youtube'] = array(
    '#type'          => 'textfield',
    '#title'         => t('YouTube Link'),
    '#default_value' => theme_get_setting('youtube'),
  );
  $form['instagram'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Instagram Link'),
    '#default_value' => theme_get_setting('instagram'),
  );
}
