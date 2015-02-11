<?php
/*
Template Name: Contact
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

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if($post->post_content!="") : ?>

<div class="row">
<div class="col-md-12 margin40 content-holder">
<?php the_content(); ?>
</div><!--.col-md-12-->

</div><!--.row-->

<?php  endif; endwhile; endif; ?>

<div class="row">
<div class=" col-sm-6 col-md-6">

<div id="contact-form-holder">
   
   <form method="post" id="contact-form" action="<?php echo get_template_directory_uri(); ?>/include/contact-process.php">

  		<label><?php _e('Name', 'match')?></label>
		<p><input type="text" name="name" class="comm-field" /></p>
  		<label><?php _e('Email', 'match')?></label>
		<p><input type="text" name="email" class="comm-field"/></p>
   		<label><?php _e('Subject', 'match')?></label>
		<p><input type="text" name="subject" class="comm-field" /></p>
  		<label><?php _e('Message', 'match')?></label>
        <p> <textarea name="message" id="msg-contact" rows="7"></textarea></p>
      
       <p class="antispam">Leave this empty: <input type="text" name="url" /></p>
        
        <p class="contact-btn"><input type="submit" value="<?php _e('Send message', 'match')?>" id="submit-contact"/></p>
	</form>
	</div><!-- end contact-form-holder-->
    
    <div id="output-contact"></div>


</div><!--.col-md-6-->

<div class=" col-sm-6 col-md-6">

<div class="contact-right">

<?php $mt_tright_contact_title = ot_get_option( 'mt_tright_contact_title');
		$mt_tright_contact_text = ot_get_option( 'mt_tright_contact_text');
		$mt_tright_contact_address = ot_get_option( 'mt_tright_contact_address');
		$mt_tright_contact_phone = ot_get_option( 'mt_tright_contact_phone');
		$mt_tright_contact_fax = ot_get_option( 'mt_tright_contact_fax');
		$mt_tright_contact_email = ot_get_option( 'mt_tright_contact_email');

 ?>

<h5 class="small-title"><?php echo $mt_tright_contact_title; ?></h5>

<p><?php echo $mt_tright_contact_text; ?></p>

<ul>

<?php if (!empty($mt_tright_contact_address) ): ?>

<li><span><?php _e('Address: ', 'match')?></span><?php echo $mt_tright_contact_address; ?></li>

<?php endif; ?>

<?php if (!empty($mt_tright_contact_phone) ): ?>

<li><span><?php _e('Phone: ', 'match')?></span><?php echo $mt_tright_contact_phone; ?></li>

<?php endif; ?>

<?php if (!empty($mt_tright_contact_fax) ): ?>

<li><span><?php _e('Fax: ', 'match')?></span><?php echo $mt_tright_contact_fax; ?></li>

<?php endif; ?>

<?php if (!empty($mt_tright_contact_email) ): ?>

<li><span><?php _e('Email: ', 'match')?></span><?php echo $mt_tright_contact_email; ?></li>

<?php endif; ?>

</ul>

<?php
		$mt_gmap_contact = ot_get_option( 'mt_gmap_contact');
	
if (!empty($mt_gmap_contact) ): ?>

<div class="video-widget">

		<?php echo $mt_gmap_contact;?>

</div>

<?php endif; ?>

</div><!--.contact-right-->

</div><!--.col-md-6-->

</div><!--.row-->

</div><!--.container-->

</section><!--.page-content-->

</div><!-- end main-->
<?php get_footer(); ?>