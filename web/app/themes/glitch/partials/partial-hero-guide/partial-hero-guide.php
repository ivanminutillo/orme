<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
<section class="guide_hero" style="background-image:url(<?php echo $url ?>)">
  <div class="hero_overlay"></div>
  <div class="row container">
    <div class="hero_info">
      <hr>
      <h1 class="hero_title"><?php the_title(); ?></h1>
      <!--h3 class="hero_total">12 Esperienze Disponibili</h3 -->
      

      <?php 

      $posts = get_field('category');

      if( $posts ): ?>
          <ul class="hero_tag">
          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
              <?php setup_postdata($post); ?>
              <li>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </li>
          <?php endforeach; ?>
          </ul>
          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>


      <div class="hero_secondary">
        <span class="secondary_city"><?php the_field('place'); ?></span>
        <span class="secondary_duration"><?php the_field('duration'); ?></span>
      </div>
    </div>
  </div>
</section>