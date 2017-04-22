 <?php
/**
* Template name: Service 
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
	
	  <!-- start content -->	
	  <div class="content">	  
	    <!-- start hero -->		  
	    <div class="page-hero">
	      <div class="container text-center">
		    <h1 class="hero-title">
		      our services
		    </h1>
			<div class="line center"></div>	
		  </div>
		</div>
	    <!-- end hero -->

		<!-- start service -->
		<div class="block service" style="padding-bottom: 0;">
		  <div class="container">
		    <h2 class="title text-center">Step By Step Process</h2>
			<div class="line center"></div>
			<p class="subtitle text-center" style="margin-bottom: 60px;">Duis autem vel eum iriure.</p>	
		  </div>
		  <div class="container-fluid text-center">
		    <div class="row">
		      <div class="col-lg-3 col-md-3 col-sm-6 serv" style="padding: 0;">
                <img src="<?php bloginfo('template_url');?>/img/services/01.jpg" alt="" />
				<div class="serv-desc">
				  <h5>Meeting sessions</h5>
				  <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse consequat.</p>
		        </div>
		      </div>
		      <div class="col-lg-3 col-md-3 col-sm-6 serv" style="padding: 0;">
                <img src="<?php bloginfo('template_url');?>/img/services/02.jpg" alt="" />
				<div class="serv-desc">
				  <h5>Planning &amp; sketching</h5>
				  <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse consequat.</p>
		        </div>
		      </div>
		      <div class="col-lg-3 col-md-3 col-sm-6 serv" style="padding: 0;">
                <img src="<?php bloginfo('template_url');?>/img/services/03.jpg" alt="" />
				<div class="serv-desc">
				  <h5>Development &amp; testing</h5>
				  <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse consequat.</p>
		        </div>
		      </div>
		      <div class="col-lg-3 col-md-3 col-sm-6 serv" style="padding: 0;">
                <img src="<?php bloginfo('template_url');?>/img/services/04.jpg" alt="" />
				<div class="serv-desc">
				  <h5>Product launch</h5>
				  <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse consequat.</p>
		        </div>
		      </div>			  
		    </div>			
		  </div>
		</div>
		<!-- end service -->	
	<!-- start intro -->
	<div id="intro_2">	
        <div class="counter-wrapper" style="background-color: transparent;">
           <div class="container">		  
            <div class="row text-center">
              <div class="col-lg-3 col-md-3 col-sm-6 counter-box">		
			    <i class="icon-cup" style="display: block; font-size: 38px; color: #2dcc70; margin-bottom: 25px;"></i>
                <div class="counter" style="display: inline-block; color: #fff;">5000</div>
                <div class="title_counter"><h4>Coffes Drinked</h4></div>
		      </div>
              <div class="col-lg-3 col-md-3 col-sm-6 counter-box">		
			    <i class="icon-pencil" style="display: block; font-size: 38px; color: #2dcc70; margin-bottom: 25px;"></i>
                <div class="counter" style="display: inline-block; color: #fff;">2500</div>
                <div class="title_counter"><h4>Code Lines</h4></div>		
		      </div>		
              <div class="col-lg-3 col-md-3 col-sm-6 counter-box">			
			    <i class="icon-note" style="display: block; font-size: 38px; color: #2dcc70; margin-bottom: 25px;"></i>
                <div class="counter" style="display: inline-block; color: #fff;">400</div>
                <div class="title_counter"><h4>Pages Created</h4></div>		
		      </div>	
              <div class="col-lg-3 col-md-3 col-sm-6 counter-box">		
			    <i class="icon-star" style="display: block; font-size: 38px; color: #2dcc70; margin-bottom: 25px;"></i>
                <div class="counter" style="display: inline-block; color: #fff;">3500</div>
	            <div class="title_counter"><h4>Completed Projects</h4></div>		
		      </div>
		    </div>
		  </div>                     
		</div>
	</div> 
	<!-- end intro -->		

	  <!-- start block -->
	  <div class="block blue">
	    <div class="container">
		  <h2 class="title text-center">pricing plan</h2>
		  <div class="line center"></div>
		  <p class="subtitle text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rhoncus <br> tempor tortor ut posuere.</p>		
		
		    <div class="row">
		      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			    <div class="pricing-block text-center">
				  <div class="pricing-top">
					<ul>
					  <li class="pricing-title">standard plan</li>
					  <li class="price">29$</li>
					  <li class="price-month">per month</li>
					</ul>
				  </div>
				  <div class="pricing-desc">
				    <ul>
				    <li><span>Exercitation</span> ullam corporis</li>
				    <li><span>Molestias</span> excepturi sint</li>
				    <li><span>Ratione</span> voluptatem sequi</li>
				    <li><span>Deserunt</span> mollitia animi</li>
				    <li><span>Neque</span> porro quisquam</li>
				    <li><span>Totam</span> rem aperiam</li>			
				    </ul>
					<div style="height: 20px; clear: both;"></div>
				    <a class="btn-price" href="#"> choose plan </a>
				  </div>
				  <!-- end pricing-desc -->
			    </div>
				<!-- end pricing-block -->				
			  </div>
		      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			    <div class="pricing-block text-center">
				  <div class="pricing-top">
					<ul>
					  <li class="pricing-title">business plan</li>
					  <li class="price">49$</li>
					  <li class="price-month">per month</li>
					</ul>
				  </div>
				  <div class="pricing-desc">
				    <ul>
				    <li><span>Exercitation</span> ullam corporis</li>
				    <li><span>Molestias</span> excepturi sint</li>
				    <li><span>Ratione</span> voluptatem sequi</li>
				    <li><span>Deserunt</span> mollitia animi</li>
				    <li><span>Neque</span> porro quisquam</li>
				    <li><span>Totam</span> rem aperiam</li>			
				    </ul>
					<div style="height: 20px; clear: both;"></div>
				    <a class="btn-price" href="#"> choose plan </a>
				  </div>
				  <!-- end pricing-desc -->
			    </div>
				<!-- end pricing-block -->				
			  </div>
		      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			    <div class="pricing-block text-center">
				  <div class="pricing-top colored">
					<ul>
					  <li class="pricing-title">premium plan</li>
					  <li class="price">69$</li>
					  <li class="price-month">per month</li>
					</ul>
				  </div>
				  <div class="pricing-desc">
				    <ul>
				    <li><span>Exercitation</span> ullam corporis</li>
				    <li><span>Molestias</span> excepturi sint</li>
				    <li><span>Ratione</span> voluptatem sequi</li>
				    <li><span>Deserunt</span> mollitia animi</li>
				    <li><span>Neque</span> porro quisquam</li>
				    <li><span>Totam</span> rem aperiam</li>			
				    </ul>
					<div style="height: 20px; clear: both;"></div>
				    <a class="btn-price-colored" href="#"> choose plan </a>
				  </div>
				  <!-- end pricing-desc -->
			    </div>
				<!-- end pricing-block -->				
			  </div>
		      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			    <div class="pricing-block text-center">
				  <div class="pricing-top">
					<ul>
					  <li class="pricing-title">unlimited plan</li>
					  <li class="price">99$</li>
					  <li class="price-month">per month</li>
					</ul>
				  </div>
				  <div class="pricing-desc">
				    <ul>
				    <li><span>Duisautem</span>vel eum iriure</li>
				    <li><span>Molestias</span> excepturi sint</li>
				    <li><span>Ratione</span> voluptatem sequi</li>
				    <li><span>Deserunt</span> mollitia animi</li>
				    <li><span>Neque</span> porro quisquam</li>
				    <li><span>Totam</span> rem aperiam</li>			
				    </ul>
					<div style="height: 20px; clear: both;"></div>
				    <a class="btn-price" href="#"> choose plan </a>
				  </div>
				  <!-- end pricing-desc -->
			    </div>
				<!-- end pricing-block -->				
			  </div>		  
			</div>
		
		</div>
	  </div>
	  <!-- end block -->		
		 
			<!-- start promo-box -->
			<div class="promo-box">
			  <div class="container">			
			    <div class="row">			
			      <div class="col-lg-9 col-md-9 col-sm-9">			
			        <h2>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcor</h2>
                  </div>	
			      <div class="col-lg-3 col-md-3 col-sm-3">			
			        <a class="btn btn-transparent" href="#">contact us</a>
                  </div>					  
                </div>		  
              </div>		  
            </div>	
			<!-- end promo-box -->			 
	
	  </div>
	  <!-- end content -->		  	  
    	
<?php get_footer(); ?>
