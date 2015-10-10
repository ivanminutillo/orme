<?php get_template_part('templates/content-single', get_post_type()); ?>

<section class="slick-gallery">
  <h2><?php the_title(); ?></h2>
  <p><?php the_content(); ?></p>
    <?php if( have_rows('gallery') ): ?>
      <?php while ( have_rows('gallery') ) : the_row(); ?>
        <?php $image = get_sub_field('immagine'); ?>
          <img src="<?php echo $image ?>">
      <?php endwhile; ?>
    <?php endif; ?>
</section>
