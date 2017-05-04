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
    'supports'    => array( 'title', 'excerpt', 'comments' ),
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
    'supports'    => array( 'title', 'excerpt', 'comments' ),
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



/*
===================================
REGISTER RESOURCES POST TYPE
===================================
*/
add_action( 'init' , 'register_resources_post_type' );

function register_resources_post_type() {
  $labels = array(
    'name'                => 'Resources',
    'singular_name'       => 'Resource',
    'add_new'             => 'Add New Resource',
    'add_new_item'        => 'Add New Resource',
    'edit_item'           => 'Edit Resource',
    'new_item'            => 'New Resource',
    'all_items'           => 'All Resources',
    'view_item'           => 'View Resources',
    'search_items'        => 'Search Resources',
    'not_found'           => 'No Resource found',
    'not_found_in_trash'  => 'No Resource found in Trash',
    'parent_item_colon'   => '',
    'menu_name'           => 'Resources'
  );
  $args = array(
    'labels'      => $labels,
    'public'             => true,
    'has_archive' => true,
    'menu_icon'   => 'dashicons-images-alt2',
    'supports'    => array( 'title', 'excerpt', 'comments' ),
    'capability_type' => 'features',
    'map_meta_cap' => true,
    'capabilities' => array(
    // meta caps (don't assign these to roles)
    'edit_post'              => 'edit_resource',
    'read_post'              => 'read_resource',
    'delete_post'            => 'delete_resource',
    // primitive/meta caps
    'create_posts'           => 'create_resources',
    // primitive caps used outside of map_meta_cap()
    'edit_posts'             => 'edit_resources',
    'edit_others_posts'      => 'manage_resources',
    'publish_posts'          => 'manage_resources',
    'read_private_posts'     => 'read',
    // primitive caps used inside of map_meta_cap()
    'read'                   => 'read',
    'delete_posts'           => 'manage_resources',
    'delete_private_posts'   => 'manage_resources',
    'delete_published_posts' => 'manage_resources',
    'delete_others_posts'    => 'manage_resources',
    'edit_private_posts'     => 'edit_resources',
    'edit_published_posts'   => 'edit_resources'
    ),
  );
  register_post_type( 'resources', $args );
}
/*
==============================
RESOURCES TAXONOMY
==============================
*/
function resources_init() {
    // create a new taxonomy
    register_taxonomy(
        'resources_type',
        'resources',
        array(
            'label' => __( 'Resource Type' ),
            'rewrite' => array( 'slug' => 'resources' ),
            'hierarchical' => true,
            'hasArchive' => true,
            'show_ui' => true,
            'capabilities' => array(
                'assign_terms' => 'edit_resources',
                'edit_terms' => 'publish_resources'
            )
        )
    );
}
add_action( 'init', 'resources_init' );


/*
===================================
REGISTER LANGUAUGE STYLE POST TYPE
===================================
*/
add_action( 'init' , 'register_language_style_post_type' );

function register_language_style_post_type() {
  $labels = array(
    'name'                => 'Language Styles',
    'singular_name'       => 'Language Style',
    'add_new'             => 'Add New Language Style',
    'add_new_item'        => 'Add New Language Style',
    'edit_item'           => 'Edit Language Style',
    'new_item'            => 'New Language Style',
    'all_items'           => 'All Language Styles',
    'view_item'           => 'View Language Styles',
    'search_items'        => 'Search Language Styles',
    'not_found'           => 'No Language Style found',
    'not_found_in_trash'  => 'No Language Style found in Trash',
    'parent_item_colon'   => '',
    'menu_name'           => 'Language Styles'
  );
  $args = array(
    'labels'      => $labels,
    'public'             => true,
    'has_archive' => true,
    'menu_icon'   => 'dashicons-images-alt2',
    'supports'    => array( 'title', 'excerpt', 'comments' ),
    'capability_type' => 'features',
    'map_meta_cap' => true,
    'capabilities' => array(
    // meta caps (don't assign these to roles)
    'edit_post'              => 'edit_language_style',
    'read_post'              => 'read_language_style',
    'delete_post'            => 'delete_language_style',
    // primitive/meta caps
    'create_posts'           => 'create_language_styles',
    // primitive caps used outside of map_meta_cap()
    'edit_posts'             => 'edit_language_styles',
    'edit_others_posts'      => 'manage_language_styles',
    'publish_posts'          => 'manage_language_styles',
    'read_private_posts'     => 'read',
    // primitive caps used inside of map_meta_cap()
    'read'                   => 'read',
    'delete_posts'           => 'manage_language_styles',
    'delete_private_posts'   => 'manage_language_styles',
    'delete_published_posts' => 'manage_language_styles',
    'delete_others_posts'    => 'manage_language_styles',
    'edit_private_posts'     => 'edit_language_styles',
    'edit_published_posts'   => 'edit_language_styles'
    ),
  );
  register_post_type( 'language-styles', $args );
}
/*
==============================
RESOURCES TAXONOMY
==============================
*/
function language_styles_init() {
    // create a new taxonomy
    register_taxonomy(
        'language_styles_type',
        'language-styles',
        array(
            'label' => __( 'Language Styles Type' ),
            'rewrite' => array( 'slug' => 'language-styles' ),
            'hierarchical' => true,
            'hasArchive' => true,
            'show_ui' => true,
            'capabilities' => array(
                'assign_terms' => 'edit_language_styles',
                'edit_terms' => 'publish_language_styles'
            )
        )
    );
}
add_action( 'init', 'language_styles_init' );



/*
===================================
REGISTER DATASHEET POST TYPE
===================================
*/
add_action( 'init' , 'register_datasheet_post_type' );

function register_datasheet_post_type() {
  $labels = array(
    'name'                => 'Datasheets',
    'singular_name'       => 'Datasheet',
    'add_new'             => 'Add New Datasheet',
    'add_new_item'        => 'Add New Datasheet',
    'edit_item'           => 'Edit Datasheet',
    'new_item'            => 'New Datasheet',
    'all_items'           => 'All Datasheets',
    'view_item'           => 'View Datasheets',
    'search_items'        => 'Search Datasheets',
    'not_found'           => 'No Datasheet found',
    'not_found_in_trash'  => 'No Datasheet found in Trash',
    'parent_item_colon'   => '',
    'menu_name'           => 'Datasheets'
  );
  $args = array(
    'labels'      => $labels,
    'public'             => true,
    'has_archive' => true,
    'menu_icon'   => 'dashicons-format-aside',
    'supports'    => array( 'title', 'excerpt', 'comments', ),
    'capability_type' => 'features',
    'map_meta_cap' => true,
    'capabilities' => array(
    // meta caps (don't assign these to roles)
    'edit_post'              => 'edit_datasheet',
    'read_post'              => 'read_datasheet',
    'delete_post'            => 'delete_datasheet',
    // primitive/meta caps
    'create_posts'           => 'create_datasheets',
    // primitive caps used outside of map_meta_cap()
    'edit_posts'             => 'edit_datasheets',
    'edit_others_posts'      => 'manage_datasheets',
    'publish_posts'          => 'manage_datasheets',
    'read_private_posts'     => 'read',
    // primitive caps used inside of map_meta_cap()
    'read'                   => 'read',
    'delete_posts'           => 'manage_datasheets',
    'delete_private_posts'   => 'manage_datasheets',
    'delete_published_posts' => 'manage_datasheets',
    'delete_others_posts'    => 'manage_datasheets',
    'edit_private_posts'     => 'edit_datasheets',
    'edit_published_posts'   => 'edit_datasheets'
    ),
  );
  register_post_type( 'datasheets', $args );
}
