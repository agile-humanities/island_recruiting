<?php

/**
 * @file
 * This file contains all theme and preprocess functions.
 */

/**
 * Implements hook_preprocess_theme().
 */
function island_recruiting_preprocess_island_recruiting_splash(array &$variables) {
  $path = drupal_get_path('module', 'island_recruiting');
  drupal_add_css("$path/css/island_recruiting.css");
  drupal_add_js("$path/js/island_recruiting.js");
  $variables['splash'] = theme('image', array(
    'path' => $path . '/assets/banner1.png',
    'alt' => t('Welcome!'),
    'attributes' => array('class' => 'splash_img'),
  ));
  $variables['mac'] = theme('image', array(
    'path' => $path . '/assets/Macbook.png',
    'alt' => t('Welcome!'),
    'attributes' => array('class' => 'macbook_img', 'style' => 'width:50%; float:right'),
  ));
  $variables['analysis'] = theme('image', array(
    'path' => $path . '/assets/analysis.png',
    'alt' => t('Analysis!'),
    'attributes' => array('class' => 'service_img'),
  ));
  $variables['reporting'] = theme('image', array(
    'path' => $path . '/assets/reporting.png',
    'alt' => t('Reporting!'),
    'attributes' => array('class' => 'service_img'),
  ));
  $variables['consulting'] = theme('image', array(
    'path' => $path . '/assets/consulting.png',
    'alt' => t('Cnsulting!'),
    'attributes' => array('class' => 'service_img'),
  ));
  $variables['features'] = theme('image', array(
    'path' => $path . '/assets/bannerfeatures.png',
    'alt' => t('Features!'),
    'attributes' => array('class' => 'feature_img'),
  ));
  $variables['email'] = theme('image', array(
    'path' => $path . '/assets/button_textemail.png',
    'alt' => t('Email!'),
    'attributes' => array('class' => 'button_img', 'id' => 'ir_email'),
  ));
  $variables['password'] = theme('image', array(
    'path' => $path . '/assets/button_textpass.png',
    'alt' => t('Password!'),
    'attributes' => array('class' => 'button_img', 'id' => 'ir_password'),
  ));
  $variables['user'] = theme('image', array(
    'path' => $path . '/assets/button_textusername.png',
    'alt' => t('User!'),
    'attributes' => array('class' => 'button_img', 'id' => 'ir_user'),
  ));
  $variables['receiver'] = theme('image', array(
    'path' => $path . '/assets/phone-call.png',
    'alt' => t('Phone'),
    'attributes' => array('class' => ''),
  ));
  $variables['envelope'] = theme('image', array(
    'path' => $path . '/assets/envelope.png',
    'alt' => t('Email'),
    'attributes' => array('width' => '3%','class' => 'envelope_icon'),
  ));
}
