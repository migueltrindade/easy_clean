<?php
function easy_clean_preprocess_html(&$variables) {
	
}

function easy_clean_preprocess_page(&$variables) {

}

function easy_clean_preprocess_node(&$variables) {

}

function easy_clean_breadcrumb($variables) {
  
	$breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
		
		$breadcrumb[] = drupal_get_title();
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

    $output .= '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . '</div>';
    return $output;
  }
}