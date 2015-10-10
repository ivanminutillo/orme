<?php
/**
 * Template Name: Blog Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <section class="blog_hero" style="background-image:url(https://unsplash.it/1440/400?image=731)">
    <div class="row container">
      <div class="large-10 columns large-offset-1">
        <h1 class="hero_title">I want people to bow as they see me and say he is gifted with poetry, he has seen the presence of the creator.</h1>
        <h2 class="hero_tagline">- Allen Ginsberg</h2>
      </div>
    </div>
  </section>
  <section class="blog_list">
    <div class="row">


    <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
      );
      $blog = new WP_Query( $args );
      // The Loop
      if ( $blog->have_posts() ):
        while ( $blog->have_posts() ):
          $blog->the_post();
    ?>

      <div class="large-8 large-offset-2 end columns">
        <article class="list_article">
          <h3 class="article_title"><?php the_title(); ?></h3>
          <span class="article_date"><?php the_time('F j, Y'); ?></span>
          <figure class="article_image">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
            <img src="<?php echo $url ?>">
          </figure>
          <p class="article_excerpt"><?php echo substr(get_the_content(), 0,430); ?> [...]</p>
          <a href="<?php the_permalink(); ?>" class="article_button">read more</a>
        </article>
      </div>


    <?php
        endwhile;
      endif;
      wp_reset_query();
      wp_reset_postdata();
    ?>

    </div>
  </section>
  
<?php endwhile; ?>