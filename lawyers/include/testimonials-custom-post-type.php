<?php
add_action('init', 'mt_buildTestimonials');
function mt_buildTestimonials() {
	
		$mt_testimonials_labels = array(
		'name' => __('Testimonials', 'match'),
		'singular_name' => __('Testimonial Item', 'match'),
		'add_new' => __('Add Testimonial Item', 'match'),
		'add_new_item' => __('Add New Testimonial Item', 'match'),
		'edit_item' => __('Edit Testimonial Item', 'match'),
		'new_item' => __('New Testimonial Item', 'match'),
		'view_item' => __('View Testimonial Item', 'match'),
		'search_items' => __('Search Testimonials', 'match'),
		'not_found' =>  __('Nothing found', 'match'),
		'not_found_in_trash' => __('Nothing found in Trash', 'match'),
		'parent_item_colon' => ''
		);
	
    	$mt_testimonials_args = array(
        	'labels' => $mt_testimonials_labels,
        	'label' => __('Testimonials', 'match'),
        	'singular_label' => __('Testimonials', 'match'),
        	'public' => true,
        	'show_ui' => true,
			'menu_icon' => 'dashicons-testimonial',
        	'capability_type' => 'post',
        	'hierarchical' => false,
        	'rewrite' => array('slug' => 'testimonials-list','with_front' => false),
        	'supports' => array('title', 'editor', 'thumbnail')
        );
		register_post_type('mt_testimonials',$mt_testimonials_args);
	
}

?>