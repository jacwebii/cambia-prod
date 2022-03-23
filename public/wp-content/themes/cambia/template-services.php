<?php 
/**
 Template Name: Service Template
*/
get_header();?>


<!--Product Tab Section-->
	<section id="product-tab-section">
	<div class="container">
<div class="row">

<div class="col-md-12">

<?php wp_nav_menu( array( 'menu' => 'Service Menu','items_wrap'  => '<ul class="" id="jsddm">%3$s</ul>' ) ); ?>

		  </div>
	</div><!-- row -->
	</div><!-- container -->
	</section><!-- About Top Banner Section -->
<!--Product Tab Section-->




<!-- About Top Banner Section -->
<?php /*?>	<section id="product-banner"><?php */?>

<?php /*?><section id="product-banner" style="background-image: <?php
	if ( has_post_thumbnail() ) {
	the_post_thumbnail_url;
} 
?>"><?php */?>


<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if ( has_post_thumbnail() ) { ?>
<section id="product-banner" <?php
    if ( $thumbnail_id = get_post_thumbnail_id() ) {
        if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, '' ) )
            printf( ' style="background-image: url(%s);"', $image_src[0] );     
    }
?>>
<?php } else { ?>
<section id="product-banner">
<?php } ?>
<?php endwhile; endif; ?>



	<div class="container">
	
	
<div class="row">

<div class="col-md-6">
			
		</div>

		<div class="col-md-6">
			<div class="product-banner-block">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php /*?><h5><?php the_title();?></h5><?php */?>
	<h1><?php the_title();?></h1>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>	
			</div>
		</div>
	</div><!-- row -->
	</div><!-- container -->
	</section><!-- About Top Banner Section -->
	
<?php if(get_field('three_key_components')) { ?>	
	<!-- Product Detail Section -->
	<section id="product-detail-section">
	<div class="container">
		<div class="row centered">
			<div class="col-md-12">
			<h2><?php the_field('three_key_components_title');?></h2>
			</div>
		</div><!-- row -->
		
		<div class="row centered">
		
<?php if(get_field('three_key_components')): $i = 0; ?>
 <?php while(has_sub_field('three_key_components')): $i++; ?>
<div class="col-md-4">
<div class="product-detail-block innovative-box-<?php echo $i; ?> item" data-aos="zoom-in">
			<div class="innovative-box-heading-<?php echo $i; ?>">
			<h1><?php echo $i; ?></h1>
			</div>
			<h5><?php the_sub_field('box_title'); ?></h5>
			<p><?php the_sub_field('box_content'); ?></p>
</div>
</div>
 <?php endwhile; ?>
<?php endif; ?>
		
		
	</div><!-- row -->
	</div><!-- container -->
	</section><!-- Product Detail Section -->
<?php } ?>		
	

<?php if(get_field('bottom_lef_content_list')) { ?>
		
	<!-- Innovative Design  -->
	<section id="innovative-design ">
		<div class="container">
			<div class="row">
			<div class="col-md-6">
			<div class="innovative-heading-text">
			<h2><?php the_field('bottom_lef_content_title');?></h2>

<?php if(get_field('bottom_lef_content_list')): $i = 0; ?>
<ul>
<?php while(has_sub_field('bottom_lef_content_list')): $i++; ?>
<li class="innovative-design-link section-<?php echo $i; ?>">
<?php the_sub_field('list_title'); ?>
<p><?php the_sub_field('list_content'); ?></p>
</li>
<?php endwhile; ?>
</ul>
<?php endif; ?>

			
			</div>
			</div>
			
			<div class="col-md-6">
			<div class="innovative-design-img">
			<?php if( get_field('bottom_right_image') ){ ?>
			<img src="<?php the_field('bottom_right_image');?>" />
			<?php } ?>
			</div>
			</div>
			
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- Innovative Design  -->

<?php } ?>

	
<?php if(get_field('bottom_content_section')) { ?>
<div class="bottom_service_content">
<div class="container">
<div class="row">
<?php the_field('bottom_content_section'); ?>
</div>
<div class="clear"></div>
</div>
</div>
<?php } ?>


	<script>
AOS.init({
  duration: 1200,
})
</script>	
	
<?php get_footer();?>