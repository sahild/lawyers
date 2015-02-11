<?php
/*
Template Name: Case Results 2 Col

*/
?>
<?php get_header(); ?>

<?php

$mt_page_title = get_post_meta($post->ID, "mt_page_title", true);
$mt_page_tagline = get_post_meta($post->ID, "mt_page_tagline", true);
$mt_page_bkg_img = get_post_meta($post->ID, "mt_page_bkg_img", true);
   
  ?>

<div class="page-head" style="background-image:url(<?php echo $mt_page_bkg_img ?>);">
<div class="vertical">

<div class="container">

<?php if (!empty($mt_page_title)) :?>

<h2 class="page-title"><?php echo $mt_page_title ;?></h2>

<?php else: ?>

<h2 class="page-title"><?php the_title();?></h2>

<?php endif; ?>

<p><?php echo $mt_page_tagline ;?></p>

</div><!--.container-->
</div><!--.vertical-->
</div><!--.page-head-->

<section class="page-content">

<div class="container">

<div class="row">
<div class="col-md-12 cases-holder">

<?php 
			$mt_case_results_items_nr = ot_get_option('mt_case_results_items_nr', '10');
			global $wp_query;
			wp_reset_query();

	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	
	$query = array('post_type' => 'mt_case_results','posts_per_page' => $mt_case_results_items_nr, 'paged'=> $paged);
	$wp_query = new WP_Query($query);
	
	$count_case_results = 0;
		
			?>
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); 

			$mt_case_money = get_post_meta($post->ID, "mt_case_money", true);
			$mt_case_charges_title = get_post_meta($post->ID, "mt_case_charges_title", true);
			$mt_case_charges_text = get_post_meta($post->ID, "mt_case_charges_text", true);
			$mt_case_result_title = get_post_meta($post->ID, "mt_case_result_title", true);
			$mt_case_result_text = get_post_meta($post->ID, "mt_case_result_text", true);
			
		if ($count_case_results % 2 == 0): ?> <div class="row"> <?php endif; ?>

<div class="col-sm-6 col-md-6">

<div class="case-2col">

<div class="case-2col-img">

<?php if ( has_post_thumbnail($post->ID) ){ ?>

<?php the_post_thumbnail('gal-img', array('class'=> 'img-responsive', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().'')); ?>

<?php } ?>

<div class="case-2col-more">

<div class="mask-elem">
<div class="case-verdict"><?php echo $mt_case_money;?></div>
</div><!--.mask-elem-->

</div><!--.case-2col-more-->

</div><!--.case-2col-img-->

<h4 class="case-2col-title"><?php the_title();?></h4>

<div class="row">

<div class="col-sm-6 col-md-6">

<div class="case-description">

<h5 class="single-subtitle"><?php echo $mt_case_charges_title;?></h5>

<p><?php echo $mt_case_charges_text;?></p>

</div><!--.case-description-->

</div><!--.col-md-6-->

<div class="col-sm-6 col-md-6">

<div class="case-description">

<h5 class="single-subtitle"><?php echo $mt_case_result_title;?></h5>

<p><?php echo $mt_case_result_text;?></p>


</div><!--.case-description-->

</div><!--.col-md-6-->

</div><!--.row-->


</div><!--.case-2col-->

</div><!--.col-md-6-->

<?php $count_case_results++; if(($count_case_results % 2) == 0) {?> </div><!--end row--> <?php }?>

<?php endwhile; endif; if(($count_case_results % 2) == 1 ) {?> </div><!--end row--><?php } ?> 

</div><!--.cases-holder-->

</div><!--.row-->

<?php $count_posts = wp_count_posts('mt_case_results'); ?>

<?php if(function_exists('mt_pagenavi') && ($mt_case_results_items_nr < $count_posts->publish ) ) : ?>

	<div class="margin72">

	<?php mt_pagenavi();  ?>
        
	</div><!--.margin72-->
        
	<?php else : ?>

  <ul class="other-entries">
			<li class="newer-entries"><span><?php previous_posts_link(__('Previous', 'match')); ?></span></li>
            <li class="older-entries"><span><?php next_posts_link(__('Next', 'match')); ?></span></li>
          </ul>
      
<?php endif; ?>

</div><!--.container-->

</section><!--.page-content-->


</div><!--end main-->
<?php get_footer(); ?>