 <?php
/**
* Template name: Service 
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Bright 
* @since Bright 1.0
*/

get_header(); ?>

	  <?php 
   while(have_posts()): the_post();
   $header_bg = get_field('service_bg');
   $third_img = get_field('service_third_img');
   ?> 
  
	  <!-- start content -->	
	  <div class="content">	  
	    <!-- start hero -->		  
	    <div class="page-hero" style="background-image: url(<?php echo $header_bg['sizes']['product_header_background']; ?>)">
	      <div class="container text-center">
		    <h1 class="hero-title">
		     <?php the_title(); ?> 
		    </h1>
			<div class="line center"></div>	
		  </div>
		</div>
	    <!-- end hero -->

		<!-- start service -->
		<div class="block service">
		  <div class="container">
		    <h2 class="title text-center"><?php the_field('service_sec_title'); ?></h2>
			<div class="line center"></div>
			<p class="subtitle text-center"><?php the_field('service_sec_sub_title'); ?></p>			  
			      <?php
        $h_services = get_field('service_sec_desc');
        if( $h_services ):  
        $missions = enchuang_service_mission($h_services);
        ?>

        <?php
        foreach (array_chunk($missions, 3, true) as $array):
        ?> 
        <div class="row">
        <?php 
        foreach( $array as $arr ){
          echo $arr;
          }
        ?>
        </div>
        <div style="height: 30px; clear: both;"></div>
        <?php endforeach; ?>
        <?php endif; ?>
		    			
		  </div>
		</div>
		<!-- end service -->	

		  <div class="container-fluid" style="background-color: #f7f7f7;" id="downloads">
		    <div class="row">
		      <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 0;">
		        <img src="<?php echo $third_img['url']; ?>" alt="" />
		      </div>
		      <div class="col-lg-6 col-md-6 col-sm-6">
			    <div class="features-box" style="max-width: 570px;">
		          <h2><?php the_field('service_third_title'); ?></h2>
			      <div class="line"></div>				  
				  <p class="subtitle"><?php echo strip_tags(get_field('service_third_desc')); ?></p>

        <?php
        $m_p = get_field('service_third_process');
        if( $m_p ):
         $center = enchuang_service_center($m_p);
        foreach (array_chunk($center, 2, true) as $arr):
        ?>
          <div class="row text-center">
				  <?php 
          foreach( $arr as $a_c ){
            echo $a_c;
            }
          ?>  
				  </div>
          <?php endforeach;  endif; ?>

		        </div>			  
		      </div>			  
		    </div>
		  </div><!-- /.container-fluid -->	

	  </div>
	  <!-- end content -->		  	  
    	
    <?php endwhile; ?>
<?php get_footer(); ?>
