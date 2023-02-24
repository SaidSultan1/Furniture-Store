<?php
get_header(); ?>

<div class="lf-main-wrapper">
    <div class="lf-home-banner">
        <div class="owl-carousel owl-theme banner-carousel">
            <?php
                $lf_slider_slide = get_field('slider_slides');

                if ($lf_slider_slide):
                    foreach($lf_slider_slide as $slide):
                        $background_image = $slide['slider_background_image'];
                        $sale_type = $slide['sale_type'];
                        $sale_percentage = $slide['sale_percentage'];
                        $sale_brand = $slide['sale_brand'];
                        $slider_button_text = $slide['slider_button_text'];
                        $slider_button_url = $slide['slider_button_url']; 
                        ?>
                    <div class="item banner-slides">
                        <img src="<?php echo esc_attr($background_image['url']); ?>" alt="" class="slider-image">
                        <div class="slider-content">
                            <h1 class="lf-sale-type"><?php echo esc_html($sale_type); ?></h1>
                            <h3 class="lf-sale-percentage"><?php echo esc_html($sale_percentage); ?></h3>
                            <h2 class="lf-sale-brand"><?php echo esc_html($sale_brand); ?></h2>
                            <div class="slider-btn">
                                <a href="<?php esc_url($slider_button_url) ?>" class="primary-btn"><?php echo esc_html($slider_button_text); ?></a>
                            </div>
                        </div>
                    </div>
                        <?php
                    endforeach;
                endif;
            ?>
        </div>
    </div>
    <div class="lf-services-wrapper">
        <?php 
            $services_section = get_field('services_section');
        ?>
        <div class="lf-services-container">
            <?php
                $lf_services = get_field('services_section');
                if ($lf_services) {
                    foreach ($lf_services as $services) { ?>
                        <div class="lf-services-column">
                            <div class="service-icon">
                                <img src="<?php echo esc_url($services['services_icon']['url']); ?>" alt="<?php echo esc_attr($services['services_icon']['alt']); ?>">
                            </div>
                            <div class="service-content">
                                <h4 class="service-content-heading"><?php echo esc_html($services['services_heading']); ?></h4>
                                <p class="service-content-description"><?php echo esc_html($services['services_description']); ?></p>
                            </div>
                        </div>    
                <?php }
                }
            ?>
        </div>
    </div>
    <div class="ls-home-bottom-contianer">
        <div class="product-section">
            <div class="product-cards">
                <div class="product-slider-heading-wrapper">
                    <div class="product-heading">
                        <h1>NEW PRODUCTS</h1>
                    </div>
                    <div class="custom-owl-nav product-nav-arrows"></div>
                </div>
                <div class="owl-carousel owl-theme product-carousel">
                    <?php
                        $product_arg = array(
                            'post_type' => 'product',
                            'posts_per_page' => -1
                        );

                        $product_loop = new WP_Query($product_arg);

                        while ($product_loop->have_posts()): $product_loop->the_post();
                    ?>
                    <div class="item product-card-slider">
                        <div class="product-card">
                            <div class="product-image">
                                <a href="<?php esc_url(the_permalink()) ?>">
                                <img src="<?php echo esc_url(the_post_thumbnail_url(get_the_ID())); ?>" alt="">
                                </a>
                            </div>
                            <div class="product-details">
                                <h2 class="product-title">
                                    <a href="<?php esc_url(the_permalink()) ?>"><?php esc_html(the_title()) ?></a>
                                </h2>
                                <span class="product-price"><?php echo get_woocommerce_currency_symbol() . get_post_meta( get_the_ID(), '_price', true ); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
        <div class="lf-product-section">
            <h1 class="product-category-heading">Product Category</h1>
            <div class="product-section-column">
                <?php
                    $product_categories = get_terms(array(
                        'taxonomy' => 'product_cat',
                        'hide_empty' => false,
                        'number' => 3,
                        'orderby' => 'name',
                        'order' => 'DESC'
                    ));
                    foreach ($product_categories as $category) :
                        $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                        $thumbnail_url = wp_get_attachment_url($thumbnail_id);
                        $category_link = get_term_link($category);
                ?>
                        <div class="lf-product-column-50 lf-product-column">
                            <a href="<?php echo esc_url( $category_link ); ?>" class="product-category-name"><?php echo esc_html( $category->name ); ?></a>
                            <a href="<?php echo esc_url($category_link); ?>">
                                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($category->name); ?>">
                            </a>
                        </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();