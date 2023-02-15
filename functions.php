<?php

function fs_styles() {
    wp_enqueue_style( 'sf-main-style', get_template_directory_uri(). '/style.css' );
    wp_enqueue_style( 'sf-fonts', get_template_directory_uri(). '/assets/fonts.css' );
    wp_enqueue_style( 'sf-styles', get_template_directory_uri(). '/build/index.css' );
    wp_enqueue_style("font-awesome","//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
}
add_action( 'wp_enqueue_scripts', 'fs_styles' );

add_theme_support( 'custom-logo' );

register_nav_menus(
  array(
    'primary-menu'=>'Top Menu',
    'footer-menu'=>'Footer Menu'
  )
);

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