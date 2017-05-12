  <?php
/**
* Template name: HR
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
   ?> 
 
  <!-- start content -->	
	  <div class="content">	  
	    <!-- start hero -->		  
	    <div class="blog-hero" style="background-image: url(<?php the_post_thumbnail_url('product_header_background');?>)">
	      <div class="container text-center">
		    <h1 class="hero-title">
		     <?php the_title();?> 
		    </h1>
			<div class="line center"></div>	
		  </div>
		</div>
	    <!-- end hero -->

		<div class="block grey">
		
		<div class="container">
		
		  <div class="row">
		  
		    <div class="col-lg-9 col-md-9 col-sm-9">
			
			  <!-- start post -->
		      <div class="post" style="margin-bottom: 0;">
				    <div class="post-text-grey">
			      <div class="post_details">
                   <?php the_content(); ?> 
				  </div>
				  
			    </div>
				<!-- end post-text-grey -->

		      </div>
			  <!-- end post -->
			  
			  <!-- start comments_form -->			  
              <div class="comments_form" id="joinus">
			  
				<div class="m30"></div>
       
			<?php 
      if(get_locale() == 'en_US') {
      echo do_shortcode('[contact-form-7 id="349" title="Join us en"]');
      }else{
      echo do_shortcode('[contact-form-7 id="189" title="Join us"]');
      }
      ?>	
              </div>
              <!-- end comments_Form -->					  
			
		    </div>
			
		  </div>
		  
		</div>	
		
		</div>
		
	  </div>
	  <!-- end content -->		  
    <?php endwhile; ?>
<?php get_footer(); ?>
