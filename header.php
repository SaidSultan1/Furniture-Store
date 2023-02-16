<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="ls-site-header">
        <div class="header-inner">
            <div class="header-top">
                <div class="header-top-left">
                    <ul>
                        <li><a href="<?php echo esc_url(site_url(" /my-account ")) ?>">My Account</a></li>
                        <li><a href="<?php echo esc_url(site_url(" /create-account ")) ?>">Create an Account</a></li>
                    </ul>
                </div>
                <div class="header-top-right">
                    <ul>
                    <li><a href="<?php echo esc_url(site_url(" /wish-list ")) ?>">Wish List</a></li>
                    <li><a href="<?php echo esc_url(site_url(" /checkout ")) ?>">Check out</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-bottom">
                <div class="header-bottom-left">
                    <form class="search-form">
                        <input type="text" class="search-field">
                        <button class="search-btn"><i class="fa fa-search search-icon"></i></button>
                    </form>
                </div>
                <div class="header-bottom-center">
                    <div class="site-logo">
                        <?php echo esc_url(the_custom_logo());?>
                    </div>
                </div>
                <div class="header-bottom-right">
                    <div class="shop-cart">
                       <a class="cart-button" href="<?php echo esc_url(site_url(" /cart ")) ?>">My Cart-items(2)</a>
                    </div>
                </div>
            </div>
            <div class="header-nav">
                <?php 
                     wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'menu_class' => 'nav-menu'
                    ));
                ?>
            </div>
        </div>
    </header>