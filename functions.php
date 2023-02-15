<?php

function fs_styles() {
    wp_enqueue_style( 'sf-main-style', get_template_directory_uri(). '/style.css' );
    wp_enqueue_style( 'sf-fonts', get_template_directory_uri(). '/assets/fonts.css' );
    wp_enqueue_style( 'sf-styles', get_template_directory_uri(). '/build/index.css' );
    wp_enqueue_style(
      "font-awesome","//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
  }
  add_action( 'wp_enqueue_scripts', 'fs_styles' );

  add_theme_support( 'custom-logo' );