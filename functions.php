<?php 

/****************************************************/
/* Define Constants */	 
/***************************************************/

define ('THEMEROOT', get_stylesheet_directory_uri());
define ('IMAGES', THEMEROOT . '/img' );
define ('FONTS', THEMEROOT . '/fonts' );
define ('JS', THEMEROOT . '/js' );

/****************************************************/
/* Menus */	 
/***************************************************/

function register_my_menus() {
         register_nav_menus(array(

         'main-menu'=> __('Main Menu')
         ));
}
add_action('init' , 'register_my_menus');

if(function_exists('register_sidebar')) {

	register_sidebar(
    array(
         'name' => __('Main Sidebar'),
         'id' => 'main-sidebar',
         'description' => __('The main sidebar area'),
         'before_widget' => '<div class="widget">',
         'after_widget' => '</div>',
         'before_title' => '<h2>',
         'after_title' => '</h2>'
   ));

}

/****************************************************/
/* Add Theme Support for post thumbnail */  
/***************************************************/

if(function_exists('add_theme_support')) {
   add_theme_support('post-formats', array('link', 'quote', 'gallery'));
   add_theme_support('post-thumbnails', array('post'));
}

/****************************************************/
/* Load Custom Widgets */  
/***************************************************/

require_once('functions/widget-ad-260.php');
require_once('functions/popular-posts-widget.php');
require_once('functions/rh_about.php');
require_once('functions/rh_tags.php');
//require('functions/rh_options.php');
 ?>