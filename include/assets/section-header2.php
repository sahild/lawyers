 <div class="row">
        <div class="col-md-12">
        
          <?php $mt_tright_contact_phone = ot_get_option( 'mt_tright_contact_phone');
			
				$mt_tright_contact_email = ot_get_option( 'mt_tright_contact_email');	
				 ?>
        
        <ul class="header-contact-no2">
              <li class="header-phone"><span class="fa-stack"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-phone fa-stack-1x"></i></span> <?php echo $mt_tright_contact_phone; ?></li>
              <li class="header-email"><span class="fa-stack"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-envelope fa-stack-1x"></i></span> <?php echo $mt_tright_contact_email; ?></li>
            </ul><!--.header-contact-->
        
         <div class="clearfix">
       
          <?php $mt_logo = ot_get_option( 'mt_logo'); ?>
          
            <div class="logo-no2"><a href="<?php echo home_url(); ?>"><img class="img-responsive" src="<?php echo $mt_logo; ?>" alt=""/></a></div>
            
        
          <nav class="navbar navbar-custom navbar-no2" role="navigation">
           
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-navigation"> <span class="sr-only"><?php _e('Toggle navigation', 'match'); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            
            <div class="collapse navbar-collapse" id="collapse-navigation">
             
			<?php wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class' => 'nav menu-nav', 'container' => 'false')); ?>
            
            </div><!-- /.navbar-collapse -->
          </nav>  
            
          </div><!--.clearfix-->
          
        </div><!--.col-md-12-->
      </div><!--.row-->