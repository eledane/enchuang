<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
global $enchuang_options;
?>
	  <!-- start footer -->	  
	  <footer class="footer">	  
	    <div class="footer-top">		
	      <div class="container">		  
	        <div class="row">			
	          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	            <a class="logo" href="<?php echo get_home_url(); ?>"><img src="<?php echo $enchuang_options['footer_logo']['url']; ?>" alt="" /></a>
				<p class="text-widget"><?php echo $enchuang_options['footer_logo_desc']; ?></p>				
		      </div>			  

	          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	            <h5 class="widget-title">友情链接</h5>	
				<ul class="post-list">
				  <li><a href="#">Ibiza amazing 5 star hotel</a></li>
				  <li><a href="#">It's time to get discounts</a></li>
				  <li><a href="#">It's a good hotel for you</a></li>				  
				</ul>					
		      </div>			  

	        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	            <h5 class="widget-title">友情链接</h5>	
				<ul class="post-list">
				  <li><a href="#">Ibiza amazing 5 star hotel</a></li>
				  <li><a href="#">It's a good hotel for you</a></li>				  
				  <li><a href="#">It's a good hotel for you</a></li>				  
				</ul>					
		      </div>  

	          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	            <h5 class="widget-title"><?php pll_e('联系我们');?></h5>
			  <ul class="footer-contact">
			    <li><i class="fa fa-map-marker"></i><span><?php pll_e('Address'); ?>: <?php echo $enchuang_options['address']; ?> </span></li>
			    <li><i class="fa fa-phone"></i><span><?php pll_e('Phone');?>: <?php echo $enchuang_options['cellphone']; ?></span></li>	
			    <li><i class="fa fa-envelope"></i><span>Email: <a href="mailto:<?php echo $enchuang_options['email']; ?>"><?php echo $enchuang_options['email']; ?></a></span></li>				
			  </ul>	
								  
		      </div>			  
		    </div>			
		  </div>		  
		</div>
		<!-- end footer-top -->		
		<!-- start footer-bottom -->		
	    <div class="footer-bottom">		
	      <div class="container">		  
	        <div class="row">			
	          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><p><?php echo $enchuang_options['copyright']; ?></p></div>
	          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			      <ul class="footer-menu">
			      <li><?php echo $enchuang_options['icp']; ?></li>
			    </ul>		
		      </div>		  
		    </div>			
		  </div>		  
		</div>		
		<!-- end footer-bottom -->		
	  </footer>
	  <!-- end footer -->		  	  
	  <nav id="menu">

	          <ul>
			       <?php
               $header_mobile_menu_args = array(
                      'theme_location' => 'header-menu',
                      'container'      => false,
                      'items_wrap'     => '%3$s',
                      'walker'         =>  new Enchuang_Header_Menu_Mobile()
                      );
                wp_nav_menu($header_mobile_menu_args);
                ?>
           </ul>
	
	  </nav><!-- /#nav -->	
    <!-- start modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">  
        <div class="modal-content">	
          <div class="modal-header">
	        <div class="form-top-left ">
              <h4 class="modal-title" id="myModalLabel"><?php pll_e('联系我们');?></h4>
		      <p class="modal-subtitle"><?php pll_e('请填写表单联系我们'); ?></p>
            </div>
            <div class="form-top-right">
              <i class="fa fa-envelope"></i>
            </div>
          </div>	  
          <div class="modal-body">	  
            <!-- contacts -->
            <div id="contacts">	  
              <div class="row">			
                <!-- alignment -->
                <?php //echo do_shortcode('[gravityform id="1" name="Contact us" title="false" description="false"]'); ?>		  
	            <div class="col-lg-12 col-md-12 col-sm-12">
	              <!-- form itself -->
                  <?php echo do_shortcode('[contact-form-7 id="189" title="Contact form 1"]');?>		  
	            </div>	
              </div>	  
            </div>	
          </div>	  
        </div>	
      </div>  
    </div>	
    <!-- end modal -->		  
	  <div class="overlay overlay-scale">
	    <button type="button" class="overlay-close">Close</button>
	    <div class="container">
         <?php get_search_form();?> 
	    </div>	
	  </div><!-- /.overlay -->  
	
    </div>
	<!-- end wrapper -->	

<?php wp_footer(); ?>
</body>
</html>
