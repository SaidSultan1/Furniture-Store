<footer>
    <div class="footer-inner">
        <div class="footer-inner-top">
            <div class="footer-inner-collumn-1 footer-inner-collumn">
                <h1>GRAND</h1>
                <p class="site-description">We are a team of designers and developers that create high quality HTML Template & Woocommerce, Shopify Theme.</p>
                <div class="contact-area">
                    <p class="address">Address : No 40 Baria Sreet 133/2, NewYork, USA.</p>
                    <p class="phone">Phone: +(1234) 567 890</p>
                    <p class="email">Email: info@example.com</p>
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
            © copyright to the furniture store
            </div>
        </div>
    </div>

<?php wp_footer(); ?>
</body>
</html>