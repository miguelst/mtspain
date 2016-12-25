<?php
/**
 * @file
 * MT template php file.
 */

/**
 * Implements function theme_menu_tree
 * Returns HTML for a wrapper for a menu sub-tree.
 *
 * @param $variables
 * @return string
 */
function mt_menu_tree(&$variables) {
  //dpm($variables,'vars');
  if ($variables['theme_hook_original'] == 'menu_tree'
    || $variables['theme_hook_original'] == 'menu_tree__menu_top_menu'
    || $variables['theme_hook_original'] == 'menu_tree__menu_footer_menu'
    || $variables['theme_hook_original'] == 'menu_tree__menu_footer_bottom_menu'){
    return '<ul class="menu nav navbar-nav">' . $variables['tree'] . '</ul>';
  }
  else {
    return '<ul class="menu nav">' . $variables['tree'] . '</ul>';
  }
}

/**
 * Implements theme_preprocess_page()
 * @param $variables
 */
function mt_preprocess_page(&$variables) {
  //remove bootstrap "container" class.
  unset($variables['navbar_classes_array'][1]);
}

/**
 * Implements theme_preprocess_node()
 * @param $variables
 */
function mt_preprocess_node(&$variables) {

  // Remove author from date.
  $variables['submitted'] = $variables['date'];

  // Add google maps on contact page.
  if (isset($variables['nid'])) {
    $alias = drupal_get_path_alias('node/' . $variables['nid']);
    if (($alias == 'contacto' || $alias == 'contact' || $alias == 'kontakt') && $variables['type'] == 'webform') {
      $variables['submitted'] = '';
      $variables['content']['gmaps'] = array(
        '#type' => 'item',
        '#markup' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4866.287871014375!2d2.0006481765848014!3d41.41364558624088!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x624c1e37162e4566!2sBusiness+Key!5e0!3m2!1sen!2ses!4v1482324793904" width="100%" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>',
        '#attributes' => array('class' => array('gmap')),
      );
      //drupal_add_js('http://maps.google.com/maps/api/js?key=AIzaSyCU6QiWyESCcHtGpU18XYNPuWT6Edwj96k', 'external');
    }
  }
}