<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content-single', get_post_type()); ?>
  <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
  <section class="guide_hero" style="background-image:url(<?php echo $url; ?>)">
    <div class="hero_overlay"></div>
    <div class="row container">
      <div class="hero_info">
        <hr>
        <h1 class="hero_title"><?php the_title(); ?></h1>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php 
            $experiences = get_posts(array(
              'post_type' => 'experience',
              'meta_query' => array(
                array(
                  'key' => 'category', // name of custom field
                  'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
                  'compare' => 'LIKE'
                )
              )
            ));
            ?>
            <?php if( $experiences ): ?>
              <?php $totalExperiences = count($experiences)?>
              <h3 class="hero_total"> <?php echo $totalExperiences; ?> Esperienze Disponibili</h3>
            <?php endif; ?>
        <?php endwhile; // end of the loop. ?>
        <?php setup_postdata($post); ?>

         <ul class="hero_tag">
          <?php
          $posttags = get_the_tags();
          if ($posttags) {
            foreach($posttags as $tag) {
              echo '<li class="tag_item">' .$tag->name. '</li>'; 
            }
          }
          ?>
        </ul>
      </div>
    </div>
  </section>
  <section class="guide tabs">
    <div class="guide_toolbar">
      <div class="row container">
        <ul class="toolbar js-herotabs-nav">
          <li class="js-herotabs-nav-item toolbar_history"><a href="#tab1">Le esperienze</a></li>
          <li class="js-herotabs-nav-item toolbar_tour"><a href="#tab2">Read more</a></li>
        </ul>
      </div>
    </div>
    <!--div class="single_category_description">
      <div class="row container">
        <div class="large-9 columns">
          <h2 class="description_title">Scegli l’energia e lorem ipsum tra diversi antani e
            retrovie da scarpintane</h2>
          <p class="description_text">Minions ipsum la bodaaa pepete uuuhhh. Baboiii butt bee do bee do bee do bappleees. Bappleees hahaha hahaha tatata bala tu pepete bappleees bappleees poulet tikka masala aaaaaah. Poopayee la bodaaa jiji gelatooo tatata bala tu jiji jeje bananaaaa. Daa belloo! Tatata bala tu underweaaar daa para tú bappleees hana dul sae. Hana dul sae po kass underweaaar poopayee potatoooo.</p>
        </div>
      </div>
    </div-->
    <section class="js-herotabs-tab" id="tab2">
    <div class="single_category_filter">
      <div class="row">
        <form class="filter_form">
          <select> <option>tutte le città</option></select>
          <select> <option>Qualsiasi tipo di esperienza</option></select>
          <select> <option>Prezzo più basso</option></select>
          <a href="#" class="filter_button">Filtra</a>
        </form>
      </div>
    </div>
    <div class="single_category_experiences_list">
      <div class="row container">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php 
            $experiences = get_posts(array(
              'post_type' => 'experience',
              'meta_query' => array(
                array(
                  'key' => 'category', // name of custom field
                  'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
                  'compare' => 'LIKE'
                )
              )
            ));
            ?>
            <?php if( $experiences ): ?>
              <?php foreach( $experiences as $experience ): ?>
                <div class="large-4 end columns">
                  <a href="<?php echo get_the_permalink($experience->ID) ?>">
                  <?php $url = wp_get_attachment_url( get_post_thumbnail_id($experience->ID) );?>
                    <div class="experiences_single" style="background-image:url(<?php echo $url ?>)">
                      <div class="single_overlay"></div>
                      <div class="single_infos">
                        <hr>
                        <h2 class="infos_title"><?php echo get_the_title( $experience->ID ); ?></h2>
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
            <?php endif; ?>
          <?php endwhile; // end of the loop. ?>
      </div>
    </div>
  </section>
    <section class="js-herotabs-tab" id="tab1">
      <div class="row container">
        <div class="large-10 columns large-centered">
          <div class="content_text">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>
  </section>
