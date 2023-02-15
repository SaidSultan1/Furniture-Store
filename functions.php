<?php

function fs_styles() {
    wp_enqueue_style( 'sf-main-style', get_template_directory_uri(). '/style.css' );
    wp_enqueue_style( 'sf-fonts', get_template_directory_uri(). '/assets/fonts.css' );
  }
  add_action( 'wp_enqueue_scripts', 'fs_styles' );