<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', 'mt_practice_areas_custom_meta_boxes' );

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
function mt_practice_areas_custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
   
  $mt_practice_meta_box = array(
    'id'          => 'mt_practice_meta_box',
    'title'       => __('Item Customization', 'match'),
    'desc'        => '',
    'pages'       => array( 'mt_practice_areas' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
   	  array(
        'label'       => __('Practice Area Font Awesome Icon', 'match'),
        'id'          => 'mt_practice_icon',
        'type'        => 'text',
        'desc'        => __('Add practice area icon code. Please choose the icon from the Font Awesome website ( http://fortawesome.github.io/Font-Awesome/icons/ ) .', 'match'),
        'std'         => '<i class="fa fa-truck"></i>',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	  array(
        'label'       => __( 'Use Custom URL', 'match' ),
        'id'          => 'mt_practice_on_off',
        'type'        => 'on-off',
        'desc'        => __( 'Use Custom URL for practice item', 'match' ),
        'std'         => 'off',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	  array(
        'label'       => __('Custom URL', 'match'),
        'id'          => 'mt_practice_url',
        'type'        => 'text',
        'desc'        => __('Add custom URL for practice item', 'match'),
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
  ot_register_meta_box( $mt_practice_meta_box );

}
?>