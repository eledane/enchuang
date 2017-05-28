 <?php
/**
* Template name: Product list  
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
        <?php the_title(); ?>
		    </h1>
			<div class="line center"></div>	
		  </div>
		</div>
	    <!-- end hero -->
 <?php
   $terms = get_terms( array(
     'taxonomy' => 'product_category',
      'hide_empty' => true,
     ) );
   if( $terms ):
 ?>
	<div class="block grey">
		<div class="container">
		  <div class="row">
		    <div class="col-lg-12 col-md-12 col-sm-12">
        <?php 
        foreach ( $terms as $term ){

           if($term->parent){

            echo  enchuang_output_product_lists($term->term_id, $term->name);

          }else{
            
            echo '<div class="post">
                       <h2 class="title text-center"><a href="' . get_term_link($term->term_id) .'">'.$term->name.'</a></h2>
                  </div>';
            }
        }
        ?>			
		    </div>	
		  </div>
		</div>
		</div>	
<?php endif; ?>
	  </div>
	  <!-- end content -->		  
<?php endwhile;
get_footer();
?>
