<?php
/**
 * @package WordPress
 * @subpackage Lawyers
 */

get_header(); ?>

<?php

$mt_page_title = get_post_meta($post->ID, "mt_page_title", true);
$mt_page_tagline = get_post_meta($post->ID, "mt_page_tagline", true);
$mt_page_bkg_img = get_post_meta($post->ID, "mt_page_bkg_img", true);

$mt_sidebar_page = ot_get_option( 'mt_sidebar_page', 'mt_sidebar_page_right');  
   
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

<?php if ( $mt_sidebar_page == 'mt_sidebar_page_left' ) get_sidebar(); ?>

<div class="col-md-8 <?php if ( $mt_sidebar_page == 'mt_sidebar_page_no' ){?> col-md-offset-2 <?php } ?> content-holder custom-page-template">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php the_content(); ?>

<?php  endwhile; endif; ?>

</div><!--.col-md-8-->

<?php if ( $mt_sidebar_page == 'mt_sidebar_page_right' ) get_sidebar(); ?>

</div><!--.row-->

</div><!--.container-->

</section><!--.page-content-->

</div><!--end main-->
<?php get_footer(); ?>