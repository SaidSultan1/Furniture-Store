<?php
get_header(); ?>

<div class="lf-main-wrapper">
    <div class="lf-home-banner">
        <div class="owl-carousel owl-theme">
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
                    <div class="item banner-carousel-item">
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
</div>

<?php
get_footer();