<?php

/** 
* Enqueue all the styles, scripts and fonts
**/

function lf_styles() {
    wp_enqueue_style( 'lf-main-style', get_template_directory_uri(). '/style.css' );
    
    wp_enqueue_style( 'lf-fonts', get_template_directory_uri(). '/assets/fonts.css' );
    
    wp_enqueue_style( 'lf-styles', get_template_directory_uri(). '/build/index.css' );
    
    wp_enqueue_style("font-awesome","//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

    wp_enqueue_script( 'jquery' );
    
    wp_enqueue_script( 'lf-main-scripts', get_template_directory_uri(). '/assets/js/ls-main.js', array('jquery'), true );
    
    wp_enqueue_script( 'lf-scripts', get_template_directory_uri(). '/build/index.js', array('jquery'), true );

    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri(). '/inc/owl-carousel/owl.carousel.min.js');
    
    wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri(). '/inc/owl-carousel/owl.carousel.min.css');
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

add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support("wc-product-gallery-zoom");
    add_theme_support("wc-product-gallery-lightbox");
    add_theme_support("wc-product-gallery-slider");
}

add_action( 'init', 'remove_woocommerce_content_wrapper_end' );
function remove_woocommerce_content_wrapper_end() {
    remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
}

function remove_woocommerce_default_content() {
  if ( is_shop() ) {
      remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
      remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
      remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
      remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
      remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );
      remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
      remove_action( 'woocommerce_after_shop_loop', 'woocommerce_output_all_notices', 10 );
  }
}
add_action( 'template_redirect', 'remove_woocommerce_default_content' );
add_theme_support( 'post-thumbnails' );

register_sidebar(
    array(
      'name' => 'Sidebar Location',
      'id' => 'sidebar'
    )
);

// Add user avatar to my account page
add_action( 'woocommerce_before_account_navigation', 'add_user_avatar_to_my_account_page', 5 );
function add_user_avatar_to_my_account_page() {
    if ( is_user_logged_in() ) {
        $current_user = wp_get_current_user();
        $avatar = get_avatar( $current_user->user_email, 50 );
        $welcome = sprintf( __( 'Welcome, %s', 'woocommerce' ), '<strong>' . esc_html( $current_user->display_name ) . '</strong>' );
        echo '<div class="user-avatar">' . $avatar . '</div><div class="welcome-msg">' . $welcome . '</div>';
    }
}
