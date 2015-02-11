<?php
add_action('init', 'mt_buildPracticeAreas');
function mt_buildPracticeAreas() {
	
		$mt_practice_labels = array(
		'name' => __('Practice Areas', 'match'),
		'singular_name' => __('Practice Item', 'match'),
		'add_new' => __('Add Practice Item', 'match'),
		'add_new_item' => __('Add New Practice Item', 'match'),
		'edit_item' => __('Edit Practice Item', 'match'),
		'new_item' => __('New Practice Item', 'match'),
		'view_item' => __('View Practice Item', 'match'),
		'search_items' => __('Search Practice', 'match'),
		'not_found' =>  __('Nothing found', 'match'),
		'not_found_in_trash' => __('Nothing found in Trash', 'match'),
		'parent_item_colon' => ''
		);
	
    	$mt_practice_args = array(
        	'labels' => $mt_practice_labels,
        	'label' => __('Practice Areas', 'match'),
        	'singular_label' => __('Practice Area', 'match'),
        	'public' => true,
        	'show_ui' => true,
			'menu_icon' => 'dashicons-portfolio',
        	'capability_type' => 'post',
        	'hierarchical' => false,
        	'rewrite' => array('slug' => 'practice-items','with_front' => false),
        	'supports' => array('title', 'editor', 'thumbnail')
        );
		register_post_type('mt_practice_areas',$mt_practice_args);
	
}

?>