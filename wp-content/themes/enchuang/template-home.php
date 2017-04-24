 <?php
/**
* Template name: Home
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

        <?php 
           $sliders = get_field('home_slider');
           $about_us_img = get_field('home_about_image');
           if( $sliders ):
        ?>
       <div id="hero-slider" class="owl-carousel">
       <?php foreach( $sliders as $slider ): $slider_bg = $slider['home_slider_bg']; ?>
         <div class="item">
		        <img src="<?php echo $slider_bg['sizes']['header_background_image']; ?>" alt="" />
			     <div class="container">
	          <div class="h-caption">
		        <h1 class="h-title">
            <?php echo $slider['home_slider_title']; ?>
		        </h1>
		        <p class="h-subtitle">
            <?php echo $slider['home_slider_slogan']; ?>
		        </p>	
		        <a class="btn btn-primary" href="<?php echo $slider['home_slider_link']; ?>"><?php pll_e('了解更多');?></a>
		        <a class="btn btn-transparent" href="#" data-toggle="modal" data-target="#myModal"><?php pll_e('联系我们'); ?></a>
		      </div>			
		    </div>
		  </div>		  
      <?php endforeach; ?>
        </div><!-- /#hero-slider -->		
    <?php endif;?>

		<div class="block">
		  <div class="container">
		    <div class="row">
		      <div class="col-lg-6 col-md-6 col-sm-6">
		        <h2><?php the_field('home_about_us'); ?></h2>
                <div class="line"></div>
				  <p class="subtitle" style="margin-bottom: 30px;"><?php echo strip_tags(get_field('home_about_desc'));?></p>
          <?php the_field('home_about_content'); ?>
				  <div style="height: 30px; clear: both;"></div>
				  <a class="btn btn-default" style="color: #fff;" href="#"><?php pll_e('了解更多');?></a> 
		      </div>
		      <div class="col-lg-6 col-md-6 col-sm-6">
		        <img class="mockup" src="<?php echo $about_us_img['url']; ?>" style="width: 350px;" alt="" />
		      </div>			  
		    </div>
		  </div>
		</div><!-- /.block -->		
		<!-- start block -->
		<div class="block grey" style="padding-bottom: 0;">			
		  <div class="container text-center">
		    <h2><?php the_field('home_product_title'); ?></h2>
			<div class="line center"></div>	
            <div style="height: 20px; clear: both"></div>
		  </div>		  
         <?php $products=get_field('home_latest_product'); if( $products ):?>
            <div class="container-fluid">
              <div class="row">
			    <?php foreach( $products as $product):?> 
			    <div class="col-lg-3 col-md-3 col-sm-3 item grid cs-style-3" style="padding: 0;"><figure><img src="<?php echo get_the_post_thumbnail_url($product, 'product_header_background');?>" alt="img02"><figcaption><h3><a href="<?php echo get_permalink($product); ?>"><?php echo get_the_title( $product ); ?></a></h3></figcaption></figure></div>
			   <?php endforeach; ?> 
              </div>				
            </div>				
            <?php endif;?>
			<!-- start promo-box -->
			<div class="promo-box">
			  <div class="container">			
			    <div class="row">			
			      <div class="col-lg-9 col-md-9 col-sm-9">			
			        <h2><?php the_field('home_product_desc');?></h2>
                  </div>	
			      <div class="col-lg-3 col-md-3 col-sm-3">			
			        <a class="btn btn-transparent" href="<?php echo get_permalink(21); ?>"><?php pll_e('了解更多');?></a>
                  </div>					  
                </div>		  
              </div>		  
            </div>	
			<!-- end promo-box -->			
		</div>
		<!-- end block -->			
		<!-- start block -->
   <?php
      $recent_post_args  = array (
          'post_type' => 'post', 
          'post_status'    => 'publish',
          'posts_per_page' => 1,
          'category__in' => 7
          );  

       $recent_post = new WP_Query( $recent_post_args );
      if( $recent_post->have_posts() ):
      ?>
		<div class="block grey" style="padding-bottom: 0;">
		  <div class="container">
        <?php while( $recent_post->have_posts() ) : $recent_post->the_post(); ?>
		    <div class="row">
		      <div class="col-lg-6 col-md-6 col-sm-6">
		       <img class="mockup" src="<?php the_post_thumbnail_url('home_news_image');?>" alt="" />
		      </div>
		      <div class="col-lg-6 col-md-6 col-sm-6">
		        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                <div class="line"></div>
                 <?php the_excerpt(); ?> 
		      </div>			  
		    </div>
        <?php endwhile; wp_reset_postdata();?> 
		  </div>
		</div>
    <?php endif;?>
		<!-- end block -->
		<!-- start testimonials -->
		<div class="block testimonials">
          <div class="container">	  
		    <h2 class="text-center"><?php pll_e('公司动态');?></h2>
			<div class="line center"></div>	

            <?php
            $company_news_args  = array (
                'post_type' => 'post', 
                'post_status'    => 'publish',
                'posts_per_page' => 4,
                'category__in' => 1
                );  

             $company_news = new WP_Query( $company_news_args );
            if( $company_news->have_posts() ):
            ?>
        
              <div id="testimonial-carousel" class="owl-carousel">			  

            <?php while( $company_news->have_posts() ) : $company_news->the_post(); ?>
                <div class="item">	
                <p class="client-t">
				<i class="fa fa-quote-left"></i>
               <?php the_excerpt(); ?>
				<i class="fa fa-quote-right"></i>				  
                </p>				
				<p class="client-name">
                <a href="<?php the_permalink();?>"><?php pll_e('更多详情');?></a>		
				</p> 				
				</div>				
              <?php endwhile; wp_reset_postdata(); ?>
                				
              </div>			  
              <?php endif; ?>
		</div>
		</div>
		<!-- end testimonials -->	
		<!-- start clients -->
    <?php
    global $enchuang_options;
     if( !empty($enchuang_options['partners'] )):
    ?>
		<div class="block-clients grey">
          <div class="container">
		    <ul class="clients">
         <?php foreach( $enchuang_options['partners'] as $p ):?>
			  <li> <a href="<?php echo $p['url'];?>" target="_blank" title="<?php echo $p['title'];?>"><img src="<?php echo $p['image']; ?>" alt="" /></a></li>
       <?php endforeach;?>
			</ul>
		  </div>
		</div>
<?php endif;?>

		<!-- end clients -->
	<!-- start intro -->
	<?php
  $h_services = get_field('home_mission_content');
   if( $h_services ){ $missions = enchuang_home_mission($h_services); }
   ?> 
	<!-- end intro -->	
		<!-- start service -->
		<div class="block service">
		  <div class="container">
		    <h2 class="text-center"><?php the_field('home_mission_title'); ?></h2>
			<div class="line center"></div>
			<p class="subtitle text-center"><?php the_field('home_mission_sub_title'); ?></p>			  

        <?php
        $h_services = get_field('home_mission_content');
        if( $h_services ):  
        $missions = enchuang_home_mission($h_services);
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
	  </div>
	  <!-- end content -->		  
    <?php endwhile; ?>
  <?php get_footer();?>
