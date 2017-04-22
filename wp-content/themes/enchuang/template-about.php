<?php
/**
* Template name: About
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
   $header_bg = get_field('about_us_bg');
   $left_img = get_field('about_us_left_img');
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
     <?php $detail = get_field('about_us_desc'); if( $detail ):?>
        <div class="block">
		  <div class="container">
		    <div class="row">
		  <?php foreach( $detail as $item ):?>	  
			  <div class="col-lg-4 col-md-4 col-sm-4">
			    <h3><?php echo $item['about_us_desc_title']; ?></h3>
          <?php echo $item['about_us_desc_content']; ?>
			  </div>
			  <?php endforeach; ?>
			</div>
		  </div>
		</div><!-- /.block -->
	  <?php endif; ?>	

		<div class="container-fluid">
		  <div class="row">
		    <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 0;">
		      <img src="<?php echo $left_img['url'];?>" alt="" />
		    </div>
		    <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 60px;">
			  <h2>Our Skills</h2>
			  <div class="line"></div>
			  <div style="height: 30px; clear: both;"></div>
			  <div class="progress_block">								

				<div class="progress_text">
				  <p class="title">WordPress Development</p>
				  <p class="number">60%</p>
				</div>
				<div class="progress"><div data-level="60"></div></div>									
				<div class="progress_text">
				  <p class="title">Web design</p>
				  <p class="number">90%</p>
				</div>
				<div class="progress"><div data-level="90"></div></div>									
				<div class="progress_text">
				  <p class="title">Programming</p>
				  <p class="number">50%</p>
				</div>
				<div class="progress"><div data-level="40"></div></div>									
				<div class="progress_text">
				  <p class="title">Photography</p>
				  <p class="number">70%</p>
				</div>
				<div class="progress"><div data-level="70"></div></div>									
		      </div>			  
		      </div>			  
		  </div>
		</div><!-- /.container-fluid -->	

    <?php
    global $enchuang_options;
     if( !empty($enchuang_options['partners'] )):
    ?>
		<!-- /.block -->	
		<div class="block" style="padding-top: 0;">
          <div class="container">
		    <h2 class="text-center"><?php the_field('about_us_agent_title'); ?></h2>
			<div class="line center"></div>
			<p class="subtitle text-center"><?php the_field('about_us_agent_desc'); ?></p>
        <ul class="clients">
         <?php foreach( $enchuang_options['partners'] as $p ):?>
			  <li> <a href="<?php echo $p['url'];?>" target="_blank" title="<?php echo $p['title'];?>"><img src="<?php echo $p['image']; ?>" alt="" /></a></li>
       <?php endforeach;?>
			</ul>
		    
		  </div>
		</div><!-- /.block -->		
  <?php endif; ?>
	  </div>
	  <!-- end content -->		  
    <?php endwhile; ?>
<?php get_footer(); ?>
