<?php 
acf_add_local_field_group(array (
  'key' => 'group_55d2a30c1766c',
  'title' => 'Main Categories',
  'fields' => array (
    array (
      'key' => 'field_55d9a36c23657',
      'label' => 'Category title',
      'name' => 'category_title',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'Main Categories',
      'placeholder' => 'Inserisci il titolo...',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_55d9a39623658',
      'label' => 'Category tagline',
      'name' => 'category_tagline',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => 'Inserisci il sottotitolo...',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_55d9a3a723659',
      'label' => 'Categories',
      'name' => 'categories',
      'type' => 'relationship',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
        0 => 'category',
      ),
      'taxonomy' => array (
      ),
      'filters' => array (
        0 => 'search',
        1 => 'post_type',
        2 => 'taxonomy',
      ),
      'elements' => '',
      'min' => 3,
      'max' => 5,
      'return_format' => 'object',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'template-homepage.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
));
?>