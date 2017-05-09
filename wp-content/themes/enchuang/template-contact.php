<?php
/**
* Template name: Contact us
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
			  
			    <div class="post-thumbnail">
          <?php echo do_shortcode('[bmap id="305"]'); ?>
				</div>
				
				<!-- end post-text-grey -->

		      </div>
			  <!-- end post -->
			  
			  <!-- start comments_form -->			  
        <div class="comments_form">
				<div class="m30"></div>
			<?php echo do_shortcode('[contact-form-7 id="306" title="Contact us page"]'); ?>	
              </div>
              <!-- end comments_Form -->					  
			
		    </div>
	<?php /*		
		    <div class="col-lg-3 col-md-3 col-sm-3">
			
			  <!-- start sidebar -->		
		      <aside class="sidebar">
			  
			    <div id="recent-posts" class="widget posts_holder">
                  <h5>Recent Posts</h5>
                  <ul>
                    <li>
                      <a href="#">Tation ullamcorper suscipit </a>
                    </li>
                    <li>
                      <a href="#">Ut wisi enim ad minim veniam</a>
                    </li>
                    <li>
                      <a href="#">Lobortis nisl ut aliquip ex ea</a>
                    </li>
                    <li>
                      <a href="#">Duis autem vel eum iriure</a>
                    </li>
                    <li>
                      <a href="#">Dolor in hendrerit in vulputate</a>
                    </li>
                  </ul>
                </div>

                <div id="categories" class="widget posts_holder">
                  <h5>Categories</h5>
                  <ul>
                    <li class="cat-item">
                      <a href="#">Lifestyle</a>
                    </li>
                    <li class="cat-item">
                      <a href="#">Science</a>
                    </li>
                    <li class="cat-item">
                      <a href="#">Nature</a>
                    </li>
                    <li class="cat-item">
                      <a href="#">Events</a>
                    </li>
                    <li class="cat-item">
                      <a href="#">Photography</a>
                    </li>
                  </ul>
                </div>

                <div id="tag_cloud" class="widget posts_holder">
                  <h5>Tags</h5>
                  <div class="tagcloud">
                    <a href="#">Bootstrap</a>
                    <a href="#">Art</a>
                    <a href="#">People</a>
                    <a href="#">Website</a>
                    <a href="#">Culture</a>
                    <a href="#">Business</a>					
                    <a href="#">Nature</a>
                    <a href="#">Science</a>
                    <a href="#">Photography</a>
                    <a href="#">Gadgets</a>
                    <a href="#">Lifestyle</a>
                    <a href="#">Events</a>
                    <a href="#">Cinema</a>
                    <a href="#">Music</a>
                  </div>
                </div>
				
			  </aside>
			  <!-- end sidebar -->
			  
		    </div>		

        */ ?>
			
		  </div>
		  
		</div>	
		
		</div>
		
	  </div>
	  <!-- end content -->		  
    <?php endwhile; ?>
<?php get_footer(); ?>
