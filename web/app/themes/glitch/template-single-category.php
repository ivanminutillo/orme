<?php
/**
 * Template Name: Single Category Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <section class="guide_hero" style="background-image:url('https://unsplash.it/1440/600?image=235')">
    <div class="hero_overlay"></div>
    <div class="row container">
      <div class="hero_info">
        <hr>
        <h1 class="hero_title">Sport e avventure</h1>
        <h3 class="hero_total">12 Esperienze Disponibili</h3>
        <ul class="hero_tag">
          <li class="tag_item">history</li>
          <li class="tag_item">outdoor</li>
          <li class="tag_item">religion</li>
          <li class="tag_item">Culture</li>
        </ul>
      </div>
    </div>
  </section>
  <section class="guide tabs">
    <div class="guide_toolbar">
      <div class="row container">
        <ul class="toolbar js-herotabs-nav">
          <li class="js-herotabs-nav-item toolbar_history"><a href="#tab1">La storia</a></li>
          <li class="js-herotabs-nav-item toolbar_tour active"><a href="#tab1">Le esperienze</a></li>
        </ul>
      </div>
    </div>
    <section class="js-herotabs-tab" id="tab1">
      <div class="single_category_filter">
        <div class="row container">
          <form class="filter_form">
            <input value="tutte le città">
            <input value="Qualsiasi tipo di esperienza">
            <input value="Prezzo più basso">
            <a href="#" class="filter_button">Filtra</a>
          </form>
        </div>
      </div>
      <div class="single_category_experiences_list">
        <div class="row container">
          <div class="large-4 columns">
            <div class="experiences_single" style="background-image:url('https://unsplash.it/200/300/?random')">
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
            <div class="experiences_single" style="background-image:url('https://unsplash.it/200/300/?random')">
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
            <div class="experiences_single" style="background-image:url('https://unsplash.it/200/300/?random')">
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
            <div class="experiences_single" style="background-image:url('https://unsplash.it/200/300/?random')">
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
            <div class="experiences_single" style="background-image:url('https://unsplash.it/200/300/?random')">
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
            <div class="experiences_single" style="background-image:url('https://unsplash.it/200/300/?random')">
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
            <div class="experiences_single" style="background-image:url('https://unsplash.it/200/300/?random')">
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
            <div class="experiences_single" style="background-image:url('https://unsplash.it/200/300/?random')">
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
            <div class="experiences_single" style="background-image:url('https://unsplash.it/200/300/?random')">
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
            <div class="experiences_single" style="background-image:url('https://unsplash.it/200/300/?random')">
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
            <div class="experiences_single" style="background-image:url('https://unsplash.it/200/300/?random')">
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
            <div class="experiences_single" style="background-image:url('https://unsplash.it/200/300/?random')">
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
        </div>
      </div>
    </section>
    <section class="js-herotabs-tab" id="tab2">
      <div class="row container">
        <div class="content_text">
          <?php the_content(); ?>
        </div>
      </div>
    </section>
  </section>

<?php endwhile; ?>
