<?php
function websop_gratis_preprocess_page(&$vars) {
  if (!empty($vars['node']) && !empty($vars['node']->type)) {
    $vars['theme_hook_suggestions'][] = 'page__node__' . $vars['node']->type;
  }
}

