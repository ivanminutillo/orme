<?php 
    add_action( 'init', 'cptui_register_my_cpts' );
    function cptui_register_my_cpts() {
      $labels = array(
        "name" => "Categories",
        "singular_name" => "Category",
        );

      $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "category", "with_front" => true ),
        "query_var" => true,
            
        "supports" => array( "title", "editor", "excerpt", "trackbacks", "revisions", "thumbnail" ),    
        "taxonomies" => array( "post_tag" )
      );
      register_post_type( "category", $args );

      $labels = array(
        "name" => "Experiences",
        "singular_name" => "Experience",
        );

      $args = array(
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "experience", "with_front" => true ),
        "query_var" => true,
            
        "supports" => array( "title", "editor", "revisions", "thumbnail" ),   
        "taxonomies" => array( "post_tag" )
      );
      register_post_type( "experience", $args );

    // End of cptui_register_my_cpts()
    }
?>


