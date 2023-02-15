<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="fs-site-header">
        <div class="header-inner">
            <div class="header-top">
                <div class="header-top-left">
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Create an Account</a></li>
                    </ul>
                </div>
                <div class="header-top-right">
                    <ul>
                    <li><a href="#">Wish List</a></li>
                    <li><a href="#">Check out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>