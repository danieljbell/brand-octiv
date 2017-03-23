<?php
/*
===================================
REGISTER DESIGN EXAMPLE POST TYPE
===================================
*/
add_action( 'init' , 'register_design_example_post_type' );

function register_design_example_post_type() {
  $labels = array(
    'name'                => 'Design Examples',
    'singular_name'       => 'Design Example',
    'add_new'             => 'Add New Design Example',
    'add_new_item'        => 'Add New Design Example',
    'edit_item'           => 'Edit Design Example',
    'new_item'            => 'New Design Example',
    'all_items'           => 'All Design Examples',
    'view_item'           => 'View Design Examples',
    'search_items'        => 'Search Design Examples',
    'not_found'           => 'No Design Example found',
    'not_found_in_trash'  => 'No Design Example found in Trash',
    'parent_item_colon'   => '',
    'menu_name'           => 'Design Examples'
  );
  $args = array(
    'labels'      => $labels,
    'public'             => true,
    'has_archive' => true,
    'menu_icon'   => 'dashicons-media-text',
    'supports'    => array( 'title', 'editor', 'excerpt' ),
    'capability_type' => 'features',
    'map_meta_cap' => true,
    'capabilities' => array(
    // meta caps (don't assign these to roles)
    'edit_post'              => 'edit_design_example',
    'read_post'              => 'read_design_example',
    'delete_post'            => 'delete_design_example',
    // primitive/meta caps
    'create_posts'           => 'create_design_examples',
    // primitive caps used outside of map_meta_cap()
    'edit_posts'             => 'edit_design_examples',
    'edit_others_posts'      => 'manage_design_examples',
    'publish_posts'          => 'manage_design_examples',
    'read_private_posts'     => 'read',
    // primitive caps used inside of map_meta_cap()
    'read'                   => 'read',
    'delete_posts'           => 'manage_design_examples',
    'delete_private_posts'   => 'manage_design_examples',
    'delete_published_posts' => 'manage_design_examples',
    'delete_others_posts'    => 'manage_design_examples',
    'edit_private_posts'     => 'edit_design_examples',
    'edit_published_posts'   => 'edit_design_examples'
    ),
  );
  register_post_type( 'design-examples', $args );
}
/*
==============================
DESIGN EXAMPLE TAXONOMY
==============================
*/
function design_example_init() {
    // create a new taxonomy
    register_taxonomy(
        'design_example_type',
        'design-examples',
        array(
            'label' => __( 'Design Example Type' ),
            'rewrite' => array( 'slug' => 'design-examples' ),
            'hierarchical' => true,
            'hasArchive' => true,
            'show_ui' => true,
            'capabilities' => array(
                'assign_terms' => 'edit_design_examples',
                'edit_terms' => 'publish_design_examples'
            )
        )
    );
}
add_action( 'init', 'design_example_init' );



/*
===================================
REGISTER DESIGN PRINCIPLE POST TYPE
===================================
*/
add_action( 'init' , 'register_design_principle_post_type' );

function register_design_principle_post_type() {
  $labels = array(
    'name'                => 'Design Principles',
    'singular_name'       => 'Design Principle',
    'add_new'             => 'Add New Design Principle',
    'add_new_item'        => 'Add New Design Principle',
    'edit_item'           => 'Edit Design Principle',
    'new_item'            => 'New Design Principle',
    'all_items'           => 'All Design Principles',
    'view_item'           => 'View Design Principles',
    'search_items'        => 'Search Design Principles',
    'not_found'           => 'No Design Principle found',
    'not_found_in_trash'  => 'No Design Principle found in Trash',
    'parent_item_colon'   => '',
    'menu_name'           => 'Design Principles'
  );
  $args = array(
    'labels'      => $labels,
    'public'             => true,
    'has_archive' => true,
    'menu_icon'   => 'dashicons-hammer',
    'supports'    => array( 'title', 'editor', 'excerpt' ),
    'capability_type' => 'features',
    'map_meta_cap' => true,
    'capabilities' => array(
    // meta caps (don't assign these to roles)
    'edit_post'              => 'edit_design_principle',
    'read_post'              => 'read_design_principle',
    'delete_post'            => 'delete_design_principle',
    // primitive/meta caps
    'create_posts'           => 'create_design_principles',
    // primitive caps used outside of map_meta_cap()
    'edit_posts'             => 'edit_design_principles',
    'edit_others_posts'      => 'manage_design_principles',
    'publish_posts'          => 'manage_design_principles',
    'read_private_posts'     => 'read',
    // primitive caps used inside of map_meta_cap()
    'read'                   => 'read',
    'delete_posts'           => 'manage_design_principles',
    'delete_private_posts'   => 'manage_design_principles',
    'delete_published_posts' => 'manage_design_principles',
    'delete_others_posts'    => 'manage_design_principles',
    'edit_private_posts'     => 'edit_design_principles',
    'edit_published_posts'   => 'edit_design_principles'
    ),
  );
  register_post_type( 'design-principles', $args );
}
