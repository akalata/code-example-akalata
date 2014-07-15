<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function akalata_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  akalata_preprocess_html($variables, $hook);
  akalata_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
function akalata_preprocess_html(&$variables, $hook) {

  /* Google Webfont Anonymous Pro for monospace text */
  $googlefont_anonymous_pro = array(
    'href' => '//fonts.googleapis.com/css?family=Anonymous+Pro:400,700',
    'rel' => 'stylesheet',
    'type' => 'text/css',
  );
  drupal_add_html_head_link($googlefont_anonymous_pro);

  /* Apple-friendly favicons */
  $iphone_img = '/' . drupal_get_path('theme', 'akalata') . '/images/favicon_57.png';
  $iphone4_img = '/' . drupal_get_path('theme', 'akalata') . '/images/favicon_114.png';
  $ipad_img = '/' . drupal_get_path('theme', 'akalata') . '/images/favicon_72.png';
  $ipad3_img = '/' . drupal_get_path('theme', 'akalata') . '/images/favicon_144.png';

  $iphone = array(
  '#tag' => 'link',
  '#attributes' => array(
    'href' => $iphone_img,
    'rel' => 'apple-touch-icon-precomposed',
    'sizes' => '57x57',
    ),
  );
  $iphone4 = array(
    '#tag' => 'link',
    '#attributes' => array(
      'href' => $iphone4_img,
      'rel' => 'apple-touch-icon-precomposed',
      'sizes' => '114x114',
    ),
  );
  $ipad = array(
    '#tag' => 'link',
    '#attributes' => array(
      'href' => $ipad_img,
      'rel' => 'apple-touch-icon-precomposed',
      'sizes' => '72x72',
    ),
  );
  $ipad3 = array(
    '#tag' => 'link',
    '#attributes' => array(
      'href' => $ipad3_img,
      'rel' => 'apple-touch-icon-precomposed',
      'sizes' => '144x144',
    ),
  );

  // ordered highest to lowest resolution
  drupal_add_html_head($ipad3, 'ipad3_icon');
  drupal_add_html_head($iphone4, 'iphone4_icon');
  drupal_add_html_head($ipad, 'ipad_icon');
  drupal_add_html_head($iphone, 'iphone_icon');
}


/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function akalata_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function akalata_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // akalata_preprocess_node_page() or akalata_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function akalata_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function akalata_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function akalata_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */
