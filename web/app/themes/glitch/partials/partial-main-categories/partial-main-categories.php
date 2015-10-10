<!-- MAIN CATEGORIES -->
<section class="main_categories">
  <div class="row container">
    <h2 class="categories_title"><?php the_field("category_title"); ?></h2>
    <p class="categories_description"><?php the_field("category_tagline"); ?></p>


  <?php 

  $posts = get_field('categories');

  if( $posts ): ?>
      <div class="categories_list">
      <?php 
        $i = 1;
        $totalPosts = count($posts);
        $columns = 4;
      ?>
      <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
          <?php setup_postdata($post); ?>
          <?php if($i % $totalPosts == 4) {
              $columns = 8;
            } else {
              $columns = 4;
            }
          ?>
          <div class="large-<?php echo $columns; ?> columns">
            <a href="<?php the_permalink(); ?>">
            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
              <div class="categories_single" style="background-image:url(<?php echo $url; ?>)">
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
          <?php $i++ ?>
        <?php endforeach; ?>
      </div>
      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
  <?php endif; ?>
    <a href="http://ormediulisse.dev/?page_id=27" class="categories_button">Scopri tutte le categorie</a>
  </div>
</section>

<!-- /MAIN CATEGORIES -->