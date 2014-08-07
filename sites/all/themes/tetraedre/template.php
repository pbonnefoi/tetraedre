<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */

function tetraedre_preprocess_html(&$vars) {
  global $base_url;
  $theme_path = drupal_get_path('theme', 'tetraedre');
  $vars['full_theme_path'] = $base_url . '/' . $theme_path;
}

function tetraedre_preprocess_page(&$vars) {
  global $base_url;
  $theme_path = drupal_get_path('theme', 'tetraedre');
  $vars['full_theme_path'] = $base_url . '/' . $theme_path;
  $drupal_is_front = drupal_is_front_page();
  $vars['highlight'] = '';
  if ($drupal_is_front) {
    $node = menu_get_object();
    if (isset($node->type) && $node->type == 'homepage') {
      $highlight = field_get_items('node', $node, 'field_highlight');
      if ($highlight) {
        $vars['highlight'] = node_view(node_load($highlight[0]['target_id']));
      }
      $projects = field_get_items('node', $node, 'field_projects');
      $vars['projects'] = '';
      if ($projects) {
        foreach ($projects as $key => $project) {
          $vars['projects'][] = node_view(node_load($project['target_id']), 'teaser');
        }
      }
    }
  }
}

function tetraedre_preprocess_node(&$vars) {
  $node = &$vars['node'];
  if ($vars['view_mode'] == 'teaser') {
    $vars['theme_hook_suggestions'][] = 'node__' . $node->type . '__' . $vars['view_mode'];
  }
  $function = __FUNCTION__ . '_' . $node->type;
  if (function_exists($function)) {
    $function($vars);
  }
}

function tetraedre_preprocess_node_homepage(&$vars) {
  $node = &$vars['node'];
  $faces = field_get_items('node', $node, 'field_faces');
  $vars['faces'] = '';
  if ($faces) {
    foreach ($faces as $key => $face) {
      $vars['faces'][] = field_view_value('node', $node, 'field_faces', $face);
    }
  }
}
