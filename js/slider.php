<?php
header("Content-type: application/x-javascript");

if(file_exists('../../../../wp-load.php')) :
	include '../../../../wp-load.php';
else:
	include '../../../../../wp-load.php';
endif; 


?>

<?php

$mt_slides_autoplay = ot_get_option( 'mt_slides_autoplay', 'on');

if($mt_slides_autoplay == 'on'):

	$mt_autoplay = 1;

else:

	$mt_autoplay = 0;

endif;

$mt_slides_speed = ot_get_option( 'mt_slides_speed', '4000');
$mt_slide_transition = ot_get_option( 'mt_slide_transition', 'fade');

 ?>

(function($) {
    "use strict";
	
	$('.flexslider-home').flexslider({
			animation: "<?php echo $mt_slide_transition;?>",
			slideshow: <?php echo $mt_autoplay;?>,
			slideshowSpeed: <?php echo $mt_slides_speed;?>,
			animationSpeed: 600, 
			directionNav: true,
			controlNav: false,
			useCSS: false
									
					});
                    
  })(jQuery);