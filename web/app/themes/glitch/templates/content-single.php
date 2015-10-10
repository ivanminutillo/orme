<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>

  <?php endwhile; ?>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>


