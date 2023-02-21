<?php
get_header();

while (have_posts()) {
    the_post(); ?>
    <div class="content-container">
        <?php
            if (get_the_content()) {
                the_content();
            }
            else {
                echo '<h1>' . esc_html(the_title()) . '</h1>';
            } ?>
    </div>
<?php }

get_footer();