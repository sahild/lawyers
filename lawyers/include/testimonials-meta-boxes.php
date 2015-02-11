<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', 'mt_testimonials_custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types
 * in demo-theme-options.php.
 *
 * @return    void
 *
 * @access    private
 * @since     2.0
 */
function mt_testimonials_custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
   
  $mt_testimonial_meta_box = array(
    'id'          => 'mt_testimonial_meta_box',
    'title'       => __('Item Customization', 'match'),
    'desc'        => '',
    'pages'       => array( 'mt_testimonials' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
   	  array(
        'label'       => __('Client Name', 'match'),
        'id'          => 'mt_testimonial_client_name',
        'type'        => 'text',
        'desc'        => __('Add testimonial client name', 'match'),
        'std'         => 'John Doe',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''       
      ),
	  
	  array(
        'label'       => __('Client Company', 'match'),
        'id'          => 'mt_testimonial_client_company',
        'type'        => 'text',
        'desc'        => __('Add testimonial client company', 'match'),
        'std'         => 'Company Name',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''       
      ),
	  
	  array(
        'label'       => __('Client Small Image', 'match'),
        'id'          => 'mt_testimonial_client_img',
        'type'        => 'upload',
        'desc'        => __('Add testimonial client small image. Make sure is 70x70px.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''       
      )
	  	  
  	)
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  ot_register_meta_box( $mt_testimonial_meta_box );

}
?>