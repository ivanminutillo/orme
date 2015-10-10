  <section class="slider_hero">
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
      <section class="partial_hero" style="background-image: url(<?php echo $url ?>)">
        <div class="row">
          <div class="large-10 large-offset-1 columns">
            <h1 class="hero_title"><?php the_field('hero_tagline'); ?></h1>
            <div class="filters">
              <div class="filters_categories">
                <ul class="categories_list">
                  <li class="list_item active"><span class="item_icon icon-map"></span>All</li>
                  <li class="list_item"><span class="item_icon icon-futbol"></span>Sport</li>
                  <li class="list_item"><span class="item_icon icon-mountain"></span>wildlife</li>
                  <li class="list_item"><span class="item_icon icon-sun"></span>relax</li>
                  <li class="list_item"><span class="item_icon icon-cooking"></span>food</li>
                  <li class="list_item"><span class="item_icon icon-history"></span>history</li>
                </ul>
                <a href="#" class="categories_button">All categories <span class="button_icon arrow_right"></span></a>
              </div>
              <form class="filters_form clearfix">
                <div class="form_container">
                  <span>Dove</span> <br>
                  <select class="form_select"><option>Tutta la zona</option></select>
                </div>
                <div class="form_container">
                  <span>Quando</span> <br>
                  <select class="form_select"><option>Nessuna data</option></select>
                </div>
                <a href="#" class="form_button">filtra</a>
              </form>
            </div>
          </div>
        </div>
      </section>
  </section>
