<?php
add_action('init', 'mt_buildCaseResults');
function mt_buildCaseResults() {
	
		$mt_case_results_labels = array(
		'name' => __('Case Results', 'match'),
		'singular_name' => __('Case Result Item', 'match'),
		'add_new' => __('Add Case Result Item', 'match'),
		'add_new_item' => __('Add New Case Result Item', 'match'),
		'edit_item' => __('Edit Case Result Item', 'match'),
		'new_item' => __('New Case Result Item', 'match'),
		'view_item' => __('View Case Result Item', 'match'),
		'search_items' => __('Search Case Result', 'match'),
		'not_found' =>  __('Nothing found', 'match'),
		'not_found_in_trash' => __('Nothing found in Trash', 'match'),
		'parent_item_colon' => ''
		);
	
    	$mt_case_results_args = array(
        	'labels' => $mt_case_results_labels,
        	'label' => __('Case Results', 'match'),
        	'singular_label' => __('Case Results', 'match'),
        	'public' => true,
        	'show_ui' => true,
			'menu_icon' => 'dashicons-archive',
        	'capability_type' => 'post',
        	'hierarchical' => false,
        	'rewrite' => array('slug' => 'cases','with_front' => false),
        	'supports' => array('title', 'editor', 'thumbnail')
        );
		register_post_type('mt_case_results',$mt_case_results_args);
	
}

?>