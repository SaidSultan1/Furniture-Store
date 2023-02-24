<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <div class="single-container">
    <?php $banner_image = get_field('single_page_background');
    if (get_field('banner_background')) {
    ?>
    <div class="lf-banner-background" style="background-image: url('<?php echo $banner_image['url']; ?>');">
      <div class="lf-banner-title">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
    <?php } ?>
    <div class="lf-single-content">
        <?php $content_class = 'width-100';
        if (get_field('sidebar')) {
            $content_class = 'width-75';
        }
        ?>
        <div class="lf-single-content-left <?php echo $content_class ?>">
            <?php the_content(); ?>
        </div>
        <?php 
        if (get_field('sidebar')): ?>
        <div class="lf-single-content-right">
            <?php get_sidebar(); ?>
        </div>
        <?php endif; ?>
    </div>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
