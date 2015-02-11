<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', 'mt_case_results_custom_meta_boxes' );

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
function mt_case_results_custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
   
  $mt_case_results_meta_box = array(
    'id'          => 'mt_case_results_meta_box',
    'title'       => __('Item Customization', 'match'),
    'desc'        => '',
    'pages'       => array( 'mt_case_results' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
   	  array(
        'label'       => __('Money Result', 'match'),
        'id'          => 'mt_case_money',
        'type'        => 'text',
        'desc'        => __('Add case result settlement.', 'match'),
        'std'         => '$100.000',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	  array(
        'label'       => __('The Charges Title', 'match'),
        'id'          => 'mt_case_charges_title',
        'type'        => 'text',
        'desc'        => __('Add charges title.', 'match'),
        'std'         => 'The Charges',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	  array(
        'label'       => __('The Charges Text', 'match'),
        'id'          => 'mt_case_charges_text',
        'type'        => 'textarea-simple',
        'desc'        => __('Add charges text.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	  array(
        'label'       => __('The Result Title', 'match'),
        'id'          => 'mt_case_result_title',
        'type'        => 'text',
        'desc'        => __('Add result title.', 'match'),
        'std'         => 'The Result',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	  array(
        'label'       => __('The Result Text', 'match'),
        'id'          => 'mt_case_result_text',
        'type'        => 'textarea-simple',
        'desc'        => __('Add result text.', 'match'),
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
  ot_register_meta_box( $mt_case_results_meta_box );

}
?>