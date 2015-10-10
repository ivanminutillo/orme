<!-- MAIN EXPERIENCES -->
<section class="main_experiences">
  <div class="row container">
    <h2 class="experiences_title"><?php the_field('experience_title'); ?></h2>
    <p class="experiences_description"><?php the_field('experience_tagline'); ?></p>
    
    <?php 
      $posts = get_field('experiences');
      if( $posts ): ?>
        <div class="experiences_list">
        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <div class="large-4 columns">
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
          <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>



    <!--div class="large-4 columns">
      <div class="experiences_single" style="background-image:url('https://unsplash.it/400/400?image=51')">
        <div class="single_overlay"></div>
        <div class="single_infos">
          <hr>
          <h2 class="infos_title">Trekking sul redentore</h2>
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
      <div class="experiences_single" style="background-image:url('https://unsplash.it/400/400?image=31')">
        <div class="single_overlay"></div>
        <div class="single_infos">
          <hr>
          <h2 class="infos_title">Alla scoperta delle leggende dei Monti Aurunci</h2>
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
      <div class="experiences_single" style="background-image:url('https://unsplash.it/400/400?image=231')">
        <div class="single_overlay"></div>
        <div class="single_infos">
          <hr>
          <h2 class="infos_title">Colazione all’italiana</h2>
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
      <div class="experiences_single" style="background-image:url('https://unsplash.it/800/400?image=241')">
        <div class="single_overlay"></div>
        <div class="single_infos">
          <hr>
          <h2 class="infos_title">A pesca nel Circeo</h2>
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
      <div class="experiences_single" style="background-image:url('https://unsplash.it/400/400?image=142')">
        <div class="single_overlay"></div>
        <div class="single_infos">
          <hr>
          <h2 class="infos_title">Equitazione e pranzo al sacco al monte di Gianola</h2>
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
      <div class="experiences_single" style="background-image:url('https://unsplash.it/400/400?image=132')">
        <div class="single_overlay"></div>
        <div class="single_infos">
          <hr>
          <h2 class="infos_title">La cena del pescatore</h2>
          <ul class="infos_tag">
            <li>Sport</li>
            <li>Adventure</li>
            <li>Putdoor</li>
            <li>Nature</li>
          </ul>
        </div>
      </div>
    </div -->
    <a href="#" class="experiences_button">Scopri tutte le esperienze</a>
  </div>
</section>

<!-- /MAIN EXPERIENCES -->