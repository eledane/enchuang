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

<?php $ab_contents = get_field('about_us_content');
if( $ab_contents):
?>
		<div class="container-fluid">

<?php foreach( $ab_contents as $nu => $ab ): $ab_img = $ab['about_us_content_img']; $id = 'about-us'.$nu; ?>

    <?php if( $nu %2 == 0): ?>
          <div class="row" id="<?php echo $id; ?>">
            <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 0;">
              <img src="<?php echo $ab_img['sizes']['about_us_content_image'];?>" alt="" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 10px 40px;">
            <h2><?php echo $ab['about_us_content_title']; ?></h2>
            <div class="line"></div>
                <?php echo $ab['about_us_content_content'];?>
              </div>			  
          </div>

      <?php else: ?>

          <div class="row even" id="<?php echo $id; ?>">
                 <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 0; display:none">
                    <img src="<?php echo $ab_img['sizes']['about_us_content_image'];?>" alt="" />
                  </div> 
                  <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 10px 40px;">
                  <h2><?php echo $ab['about_us_content_title']; ?></h2>
                  <div class="line"></div>
                    <?php echo $ab['about_us_content_content'];?>
                    </div>			  
                  <div class="col-lg-6 col-md-6 col-sm-6 last" style="padding: 0;">
                    <img src="<?php echo $ab_img['sizes']['about_us_content_image'];?>" alt="" />
                  </div>
                </div>

          <?php endif; ?>

      <?php endforeach; ?>

		</div><!-- /.container-fluid -->	
<?php endif;?>


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
