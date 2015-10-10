<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content-single', get_post_type()); ?>

<article class="single_article">
  <div class="row container">
    <div class="large-10 large-offset-1">
      <hr>
      <h1 class="article_title"><?php the_title() ?></h1>
      <ul class="article_secondary">
        <li class="secondary_item">24.04.2015</li>
        <li class="secondary_item">Rome</li>
      </ul>
    </div>
    <section class="content_text">
        <div class="large-10 large-offset-1 columns">
          <?php the_content(); ?>
        </div>
    </section>  
  </div>
  <?php get_template_part( 'partials/partial-post-related/partial', 'post-related' ); ?>
  <footer>
    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
  </footer>
  <!--?php comments_template('/templates/comments.php'); ?-->
</article>