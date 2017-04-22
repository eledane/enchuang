<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="img/favicon.ico">
    <?php
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ): ?>
    <title><?php bloginfo('name'); ?><?php echo " | $site_description";?></title>
    <?php else: ?>
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="fakeloader"></div>  
 
	<!-- start wrapper -->	
    <div class="wrapper">	
	
		  <!-- start top-wrapper -->	
      <div class="top-wrapper"> 	  
        <!-- /.top-bar -->			
	    <div class="header">
		  <div class="container">
		    <div class="row">
			  <div class="col-lg-12 col-md-12 col-sm-12">
	            <a class="responsive-menu" href="#menu"><i class="fa fa-navicon"></i></a>
	            <a class="logo-light" href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/enchuang_logo.png" alt="" /></a>
                <ul class="second-nav">				
				  <li><a id="trigger-overlay" href="#"><i class="fa fa-search"></i></a></li>
				</ul><!-- /.second-nav -->
				<nav class="menu">
          <ul>
			       <?php
               $header_menu_args = array(
                      'theme_location' => 'header-menu',
                      'container'      => false,
                      'items_wrap'     => '%3$s',
                      'walker'         =>  new Enchuang_Header_Menu()
                      );
                wp_nav_menu($header_menu_args);
                ?>
           </ul>
				</nav>
		      </div>
		    </div>
		  </div>
	    </div><!-- /.header -->		
	  </div>
	  <!-- end top-wrapper -->	  
