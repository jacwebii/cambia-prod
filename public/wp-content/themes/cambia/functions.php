<?php ob_start();
/**
* @package wordpress
* @subpackage Cambia Information Group
*/


 if (function_exists('add_theme_support')) {
 add_theme_support('post-thumbnails');
 add_image_size('large-image', 650, 300, true);
  add_image_size('home-product', 109, 139, true);
   
}


 // Register the sidebars and widget classes

 if ( function_exists('register_sidebar') ) 
 register_sidebar(array(
  'name' => 'Service Box Content',
  'id' => 'service_box_content',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '<h2>',
  'after_title' => '</h2>',
 ));
 
  if ( function_exists('register_sidebar') ) 
 register_sidebar(array(
  'name' => 'Service Box',
  'id' => 'service_box',
  'before_widget' => '<div class="col-md-3"><div class="service-block about-service-block">',
  'after_widget' => '</div></div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>',
 ));
 
     if ( function_exists('register_sidebar') ) 
 register_sidebar(array(
  'name' => 'Solution Box',
  'id' => 'solution_box',
  'before_widget' => '<div class="col-md-3"><div class="service-block about-service-block">',
  'after_widget' => '</div></div>',
  'before_title' => '<h3>',
  'after_title' => '</h3>',
 ));
 
  if ( function_exists('register_sidebar') ) 
 register_sidebar(array(
  'name' => 'Our Partner Content',
  'id' => 'our_partner_content',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '<h2>',
  'after_title' => '</h2>',
 ));
 
   if ( function_exists('register_sidebar') ) 
 register_sidebar(array(
  'name' => 'Our Partner Logos',
  'id' => 'our_partner_logos',
  'before_widget' => '<p>',
  'after_widget' => '</p>',
  'before_title' => '<h2>',
  'after_title' => '</h2>',
 ));
 

    if ( function_exists('register_sidebar') ) 
 register_sidebar(array(
  'name' => 'Footer Esomar Content',
  'id' => 'footer_esomar_content',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
 ));

  

    if ( function_exists('register_sidebar') ) 
 register_sidebar(array(
  'name' => 'Home Footer Social Links',
  'id' => 'home_footer_social_links',
  'before_widget' => '',
  'after_widget' => '',
  'before_title' => '',
  'after_title' => '',
 ));

