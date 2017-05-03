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
		    <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 10px 40px;">
			  <h2>恩创简介</h2>
			  <div class="line"></div>

			   天津恩创科技有限公司坐落于天津市西青区的综合性科技企业，主要从事环保和新能源产品的研发、销售、技术和服务。<br>

         公司秉承"专业、诚信、创新"的经营宗旨，凭借完善的服务网络，为市场用户提供专业的产品和贴心的服务。主营业务涵盖室内空气净化器、车载空气净化器、气体检测仪，气体报警器，PM2.5检测仪、水质检测仪器、新能源汽车充电设备等，其相关产品包括可燃气体、有毒气体、甲醛、一氧化碳、氧气、氮气、挥发性有机物（VOCs)等气体检测仪、粉尘检测仪、重金属检测仪、COD水质在线自动监测仪；新能源汽车充电桩、充电插枪设备等，业务范围涉及汽车厂、加油站、石油、化工、医药、能源、环保、电子、市政工程、水污染处理等多个板块。公司与国内外知名公司签署良好合作关系，引进先进技术，采用进口原件研制生产具有国内领先的设备，向用户提供更多的优质技术和最佳的解决方案。<br>

         恩创科技始终秉承“用感恩的心回馈社会，为创造一个健康的生活环境而努力奋斗”为使命，以“塑造精品环保品牌 ”为愿景，本着以人为本、顾客至上的原则，竭诚为客户服务!<br>
													
		      </div>			  
		  </div>

<div class="row">
		   <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 0; display:none">
		      <img src="<?php echo $left_img['url'];?>" alt="" />
		    </div> 

		    <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 10px 40px;">
			  <h2>企业文化</h2>
			  <div class="line"></div>

			   天津恩创科技有限公司坐落于天津市西青区的综合性科技企业，主要从事环保和新能源产品的研发、销售、技术和服务。<br>

         公司秉承"专业、诚信、创新"的经营宗旨，凭借完善的服务网络，为市场用户提供专业的产品和贴心的服务。主营业务涵盖室内空气净化器、车载空气净化器、气体检测仪，气体报警器，PM2.5检测仪、水质检测仪器、新能源汽车充电设备等，其相关产品包括可燃气体、有毒气体、甲醛、一氧化碳、氧气、氮气、挥发性有机物（VOCs)等气体检测仪、粉尘检测仪、重金属检测仪、COD水质在线自动监测仪；新能源汽车充电桩、充电插枪设备等，业务范围涉及汽车厂、加油站、石油、化工、医药、能源、环保、电子、市政工程、水污染处理等多个板块。公司与国内外知名公司签署良好合作关系，引进先进技术，采用进口原件研制生产具有国内领先的设备，向用户提供更多的优质技术和最佳的解决方案。<br>

         恩创科技始终秉承“用感恩的心回馈社会，为创造一个健康的生活环境而努力奋斗”为使命，以“塑造精品环保品牌 ”为愿景，本着以人为本、顾客至上的原则，竭诚为客户服务!<br>

		      </div>			  

      <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 0;">
		      <img src="<?php echo $left_img['url'];?>" alt="" />
		    </div>
		  </div>

<div class="row">
		    <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 0;">
		      <img src="<?php echo $left_img['url'];?>" alt="" />
		    </div>
		    <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 10px 40px;">
			  <h2>社会责任</h2>
			  <div class="line"></div>

			   天津恩创科技有限公司坐落于天津市西青区的综合性科技企业，主要从事环保和新能源产品的研发、销售、技术和服务。<br>

         公司秉承"专业、诚信、创新"的经营宗旨，凭借完善的服务网络，为市场用户提供专业的产品和贴心的服务。主营业务涵盖室内空气净化器、车载空气净化器、气体检测仪，气体报警器，PM2.5检测仪、水质检测仪器、新能源汽车充电设备等，其相关产品包括可燃气体、有毒气体、甲醛、一氧化碳、氧气、氮气、挥发性有机物（VOCs)等气体检测仪、粉尘检测仪、重金属检测仪、COD水质在线自动监测仪；新能源汽车充电桩、充电插枪设备等，业务范围涉及汽车厂、加油站、石油、化工、医药、能源、环保、电子、市政工程、水污染处理等多个板块。公司与国内外知名公司签署良好合作关系，引进先进技术，采用进口原件研制生产具有国内领先的设备，向用户提供更多的优质技术和最佳的解决方案。<br>

         恩创科技始终秉承“用感恩的心回馈社会，为创造一个健康的生活环境而努力奋斗”为使命，以“塑造精品环保品牌 ”为愿景，本着以人为本、顾客至上的原则，竭诚为客户服务!<br>

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
