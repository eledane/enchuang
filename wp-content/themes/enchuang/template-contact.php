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
			<?php 
      if( get_locale() == 'en_US'){
      echo do_shortcode('[contact-form-7 id="348" title="Contact us EN"]');
      }else{
      echo do_shortcode('[contact-form-7 id="306" title="Contact us page"]');
       }
      ?>	
              </div>
              <!-- end comments_Form -->					  
			
		    </div>

		    <div class="col-lg-3 col-md-3 col-sm-3">
			
			  <!-- start sidebar -->		
		      <aside class="sidebar contact-us-aside">
			  
			    <div id="recent-posts" class="widget posts_holder">
                  <h5><?php pll_e('联系我们');?>:</h5>
                  <ul>
                  <?php if( !empty( get_field('contact_us_office')) ):?>
                    <li>
                      <?php pll_e('办公地址');?>: <?php echo  strip_tags(get_field('contact_us_office'));?>
                    </li>
                    <?php endif;?>
                    <?php if( !empty( get_field('contact_us_person')) ):?>
                    <li>
                      <?php pll_e('联系人'); ?>: <?php the_field('contact_us_person'); ?>
                    </li>
                    <?php endif; ?>
                    <?php if( !empty(get_field('contact_us_tel')) ): ?>
                    <li>
                      <?php pll_e('电话'); ?>: <?php the_field('contact_us_tel');?>
                    </li>
                    <?php endif; ?>
                    <?php if( !empty( get_field('contact_us_qq')) ):?>
                    <li>
                      <?php pll_e('QQ'); ?>: <?php the_field('contact_us_qq'); ?>
                    </li>
                    <?php endif; ?>
                    <?php if( !empty(get_field('contact_us_wechat')) ):?>
                    <li>
                      <?php pll_e('微信'); ?>: <?php the_field('contact_us_wechat'); ?>
                    </li>
                    <?php endif; ?>
                  </ul>
                </div>

	<?php /*		
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

        */ ?>
				
			  </aside>
			  <!-- end sidebar -->
			  
		    </div>		
			
		  </div>
		  
		</div>	
		
		</div>
		
	  </div>
	  <!-- end content -->		  
    <?php endwhile; ?>
<?php get_footer(); ?>
