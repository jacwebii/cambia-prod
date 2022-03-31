<?php 
/**
 Template Name: Home
*/
get_header();?>
			

<!--Video Section-->

<div class="container">
		<div class="row">
			<div class="col-lg-12">
               <div class="cover">
                   <?php the_field('banner_text'); ?>
               </div>
</div>
</div>
</div>


  <style type="text/css">
.home_top_video .top {
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
  position: relative;
}

iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.home_top_video .wrapper {
  position: relative;
  padding-bottom:0;
 
}
.proud-partner-heading{padding:0;}
#proud-partners-section{padding: 50px 50px;}
.home .service-block{min-height: 315px;}
.home .service-block h4{min-height: 100px;}


@media (min-width: 970px) and (max-width: 1200px){
	.home .service-block{min-height: 350px;}
	.home .service-block h4{min-height: 140px;}
    
}


#case-study-section{margin-bottom:0;}
.blue-btn-new{
	  background: rgba(0, 0, 0, 0) url("https://www.cambiainfo.com/wp-content/themes/cambia/img/blue-button.png") repeat scroll 0 0 / cover !important;
	  color: #fff;
	font-size: 15px;
	border-radius: 50px;
	padding: 13px 35px;
	font-weight: 600;
	display: inline-block;
	margin: 25px 0 0 0;

}
.blue-btn-new:hover {
    background: rgba(0, 0, 0, 0) url("https://www.cambiainfo.com/wp-content/themes/cambia/img/blue-button-hover.png") repeat scroll 0 0 / cover !important; color: #fff;
}
.textwidgetcustom{text-align:center;margin-bottom:10px;}
#service-section{margin-top: 0px;padding-top: 50px;}
.boxnew{font-size: 16px;color: #01144E;}
.custom-section p {
  font-size: 16px;
  color: #fff;
  padding: 0 10%;
  margin: 0;
  line-height: 38px;
}
.custom-section h1 {
  font-size: 50px;
  color: #fff;
  padding: 0;
  margin: 0 0 20px 0;
  font-weight: bold;
}
  </style>

<div class="home_top_video">
<div class="top">
<div class="wrapper">

<!-- The video   padding-bottom:200%; transform: translateY(-35.95%); -->
<video autoplay muted loop id="myVideo">
  <source src="https://cambia-images.s3.amazonaws.com/1036897694.mp4" type="video/mp4">
</video>



</div>
</div>
</div>





<?php /*?><div class="home_top_video">
<!--//player.vimeo.com/video/200017927?background=1&muted=1&autoplay=1&loop=1&badge=0&byline=0&title=0&portrait=0
https://player.vimeo.com/video/279692490?autoplay=1&loop=1&title=0&byline=0&portrait=0-->
<!--<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/279692490?autoplay=1&loop=1&badge=0&byline=0&title=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>-->
<?php */?>



<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>	
<script type="text/javascript">
$(document).ready(function(){
   // document.getElementById('vid').play();
});
</script>


</div>

<!--Video Section Ends Here-->	

<section id="about-top-banner" style="background-image: url(https://www.cambiainfo.com/wp-content/themes/cambia/img/cambia-custom-research-analytics.jpg);clear: both;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<div class="textwidgetcustom custom-research-block custom-section">
                  <h1>Custom Research and Analytics</h1>
				   <?php the_field('custom_research'); ?>
				 <a class="blue-btn-new" href="https://www.cambiainfo.com/custom/">Learn More</a>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>		
				
				
			</div><!-- About Us Text -->
			</div>
	</div><!-- row -->
	</div><!-- container -->
</section>



<section id="service-section">
	<div class="container">
		<div class="row centered">
			<div class="col-md-12">
			 <h2>Services We Provide</h2>
			<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('service_box_content') ) ?>	
			</div>
		</div><!-- row -->
		
<div class="row centered">
<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('service_box') ) ?>	
</div>		<!-- row -->

	</div><!-- container -->
	</section>
	
	
	<!-- Parallax-Banner -->
	<section class="module parallax_1 founder-rose-section" id="parallax-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
						 <?php the_field('business_consulting_content'); ?>
						</div>
					</div>
			</div>
	</section><!-- Parallax-Banner -->
	
	
			<!-- Proud Partners -->
		<div id="proud-partners-section" style="display:none;">
		<div class="container">
			<div class="row centered">
			<div class="col-lg-12">
			<div class="proud-partner-heading">
			<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('our_partner_content') ) ?>	
			</div>
			</div>	
			
<?php /*?>			<div class="col-lg-9">
						<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('our_partner_logos') ) ?>	
				</div><?php */?>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Proud Partners -->
	
	
	
	<!-- Case Study Section-->
		<div id="case-study-section">
		<div class="container cf">
			<div class="row">
			<div class="col-lg-6">
			<div class="case-study-text">
			
			<h3>Research in Action: Client Success Stories</h3>
			<p>Here are just a few examples of how we combine the science of research with insights to successfully deliver results for our clients.</p>
							
		
		<?php wp_reset_query();?>	
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args= array(
 'post_type' => 'testimonial',
 'orderby'=> 'date',
 'order'=> 'DESC',
 'paged' => $paged ,'posts_per_page' => 4
);
query_posts($args); 
    if (have_posts()) : ?>
	
		<div id="main" role="main">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
		
		
		
      <?php while (have_posts()) : the_post(); ?>
	  <li>
          <h4><?php the_title(); ?></h4>
		  <p><?php $content = get_the_content();
$content = strip_tags($content);
echo substr($content, 0, 390); ?>...</p>
         <?php //echo substr(get_the_excerpt(),0,300);?>
          <?php if( get_field('read_more_link') ) { ?><a class="green-btn" href="<?php the_field('read_more_link');?>" target="_blank">Read More</a><?php } ?>
		  </li>
		    	    		
		  <?php endwhile; ?>
		            </ul>
        </div>
      </section>
      
    </div>
   <?php endif; ?>         

</div>
</div>	
			

			<div class="col-lg-6">
					
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div>	<!-- Case Study Section-->

	
	
	
	
			<?php wp_reset_query();?>	
	
	
	
	



	
	<!-- Worldwide-Map -->
	<section id="worldwide-map">
		<div class="container">
			<div class="row">
			<div class="col-md-12">
			
			<div class="world-map-image">
			<img class="img-responsive" src="/wp-content/uploads/2018/07/worldwide-map-cambia.png" alt="market research customers around the world">
			</div>
			</div>
			</div><!-- row -->
			
			<div class="row">
			
			<div class="social-media">
			<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('home_footer_social_links') ) ?>	
			</div>

			
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- Worldwide-Map -->

				
<?php get_footer();?>