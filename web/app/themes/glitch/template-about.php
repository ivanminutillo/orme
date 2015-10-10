<?php
/**
 * Template Name: About Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  
  <article class="single_article">
    <div class="row container">
      <div class="large-10 large-offset-1">
        <hr>
        <h1 class="article_title"><?php the_title() ?></h1>
      </div>
      <section class="content_text">
          <div class="large-10 large-offset-1 columns">
            <?php the_content(); ?>
          </div>
      </section>  
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <!--?php comments_template('/templates/comments.php'); ?-->
  </article>
 


<?php endwhile; ?>