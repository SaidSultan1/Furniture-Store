<?php
    $lf_footer_title = get_field('footer_site_title', 'options');
    $lf_footer_description = get_field('footer_description', 'options');
    $lf_footer_address = get_field('footer_address', 'options');
    $lf_footer_phone_number = get_field('footer_phone_number', 'options');
    $lf_footer_email = get_field('footer_email', 'options');
    $lf_footer_copyright = get_field('footer_bottom_copyright_text', 'options');
?>
<footer>
    <div class="footer-inner">
        <div class="footer-inner-top">
            <div class="footer-inner-collumn-1 footer-inner-collumn">
                <?php 
                    if($lf_footer_title) { ?>
                        <a href="<?php echo esc_url(site_url()); ?>"><img src="<?php echo $lf_footer_title; ?>"></a>
                    <?php }
                    else { ?>
                        <a href="<?php echo esc_url(site_url()); ?>" class="site-title"><h1><?php echo esc_html(get_bloginfo( 'name' )) ?></h1></a>
                    <?php }
                ?>
                <p class="site-description">
                    <?php echo esc_html($lf_footer_description); ?>
                </p>
                <div class="contact-area">
                    <p class="address">
                        <?php echo esc_html($lf_footer_address); ?>
                    </p>
                    <p class="phone">
                        <?php echo esc_html($lf_footer_phone_number); ?>
                    </p>
                    <p class="email">
                        <?php echo esc_html($lf_footer_email); ?>
                    </p>
                    <div class="social-icons"></div>
                </div>
            </div>
            <div class="footer-inner-collumn-2 footer-inner-collumn">
                <h3 class="footer-menu-heading">Company</h3>
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'footer-menu'
                    ));
                    ?>
            </div>
            <div class="footer-inner-collumn-3 footer-inner-collumn"></div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-bottom-inner">
            <div class="copyright-text">
                <?php echo esc_html($lf_footer_copyright); ?>
            </div>
        </div>
    </div>

<?php wp_footer(); ?>
</body>
</html>