<?php
/**
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Bright 
* @since Bright 1.0
*/
global $enchuang_options;
get_header();
?>

 <?php 
 while(have_posts()): the_post();
 $header_bg = get_field('product_bg');
 $terms = wp_get_post_terms(get_the_ID(), 'product_category'); 

 foreach( $terms as $term ){
   
   if( !$term->parent ){
     $t_slug = $term->slug;
     }
   }

   $header_bg_url = $t_slug . '-bg';
 ?> 
    <!-- start content -->	
	  <div class="content">	  
	    <!-- start hero -->		  
	    <div class="blog-hero" style="background-image: url(<?php echo $enchuang_options[$header_bg_url]['url']; ?>)">
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
		      <div class="post">
        <?php $album = get_field('product_album'); if( $album ):?>
            <div class="col-md-12 col-sm-12" >
                    <ul class="portfolio-items col-4-space">

                  <?php foreach( $album as $al ): ?>
                        <li class="portfolio-item jquery">
                            <div class="item-main">
                                <div class="portfolio-image">
                                  <div class="item grid cs-style-3" style="padding: 0;"><figure><a href="<?php echo $al['url']; ?>" class="wplightbox" data-group="gallery0"><img src="<?php echo $al['sizes']['product_cover']; ?>"></a></figure></div>
                                </div>
                            </div>
                        </li>
					        <?php endforeach;?>	

                    </ul>
                </div>
     <?php endif;?>

        <?php /* $album = get_field('product_album'); if( $album ):?>
                <div id="post-slider" class="owl-carousel">
                  <?php foreach( $album as $al ):?>
                  <div class="item"><img src="<?php echo $al['sizes']['product_album']; ?>" alt="" /></div>
        <?php endforeach; ?>
                </div>
			  <?php endif; */?>

				<div class="post-text">
			      <div class="post_details">
			       <?php the_content(); ?> 
			      </div>
                  
			    </div>
		      </div>
			  <!-- end post -->
			  
		    </div>
			
		    <div class="col-lg-3 col-md-3 col-sm-3">
			
			  <!-- start sidebar -->		
		      <aside class="sidebar">
			  
            <?php
                $recent_post_args  = array (
                    'post_type' => 'product', 
                    'post_status'    => 'publish',
                    'posts_per_page' => 5,
                    'post__not_in'   => array($post->ID)
                    );  

                 $recent_post = new WP_Query( $recent_post_args );
                if( $recent_post->have_posts() ):
                ?>
			        <div id="recent-posts" class="widget posts_holder">
                  <h5><?php pll_e('最新产品');?></h5>
                  <ul>
                  <?php while( $recent_post->have_posts() ) : $recent_post->the_post(); ?>
                    <li>
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                   <?php endwhile; wp_reset_postdata(); ?> 
                  </ul>
                </div>
            <?php endif;?>
          <?php echo enchuang_get_product_categories(); ?>
				
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
