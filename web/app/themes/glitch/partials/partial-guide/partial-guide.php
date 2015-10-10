  <section class="guide tabs">
      <div class="guide_toolbar">
        <div class="row container">
          <ul class="toolbar js-herotabs-nav">
              <li class="js-herotabs-nav-item"><a href="#tab1">La storia</a></li>
              <li class="js-herotabs-nav-item"><a href="#tab2">Tour</a></li>
              <li class="js-herotabs-nav-item"><a href="#tab3">Feedback</a></li>
          </ul>
          <div class="toolbar_cart">
            <div class="cart_price">
              <span class="price_total"><?php the_field('price'); ?>€</span>
              <span class="price_info">A Persona</span>
            </div>
            <form class="cart_form">
              <select class="form_person"> <option>1 persona</option></select>
              <select class="form_date"> <option>Scegli la data</option></select>
            </form>
            <a href="#" class="cart_button">Prenota ora</a>
          </div>
        </div>
      </div>
      <div class="guide_history content_text js-herotabs-tab" id="tab1">
          <div class="row container">
            <div class="large-7 columns">
              <?php the_content(); ?>
            </div>
          </div>
      </div>
      <div class="partial_tour js-herotabs-tab" id="tab2">
          <div class="row container">
            <div class="large-6 large-offset-1 columns">
              <div class="tour_container">
                <h2 class="tour_title"><?php the_field('start_title') ?></h2>
                <p class="tour_description"><?php the_field('start_tagline') ?></p>
                  <?php if( have_rows('steps') ): ?>
                    <div class="tour">
                    <?php while( have_rows('steps') ): the_row();?>
                      <div class="tour_single">
                        <h2 class="single_step"><?php the_sub_field('time')?></h2>
                        <h3 class="single_title"><?php the_sub_field('text')?></h3>
                        <p><?php the_sub_field('info')?></p>
                      </div>
                    <?php endwhile; ?>
                    </div>
                  <?php endif; ?>
                <h2 class="tour_end"><?php the_field('end_title') ?></h2>
                <p class="tour_description"><?php the_field('end_info') ?></p>
              </div>
            </div>
          </div>
      </div>
      <div class="partial_feedback js-herotabs-tab" id="tab3">
          <div class="row container">
            <div class="large-8 columns">
              <h2 class="feedback_title">7 Recensioni ricevute</h2>
                <div class="feedback_recap large-10 columns">
                  <div class="large-6 columns">
                    <div class="recap_single">
                      Divertimento
                      <span class="single_vote"></span>
                    </div>
                    <div class="recap_single">
                      Comunicazione
                      <span class="single_vote"></span>
                    </div>
                    <div class="recap_single">
                      Bellezza
                      <span class="single_vote"></span>
                    </div>
                  </div>
                  <div class="large-6 columns">
                    <div class="recap_single">
                      Divertimento
                      <span class="single_vote"></span>
                    </div>
                    <div class="recap_single">
                      Comunicazione
                      <span class="single_vote"></span>
                    </div>
                    <div class="recap_single">
                      Bellezza
                      <span class="single_vote"></span>
                    </div>
                  </div>
                </div>
                <div class="large-10 end columns">
                  <div class="feedback_list">
                    <div class="list_user">
                      <span class="user_photo"><img src="https://unsplash.it/100/100/?random"></span>
                      <h4 class="user_name">Antonio Faiella</h4>
                      <span class="user_date">- 12 days ago</span>
                      <p class="user_feedback">Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar.</p>
                    </div>
                    <div class="list_user">
                      <span class="user_photo"><img src="https://unsplash.it/100/100/?random"></span>
                      <h4 class="user_name">Antonio Faiella</h4>
                      <span class="user_date">- 12 days ago</span>
                      <p class="user_feedback">Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar.</p>
                    </div>
                    <div class="list_user">
                      <span class="user_photo"><img src="https://unsplash.it/100/100/?random"></span>
                      <h4 class="user_name">Antonio Faiella</h4>
                      <span class="user_date">- 12 days ago</span>
                      <p class="user_feedback">Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar.</p>
                    </div>
                    <div class="list_user">
                      <span class="user_photo"><img src="https://unsplash.it/100/100/?random"></span>
                      <h4 class="user_name">Antonio Faiella</h4>
                      <span class="user_date">- 12 days ago</span>
                      <p class="user_feedback">Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar.</p>
                    </div>
                    <div class="list_user">
                      <span class="user_photo"><img src="https://unsplash.it/100/100/?random"></span>
                      <h4 class="user_name">Antonio Faiella</h4>
                      <span class="user_date">- 12 days ago</span>
                      <p class="user_feedback">Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar.</p>
                    </div>
                    <div class="list_user">
                      <span class="user_photo"><img src="https://unsplash.it/100/100/?random"></span>
                      <h4 class="user_name">Antonio Faiella</h4>
                      <span class="user_date">- 12 days ago</span>
                      <p class="user_feedback">Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar.</p>
                    </div>
                    <div class="list_user">
                      <span class="user_photo"><img src="https://unsplash.it/100/100/?random"></span>
                      <h4 class="user_name">Antonio Faiella</h4>
                      <span class="user_date">- 12 days ago</span>
                      <p class="user_feedback">Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar Minions ipsum jiji jeje daa la bodaaa tulaliloo hahaha ti aamoo! Daa underweaaar.</p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
  </section>