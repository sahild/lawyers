<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', 'mt_team_custom_meta_boxes' );

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
function mt_team_custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
   
  $mt_team_meta_box = array(
    'id'          => 'mt_team_meta_box',
    'title'       => __('Item Customization', 'match'),
    'desc'        => '',
    'pages'       => array( 'mt_team' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
   	  array(
        'label'       => __('Twitter URL', 'match'),
        'id'          => 'mt_team_twitter_url',
        'type'        => 'text',
        'desc'        => __('Add Twitter URL. If the field is empty the button will not be displayed.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	  array(
        'label'       => __('Facebook URL', 'match'),
        'id'          => 'mt_team_facebook_url',
        'type'        => 'text',
        'desc'        => __('Add Facebook URL. If the field is empty the button will not be displayed.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	  array(
        'label'       => __('Google Plus URL', 'match'),
        'id'          => 'mt_team_gplus_url',
        'type'        => 'text',
        'desc'        => __('Add Google Plus URL. If the field is empty the button will not be displayed.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	  array(
        'label'       => __('LinkedIn URL', 'match'),
        'id'          => 'mt_team_linkedin_url',
        'type'        => 'text',
        'desc'        => __('Add LinkedIn URL. If the field is empty the button will not be displayed.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	  array(
        'label'       => __('Mail Address', 'match'),
        'id'          => 'mt_team_mail',
        'type'        => 'text',
        'desc'        => __('Add mail address. If the field is empty the button will not be displayed.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
  	)
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  ot_register_meta_box( $mt_team_meta_box );

}
?>