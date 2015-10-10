<section class="guide_related" style="background-image:url('https://unsplash.it/1200/500/?random')">
  <div class="row container">
  <?php
  //for use in the loop, list 5 post titles related to first tag on current post
  $tags = wp_get_post_tags($post->ID);
  if ($tags) {
    $first_tag = $tags[0]->term_id; ?>
    <div class="large-12 columns">
      <h3 class="related_title">Articoli simili</h3>
    </div>
    <?php $args = array(
    'post_type' => 'post',
    'tag__in' => array($first_tag),
    'post__not_in' => array($post->ID),
    'posts_per_page'=>3,
    'ignore_sticky_posts'=>1
    );
    $my_query = new WP_Query($args);
      if( $my_query->have_posts() ) {
      while ($my_query->have_posts()) : $my_query->the_post(); ?>

      <div class="large-4 end columns">
        <a href="<?php the_permalink(); ?>">
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
          <div class="experiences_single" style="background-image:url(<?php echo $url; ?>)">
            <div class="single_overlay"></div>
            <div class="single_infos">
              <hr>
              <h2 class="infos_title"><?php echo get_the_title(); ?></h2>
              <ul class="infos_tag">
                <?php
                $posttags = get_the_tags();
                if ($posttags) {
                  foreach($posttags as $tag) {
                    echo '<li>' .$tag->name. '</li>'; 
                  }
                }
                ?>
              </ul>
            </div>
          </div>
        </a>
      </div>


      <?php endwhile;
      }
      wp_reset_query();
      }
      ?>
  </div>
</section>