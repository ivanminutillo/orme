<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <?php get_template_part( 'partials/partial-hero/partial', 'hero' ); ?>
  <?php get_template_part( 'partials/partial-main-categories/partial', 'main-categories' ); ?>
  <?php get_template_part( 'partials/partial-cta/partial', 'cta' ); ?>
  <?php get_template_part( 'partials/partial-main-experiences/partial', 'main-experiences' ); ?>
  <?php get_template_part( 'partials/partial-text/partial', 'text' ); ?>



    <?php
      if( have_rows('sezione') ): ?>
        <?php 
          $counter = 1;
          while ( have_rows('sezione') ) : the_row();
            switch(get_row_layout()) {
              case 'hero':
                include "partials/partial-hero/partial-hero.php";
                break;
              case 'gallery_foto':
                include "partials/partial-gallery-foto/partial-gallery-foto.php";
                break;
            }
          $counter++;
          endwhile;
        ?>
    <?php endif; ?>
<?php endwhile; ?>
