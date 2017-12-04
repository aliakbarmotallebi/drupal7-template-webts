<?php

function webts_preprocess_image(&$variables) {
  foreach (array('width', 'height') as $key) {
    unset($variables[$key]);
  }
}

function webts_menu_tree__menu_footer_menu($variables) {
  return '<p class="footer-title">لینک های سایت</p><ul class="footer-link">' . $variables['tree'] . '</ul>';
}

function webts_preprocess_page(&$variables) {
    if (isset($variables['node']->type)) {
        $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
    }
}

function webts_preprocess_node(&$vars) {
    unset($vars['content']['links']['statistics']['#links']['statistics_counter']['title']);
}

        