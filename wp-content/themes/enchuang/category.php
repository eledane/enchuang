<?php
/**
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
global $enchuang_options;
get_header(); ?>
	
 	  <!-- start content -->	
	  <div class="content">	  
	    <!-- start hero -->		  
	    <div class="blog-hero" style="background-image: url(<?php echo $enchuang_options['news_background']['url'];?>)">
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

          <?php 
          while(have_posts()): the_post();
          ?> 
		      <div class="post">
			    <div class="post-thumbnail">
				  <img src="<?php the_post_thumbnail_url('product_header_background');?>" alt="" />
				</div>
				<div class="post-text">
				  <div class="post-title">
                    <h2>
                      <span class="date"><?php pll_e(get_the_date());?></span>
                      <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                    </h2>				
				  </div>
			      <div class="post_details">
			       <?php the_excerpt();?> 
			      </div>
                  <div class="post_more">
                    <a class="btn btn-default" href="<?php the_permalink();?>"><?php pll_e('了解详情'); ?></a>				  
			      </div>
			    </div>
		      </div>			
          <?php endwhile;?>

	         <?php
           // Previous/next page navigation.
           the_posts_pagination( array(
           'screen_reader_text' => ' ',
           'prev_text'          => '',
           'mid_size'           => 2,
           'next_text'          => '',
           //'show_all'    => true,
           ) );
           
          ?>

	      
			  <!-- end post -->
		    </div>
			
		    <div class="col-lg-3 col-md-3 col-sm-3">
			
			  <!-- start sidebar -->		
		      <aside class="sidebar">
              <?php
                $recent_post_args  = array (
                    'post_type' => 'post', 
                    'post_status'    => 'publish',
                    'posts_per_page' => 5,
                    );  

                 $recent_post = new WP_Query( $recent_post_args );
                if( $recent_post->have_posts() ):
                ?>
			        <div id="recent-posts" class="widget posts_holder">
                  <h5><?php pll_e('最新新闻');?></h5>
                  <ul>
                  <?php while( $recent_post->have_posts() ) : $recent_post->the_post(); ?>
                    <li>
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                   <?php endwhile; wp_reset_postdata();?> 
                  </ul>
                </div>
            <?php endif;?>
          <?php echo enchuang_get_product_categories('category'); ?>
			  </aside>
			  <!-- end sidebar -->
			  
		    </div>		
			
		  </div>
		  
		</div>
		
		</div>	
		
	  </div>
	  <!-- end content -->		  
<?php get_footer(); ?>
