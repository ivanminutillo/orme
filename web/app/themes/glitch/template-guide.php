<?php
/**
 * Template Name: Guide Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  
  <?php get_template_part( 'partials/partial-filters/partial', 'filters' ); ?>
  <?php get_template_part( 'partials/partial-hero-guide/partial', 'hero-guide' ); ?>
  <?php get_template_part( 'partials/partial-guide/partial', 'guide' ); ?>
  <!--?php get_template_part( 'partials/partial-guide-history/partial', 'guide-history' ); ?-->
  <?php get_template_part( 'partials/partial-feedback/partial', 'feedback' ); ?>
  <!--?php get_template_part( 'partials/partial-tour/partial', 'tour' ); ?-->
  <?php get_template_part( 'partials/partial-guide-related/partial', 'guide-related' ); ?>

<?php endwhile; ?>
