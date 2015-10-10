<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content-single', get_post_type()); ?>

<?php get_template_part( 'partials/partial-hero-guide/partial', 'hero-guide' ); ?>
<?php get_template_part( 'partials/partial-guide/partial', 'guide' ); ?>
<?php get_template_part( 'partials/partial-guide-related/partial', 'guide-related' ); ?>