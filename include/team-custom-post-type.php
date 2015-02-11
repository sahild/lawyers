<?php
add_action('init', 'mt_buildTeam');
function mt_buildTeam() {
	
		$mt_team_labels = array(
		'name' => __('Team', 'match'),
		'singular_name' => __('Team Item', 'match'),
		'add_new' => __('Add Team Item', 'match'),
		'add_new_item' => __('Add New Team Item', 'match'),
		'edit_item' => __('Edit Team Item', 'match'),
		'new_item' => __('New Team Item', 'match'),
		'view_item' => __('View Team Item', 'match'),
		'search_items' => __('Search Team', 'match'),
		'not_found' =>  __('Nothing found', 'match'),
		'not_found_in_trash' => __('Nothing found in Trash', 'match'),
		'parent_item_colon' => ''
		);
	
    	$mt_team_args = array(
        	'labels' => $mt_team_labels,
        	'label' => __('Team', 'match'),
        	'singular_label' => __('Team', 'match'),
        	'public' => true,
        	'show_ui' => true,
			'menu_icon' => 'dashicons-groups',
        	'capability_type' => 'post',
        	'hierarchical' => false,
        	'rewrite' => array('slug' => 'team','with_front' => false),
        	'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
        );
		register_post_type('mt_team',$mt_team_args);
	
}

?>