 <?php get_header();
 
 wp_redirect(get_home_url());
 exit;
 ?> 

	  <!-- start content -->	
	  <div class="content">	  
        <div id="hero-slider" class="owl-carousel">
          <div class="item">
		    <img src="<?php bloginfo('template_url'); ?>/img/slide01.jpg" alt="" />
			<div class="container">
	          <div class="h-caption">
		        <h1 class="h-title">
		          Duis autem <br> vel eum iriure 
		        </h1>
		        <p class="h-subtitle">
		          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rhoncus <br> tempor tortor ut posuere.
		        </p>	
		        <a class="btn btn-primary" href="#">learn more</a>
		        <a class="btn btn-transparent" href="#">buy now</a>
		      </div>			
		    </div>
		  </div>		  
          <div class="item">
		    <img src="<?php bloginfo('template_url'); ?>/img/slide02.jpg" alt="" />
			<div class="container">
	          <div class="h-caption">
		        <h1 class="h-title">
		          Duis autem <br> vel eum iriure 
		        </h1>
		        <p class="h-subtitle">
		          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rhoncus <br> tempor tortor ut posuere.
		        </p>	
		        <a class="btn btn-primary" href="#"><?php pll_e('learn more'); ?></a>
		        <a class="btn btn-transparent" href="#">buy now</a>
		      </div>			
		    </div>
		  </div>
        </div><!-- /#hero-slider -->		
		<div class="block">
		  <div class="container">
		    <div class="row">
		      <div class="col-lg-6 col-md-6 col-sm-6">
		        <h2>Who we are</h2>
                <div class="line"></div>
				  <p class="subtitle" style="margin-bottom: 30px;"> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
				  <p>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum typi non.</p>
				  <div style="height: 30px; clear: both;"></div>
				  <a class="btn btn-default" style="color: #fff;" href="about.html">read more</a> 
		      </div>
		      <div class="col-lg-6 col-md-6 col-sm-6">
		        <img class="mockup" src="<?php bloginfo('template_url'); ?>/img/about.png" style="width: 350px;" alt="" />
		      </div>			  
		    </div>
		  </div>
		</div><!-- /.block -->		
		<!-- start block -->
		<div class="block grey" style="padding-bottom: 0;">			
		  <div class="container text-center">
		    <h2>Our latest projects</h2>
			<div class="line center"></div>	
            <div style="height: 20px; clear: both"></div>
		  </div>		  
            <div class="container-fluid">
              <div class="row">
			    <div class="col-lg-3 col-md-3 col-sm-3 item grid cs-style-3" style="padding: 0;"><figure><img src="<?php bloginfo('template_url'); ?>/img/portfolio/1.jpg" alt="img01"><figcaption><h3><a href="single_project.html">Project Title</a></h3><span>John Doe</span></figcaption></figure></div>
			    <div class="col-lg-3 col-md-3 col-sm-3 item grid cs-style-3" style="padding: 0;"><figure><img src="<?php bloginfo('template_url'); ?>/img/portfolio/2.jpg" alt="img02"><figcaption><h3><a href="single_project.html">Project Title</a></h3><span>John Doe</span></figcaption></figure></div>
			    <div class="col-lg-3 col-md-3 col-sm-3 item grid cs-style-3" style="padding: 0;"><figure><img src="<?php bloginfo('template_url'); ?>/img/portfolio/3.jpg" alt="img03"><figcaption><h3><a href="single_project.html">Project Title</a></h3><span>John Doe</span></figcaption></figure></div>
			    <div class="col-lg-3 col-md-3 col-sm-3 item grid cs-style-3" style="padding: 0;"><figure><img src="<?php bloginfo('template_url'); ?>/img/portfolio/4.jpg" alt="img05"><figcaption><h3><a href="single_project.html">Project Title</a></h3><span>John Doe</span></figcaption></figure></div>
              </div>				
            </div>				
			<!-- start promo-box -->
			<div class="promo-box">
			  <div class="container">			
			    <div class="row">			
			      <div class="col-lg-9 col-md-9 col-sm-9">			
			        <h2>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcor</h2>
                  </div>	
			      <div class="col-lg-3 col-md-3 col-sm-3">			
			        <a class="btn btn-transparent" href="portfolio.html">more projects</a>
                  </div>					  
                </div>		  
              </div>		  
            </div>	
			<!-- end promo-box -->			
		</div>
		<!-- end block -->			
		<!-- start block -->
		<div class="block grey" style="padding-bottom: 0;">
		  <div class="container">
		    <div class="row">
		      <div class="col-lg-6 col-md-6 col-sm-6">
		        <img class="mockup" src="<?php bloginfo('template_url'); ?>/img/responsive.png" alt="" />
		      </div>
		      <div class="col-lg-6 col-md-6 col-sm-6">
		        <h2>Clean &amp; responsive design</h2>
                <div class="line"></div>
				<p>
                  Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
                </p>
                <p>
                  vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum typi non.
				</p>  
		      </div>			  
		    </div>
		  </div>
		</div>
		<!-- end block -->
		<!-- start testimonials -->
		<div class="block testimonials">
          <div class="container">	  
		    <h2 class="text-center">Clients feedback</h2>
			<div class="line center"></div>	
              <div id="testimonial-carousel" class="owl-carousel">			  
                <div class="item">			
                <p class="client-t">
				<i class="fa fa-quote-left"></i>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet tellus elit. Ut eget mollis lacus. Donec <br> molestie nibh eu nulla tempor porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse <br> ultrices condimentum pellentesque. 
				<i class="fa fa-quote-right"></i>				  
                </p>				
				<p class="client-name">
                <a href="#">John Doe</a>, Company			
				</p> 				
				</div>				
                <div class="item">	
                <p class="client-t">
				<i class="fa fa-quote-left"></i>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet tellus elit. Ut eget mollis lacus. Donec <br> molestie nibh eu nulla tempor porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse <br> ultrices condimentum pellentesque. 
				<i class="fa fa-quote-right"></i>				  
                </p>				
				<p class="client-name">
                <a href="#">Sarah Doe</a>, Company			
				</p> 				
				</div>				
                <div class="item">	
                <p class="client-t">
				<i class="fa fa-quote-left"></i>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet tellus elit. Ut eget mollis lacus. Donec <br> molestie nibh eu nulla tempor porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse <br> ultrices condimentum pellentesque. 
				<i class="fa fa-quote-right"></i>				  
                </p>				
				<p class="client-name">
                <a href="#">Mike Doe</a>, Company			
				</p> 				
				</div>				
                <div class="item">		
                <p class="client-t">
				<i class="fa fa-quote-left"></i>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet tellus elit. Ut eget mollis lacus. Donec <br> molestie nibh eu nulla tempor porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse <br> ultrices condimentum pellentesque. 
				<i class="fa fa-quote-right"></i>				  
                </p>				
				<p class="client-name">
                <a href="#">Jessica Doe</a>, Company			
				</p> 				
				</div>				
              </div>			  
		</div>
		</div>
		<!-- end testimonials -->	
		<!-- start clients -->
		<div class="block-clients grey">
          <div class="container">
		    <ul class="clients">
			  <li><img src="<?php bloginfo('template_url'); ?>/img/clients/logo1.png" alt="" /></li>
			  <li><img src="<?php bloginfo('template_url'); ?>/img/clients/logo2.png" alt="" /></li>
			  <li><img src="<?php bloginfo('template_url'); ?>/img/clients/logo3.png" alt="" /></li>
			  <li><img src="<?php bloginfo('template_url'); ?>/img/clients/logo4.png" alt="" /></li>
			  <li><img src="<?php bloginfo('template_url'); ?>/img/clients/logo5.png" alt="" /></li>
			  <li><img src="<?php bloginfo('template_url'); ?>/img/clients/logo6.png" alt="" /></li>
			</ul>
		  </div>
		</div>
		<!-- end clients -->
	<!-- start intro -->
	<div id="intro">	
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
		<!-- start service -->
		<div class="block service">
		  <div class="container">
		    <h2 class="text-center">What can we do for you</h2>
			<div class="line center"></div>
			<p class="subtitle text-center">Duis autem vel eum iriure.</p>			  
		    <div class="row">
		      <div class="col-lg-4 col-md-4 col-sm-4 services">
		        <i class="fa fa-diamond"></i>
				<h3>Duis autem vel</h3>
				<p>Ut wisi enim ad minim veniam, quis nostrud <br> exerci tation ullamcorper suscipit lobortis <br> nisl uti aliquip ex ea eum consequat.</p>
		      </div>
		      <div class="col-lg-4 col-md-4 col-sm-4 services">
		        <i class="fa fa-hdd-o"></i>
				<h3>Nam liber tempor</h3>
				<p>Ut wisi enim ad minim veniam, quis nostrud <br> exerci tation ullamcorper suscipit lobortis <br> nisl uti aliquip ex ea eum consequat.</p>
		      </div>
		      <div class="col-lg-4 col-md-4 col-sm-4 services">
		        <i class="fa fa-paper-plane-o"></i>
				<h3>Eodem modo typi</h3>
				<p>Ut wisi enim ad minim veniam, quis nostrud <br> exerci tation ullamcorper suscipit lobortis <br> nisl uti aliquip ex ea eum consequat.</p>
		      </div>			  
		    </div>
			<div style="height: 30px; clear: both;"></div>
		    <div class="row">
		      <div class="col-lg-4 col-md-4 col-sm-4 services">
		        <i class="fa fa-lightbulb-o"></i>
				<h3>Eodem modo typi</h3>
				<p>Ut wisi enim ad minim veniam, quis nostrud <br> exerci tation ullamcorper suscipit lobortis <br> nisl uti aliquip ex ea eum consequat.</p>
		      </div>
		      <div class="col-lg-4 col-md-4 col-sm-4 services">
		        <i class="fa fa-star-o"></i>
				<h3>Duis autem vel</h3>
				<p>Ut wisi enim ad minim veniam, quis nostrud <br> exerci tation ullamcorper suscipit lobortis <br> nisl uti aliquip ex ea eum consequat.</p>
		      </div>
		      <div class="col-lg-4 col-md-4 col-sm-4 services">
		        <i class="fa fa-comment-o"></i>
				<h3>Nam liber tempor</h3>
				<p>Ut wisi enim ad minim veniam, quis nostrud <br> exerci tation ullamcorper suscipit lobortis <br> nisl uti aliquip ex ea eum consequat.</p>
		      </div>			  
		    </div>			
		  </div>
		</div>
		<!-- end service -->			
	  </div>
	  <!-- end content -->		  
  <?php get_footer();?>
