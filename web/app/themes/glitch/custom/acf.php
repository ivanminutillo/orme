<?php
define("ACF_ROOT", get_stylesheet_directory() . '/partials/');
if (function_exists('register_field_group')):
  include_once ACF_ROOT.'partial-main-categories/partial-main-categories-acf.php';
  include_once ACF_ROOT.'partial-main-experiences/partial-main-experiences-acf.php';
  include_once ACF_ROOT.'partial-cta/partial-cta-acf.php';
  include_once ACF_ROOT.'partial-text/partial-text-acf.php';
endif;
?>