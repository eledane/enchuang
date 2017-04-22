<?php
/**
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Bright 
* @since Bright 1.0
*/

get_header();
?>

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
		    <?php the_content();?>  
			  <!-- end post -->
              <?php previous_post_link(); ?> 
              <?php next_post_link(); ?> 
		    </div>
		
          

		    <div class="col-lg-3 col-md-3 col-sm-3">
			
			  <!-- start sidebar -->		
		      <aside class="sidebar">
			  
            <?php
                $recent_post_args  = array (
                    'post_type' => 'post', 
                   // 'category__in' => wp_get_post_categories($post->ID),
                    'post_status'    => 'publish',
                    'posts_per_page' => 5,
                    'post__not_in'   => array($post->ID)
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
                   <?php endwhile;?> 
                  </ul>
                </div>
            <?php endif;?>
            <?php wp_reset_postdata();?>
          <?php echo enchuang_get_product_categories('category'); ?>
				
			  </aside>
			  <!-- end sidebar -->
			  
		    </div>		
			
		  </div>
		  
		</div>	
		
		</div>
		
	  </div>
	  <!-- end content -->		  
    <?php endwhile; ?>
<?php get_footer();?>
