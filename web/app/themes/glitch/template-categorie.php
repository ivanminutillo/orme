<?php
/**
 * Template Name: Categorie Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <section class="all_categories">
    <div class="row container">
      <div class="large-8 columns">
        <h1 class="categories_title">Vivi un'esperienza indimenticabile, senza filtri</h1>
        <p class="categories_description">Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar</p>
      </div>
    </div>


      <!-- MAIN CATEGORIES -->
      <section class="categories_list">
        <div class="row container">
        <?php 
          $i = 1;
          $totalPosts = count($posts);
          $columns = 4;
          $args = array(
            'post_type' => 'category',
            'posts_per_page' => -1,
          );
          $categories = new WP_Query( $args );
          // The Loop
          if ( $categories->have_posts() ):
            while ( $categories->have_posts() ):
              $categories->the_post();
        ?>
        
        <div class="large-4 end columns">
          <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
          <a href="<?php the_permalink(); ?>">
            <div class="categories_single" style="background-image:url(<?php echo $url; ?>)">
              <div class="single_overlay"></div>
              <div class="single_infos">
                <hr>
                <h2 class="infos_title"><?php echo the_title(); ?></h2>
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

        <?php
            endwhile;
          endif;
          wp_reset_query();
          wp_reset_postdata();
        ?>


          <!--div class="large-4 columns">
            <div class="categories_single" style="background-image:url('https://unsplash.it/200/300/?random')">
              <div class="single_overlay"></div>
              <div class="single_infos">
                <hr>
                <h2 class="infos_title">Sport e avventura</h2>
                <ul class="infos_tag">
                  <li>Sport</li>
                  <li>Adventure</li>
                  <li>Putdoor</li>
                  <li>Nature</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="large-4 columns">
            <div class="categories_single" style="background-image:url('https://unsplash.it/200/300/?random')">
              <div class="single_overlay"></div>
              <div class="single_infos">
                <hr>
                <h2 class="infos_title">Sport e avventura</h2>
                <ul class="infos_tag">
                  <li>Sport</li>
                  <li>Adventure</li>
                  <li>Putdoor</li>
                  <li>Nature</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="large-4 columns">
            <div class="categories_single" style="background-image:url('https://unsplash.it/200/300/?random')">
              <div class="single_overlay"></div>
              <div class="single_infos">
                <hr>
                <h2 class="infos_title">Sport e avventura</h2>
                <ul class="infos_tag">
                  <li>Sport</li>
                  <li>Adventure</li>
                  <li>Putdoor</li>
                  <li>Nature</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="large-8 columns">
            <div class="categories_single" style="background-image:url('https://unsplash.it/200/300/?random')">
              <div class="single_overlay"></div>
              <div class="single_infos">
                <hr>
                <h2 class="infos_title">Sport e avventura</h2>
                <ul class="infos_tag">
                  <li>Sport</li>
                  <li>Adventure</li>
                  <li>Putdoor</li>
                  <li>Nature</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="large-4 columns">
            <div class="categories_single" style="background-image:url('https://unsplash.it/200/300/?random')">
              <div class="single_overlay"></div>
              <div class="single_infos">
                <hr>
                <h2 class="infos_title">Sport e avventura</h2>
                <ul class="infos_tag">
                  <li>Sport</li>
                  <li>Adventure</li>
                  <li>Putdoor</li>
                  <li>Nature</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="large-4 columns">
            <div class="categories_single" style="background-image:url('https://unsplash.it/200/300/?random')">
              <div class="single_overlay"></div>
              <div class="single_infos">
                <hr>
                <h2 class="infos_title">Sport e avventura</h2>
                <ul class="infos_tag">
                  <li>Sport</li>
                  <li>Adventure</li>
                  <li>Putdoor</li>
                  <li>Nature</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="large-4 columns">
            <div class="categories_single" style="background-image:url('https://unsplash.it/200/300/?random')">
              <div class="single_overlay"></div>
              <div class="single_infos">
                <hr>
                <h2 class="infos_title">Sport e avventura</h2>
                <ul class="infos_tag">
                  <li>Sport</li>
                  <li>Adventure</li>
                  <li>Putdoor</li>
                  <li>Nature</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="large-4 columns">
            <div class="categories_single" style="background-image:url('https://unsplash.it/200/300/?random')">
              <div class="single_overlay"></div>
              <div class="single_infos">
                <hr>
                <h2 class="infos_title">Sport e avventura</h2>
                <ul class="infos_tag">
                  <li>Sport</li>
                  <li>Adventure</li>
                  <li>Putdoor</li>
                  <li>Nature</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="large-8 columns">
            <div class="categories_single" style="background-image:url('https://unsplash.it/200/300/?random')">
              <div class="single_overlay"></div>
              <div class="single_infos">
                <hr>
                <h2 class="infos_title">Sport e avventura</h2>
                <ul class="infos_tag">
                  <li>Sport</li>
                  <li>Adventure</li>
                  <li>Putdoor</li>
                  <li>Nature</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="large-4 columns">
            <div class="categories_single" style="background-image:url('https://unsplash.it/200/300/?random')">
              <div class="single_overlay"></div>
              <div class="single_infos">
                <hr>
                <h2 class="infos_title">Sport e avventura</h2>
                <ul class="infos_tag">
                  <li>Sport</li>
                  <li>Adventure</li>
                  <li>Putdoor</li>
                  <li>Nature</li>
                </ul>
              </div>
            </div>
          </div-->
        </div>
      </section>

      <!-- /MAIN CATEGORIES -->
  </section>
<?php endwhile; ?>
