<?php use Roots\Sage\Titles; ?>

<header class="main_header">
  <a href="<?= esc_url(home_url('/')); ?>" class="header_logo"></a>
  <div class="header_right">
    <ul class="right_menu">
      <!--li class="right_item"><a hfref="#">About</a></li>
      <li class="right_item"><a hfref="#">Discover</a></li-->
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </ul>
    <a href="#" class="menu_button search">Cerca</a>
  </div>




</header>

<?php get_template_part( 'partials/partial-filters/partial', 'filters' ); ?>

