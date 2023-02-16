<?php

/** 
* Enqueue all the styles, scripts and fonts
**/

function lf_styles() {
    wp_enqueue_style( 'lf-main-style', get_template_directory_uri(). '/style.css' );
    wp_enqueue_style( 'lf-fonts', get_template_directory_uri(). '/assets/fonts.css' );
    wp_enqueue_style( 'lf-styles', get_template_directory_uri(). '/build/index.css' );
    wp_enqueue_style("font-awesome","//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_script( 'lf-scripts', get_template_directory_uri(). '/assets/js/header.js', array('jquery'), true );
}
add_action( 'wp_enqueue_scripts', 'lf_styles' );

/** 
* Enabled custom Logo option
**/

add_theme_support( 'custom-logo' );

/** 
* Registering nav menu
**/

register_nav_menus(
  array(
    'primary-menu'=>'Top Menu',
    'footer-menu'=>'Footer Menu'
  )
);

/** 
* Created Theme Options page
**/

if( function_exists('acf_add_options_page') ) {
    
  acf_add_options_page(array(
      'page_title' => 'Theme General Settings',
      'menu_title' => 'Theme Settings',
      'menu_slug'  => 'theme-general-settings',
      'capability' => 'edit_posts',
      'redirect'   => false
  ));
    
  acf_add_options_sub_page(array(
      'page_title' => 'Theme Footer Settings',
      'menu_title' => 'Footer',
      'parent_slug'=> 'theme-general-settings',
  ));
}