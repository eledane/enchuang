<?php
/**
* Template name: Products center 
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
	    <div class="portfolio-hero" style="background-image: url(<?php the_post_thumbnail_url('product_header_background');?>)">
	      <div class="container text-center">
		    <h1 class="hero-title">
		     <?php the_title();?> 
		    </h1>
			<div class="line center"></div>	
		  </div>
		</div>
	    <!-- end hero -->

		<!-- start block -->
		<div class="block blue">
		
       <div class="container">

       <section id="portfolio-section">
        <div class="wrap-pad first">
            <div class="row">

                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 " >

                    <?php echo enchuang_product_center_categories(); ?>

                </div>
                <!-- ./ Filter Head div-->
                <div class="col-md-12 col-sm-12" >

                     <?php
                          $post_args  = array (
                              'post_type' => 'product', 
                              'post_status'    => 'publish',
                              'posts_per_page' => -1,
                              );  

                           $all_post = new WP_Query( $post_args );
                          if( $all_post->have_posts() ):
                          ?>
                    <ul class="portfolio-items col-3-space">
                          <?php 
                          while( $all_post->have_posts() ): 
                          $all_post->the_post();

                           $cs = get_the_terms($post->ID, "product_category");
                           $item_slug = esc_html( $cs[0]->slug );
                          ?>
                        <li class="portfolio-item <?php echo $item_slug; ?>">
                            <div class="item-main">
                                <div class="portfolio-image">
                                  <div class="item grid cs-style-3" style="padding: 0;"><figure><img src="<?php the_post_thumbnail_url(get_the_ID(), 'product_cover');?>" alt="img04"><figcaption><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></figcaption></figure></div>
                                </div>
                            </div>
                        </li>
                       <?php endwhile; ?> 
                    </ul>

					         <?php endif; wp_reset_postdata();?>	
                </div>
                <!-- ./ Content div-->
            </div>
        </div>

    </section>		  
		  
		  
		</div>
		  
		</div>	
		<!-- end block -->
		
	  </div>
	  <!-- end content -->		  
    <?php endwhile;?>	  
 <?php get_footer(); ?>
