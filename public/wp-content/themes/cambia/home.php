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


	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<div class="about-us-text">
                  
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>		
				
				
			</div><!-- About Us Text -->
			</div>
	</div><!-- row -->
	</div><!-- container -->




<section id="service-section">
	<div class="container">
		<div class="row centered">
			<div class="col-md-12">
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
		<div id="proud-partners-section">
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
          <?php if( get_field('read_more_link') ) { ?><a class="green-btn" href="<?php the_field('read_more_link');?>">Read More</a><?php } ?>
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
	
	
	
	


	<div class="container map_heading">
	<div class="row">
	<div class="col-md-12">
	<?php the_field('map_section_header');?>
	</div>
	</div>
	</div><!-- container -->
	
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