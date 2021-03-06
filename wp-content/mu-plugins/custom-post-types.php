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


/*
===================================
REGISTER HEAD-TO-HEAD POST TYPE
===================================
*/
add_action( 'init' , 'register_head_to_head_post_type' );

function register_head_to_head_post_type() {
  $labels = array(
    'name'                => 'Head-to-Heads',
    'singular_name'       => 'Head-to-Head',
    'add_new'             => 'Add New Head-to-Head',
    'add_new_item'        => 'Add New Head-to-Head',
    'edit_item'           => 'Edit Head-to-Head',
    'new_item'            => 'New Head-to-Head',
    'all_items'           => 'All Head-to-Heads',
    'view_item'           => 'View Head-to-Heads',
    'search_items'        => 'Search Head-to-Heads',
    'not_found'           => 'No Head-to-Head found',
    'not_found_in_trash'  => 'No Head-to-Head found in Trash',
    'parent_item_colon'   => '',
    'menu_name'           => 'Head-to-Heads'
  );
  $args = array(
    'labels'      => $labels,
    'public'             => true,
    'has_archive' => true,
    'menu_icon'   => 'dashicons-format-aside',
    'supports'    => array( 'title', 'excerpt', 'comments', 'editor'),
    'capability_type' => 'features',
    'map_meta_cap' => true,
    'capabilities' => array(
    // meta caps (don't assign these to roles)
    'edit_post'              => 'edit_head_to_head',
    'read_post'              => 'read_head_to_head',
    'delete_post'            => 'delete_head_to_head',
    // primitive/meta caps
    'create_posts'           => 'create_head_to_heads',
    // primitive caps used outside of map_meta_cap()
    'edit_posts'             => 'edit_head_to_heads',
    'edit_others_posts'      => 'manage_head_to_heads',
    'publish_posts'          => 'manage_head_to_heads',
    'read_private_posts'     => 'read',
    // primitive caps used inside of map_meta_cap()
    'read'                   => 'read',
    'delete_posts'           => 'manage_head_to_heads',
    'delete_private_posts'   => 'manage_head_to_heads',
    'delete_published_posts' => 'manage_head_to_heads',
    'delete_others_posts'    => 'manage_head_to_heads',
    'edit_private_posts'     => 'edit_head_to_heads',
    'edit_published_posts'   => 'edit_head_to_heads'
    ),
  );
  register_post_type( 'head-to-head', $args );
}


/*
===================================
REGISTER KILLSHEETS POST TYPE
===================================
*/
add_action( 'init' , 'register_killsheets_post_type' );

function register_killsheets_post_type() {
  $labels = array(
    'name'                => 'Killsheets',
    'singular_name'       => 'Killsheet',
    'add_new'             => 'Add New Killsheet',
    'add_new_item'        => 'Add New Killsheet',
    'edit_item'           => 'Edit Killsheet',
    'new_item'            => 'New Killsheet',
    'all_items'           => 'All Killsheets',
    'view_item'           => 'View Killsheets',
    'search_items'        => 'Search Killsheets',
    'not_found'           => 'No Killsheet found',
    'not_found_in_trash'  => 'No Killsheet found in Trash',
    'parent_item_colon'   => '',
    'menu_name'           => 'Killsheets'
  );
  $args = array(
    'labels'      => $labels,
    'public'             => true,
    'has_archive' => true,
    'menu_icon'   => 'dashicons-shield',
    'supports'    => array( 'title', 'excerpt', 'comments'),
    'capability_type' => 'features',
    'map_meta_cap' => true,
    'capabilities' => array(
    // meta caps (don't assign these to roles)
    'edit_post'              => 'edit_killsheet',
    'read_post'              => 'read_killsheet',
    'delete_post'            => 'delete_killsheet',
    // primitive/meta caps
    'create_posts'           => 'create_killsheets',
    // primitive caps used outside of map_meta_cap()
    'edit_posts'             => 'edit_killsheets',
    'edit_others_posts'      => 'manage_killsheets',
    'publish_posts'          => 'manage_killsheets',
    'read_private_posts'     => 'read',
    // primitive caps used inside of map_meta_cap()
    'read'                   => 'read',
    'delete_posts'           => 'manage_killsheets',
    'delete_private_posts'   => 'manage_killsheets',
    'delete_published_posts' => 'manage_killsheets',
    'delete_others_posts'    => 'manage_killsheets',
    'edit_private_posts'     => 'edit_killsheets',
    'edit_published_posts'   => 'edit_killsheets'
    ),
  );
  register_post_type( 'killsheets', $args );
}


/*
===================================
REGISTER DOCUMENTATION POST TYPE
===================================
*/
add_action( 'init' , 'register_documentation_post_type' );

function register_documentation_post_type() {
  $labels = array(
    'name'                => 'Documentation',
    'singular_name'       => 'Documentation',
    'add_new'             => 'Add New Documentation',
    'add_new_item'        => 'Add New Documentation',
    'edit_item'           => 'Edit Documentation',
    'new_item'            => 'New Documentation',
    'all_items'           => 'All Documentation',
    'view_item'           => 'View Documentation',
    'search_items'        => 'Search Documentation',
    'not_found'           => 'No Documentation found',
    'not_found_in_trash'  => 'No Documentation found in Trash',
    'parent_item_colon'   => '',
    'menu_name'           => 'Documentation'
  );
  $args = array(
    'labels'      => $labels,
    'public'             => true,
    'has_archive' => true,
    'menu_icon'   => 'dashicons-microphone',
    'show_in_nav_menus' => false,
    'supports'    => array( 'title', 'editor', 'excerpt', 'comments'),
    'map_meta_cap' => true,
    'capability_type' => 'documentation',
    'capabilities' => array(
    // meta caps (don't assign these to roles)
    'edit_post'              => 'edit_documentation',
    'read_post'              => 'read_documentation',
    'delete_post'            => 'delete_documentation',
    // primitive/meta caps
    'create_posts'           => 'create_documentations',
    // primitive caps used outside of map_meta_cap()
    'edit_posts'             => 'edit_documentations',
    'edit_others_posts'      => 'manage_documentations',
    'publish_posts'          => 'manage_documentations',
    'read_private_posts'     => 'read',
    // primitive caps used inside of map_meta_cap()
    'read'                   => 'read',
    'delete_posts'           => 'manage_documentations',
    'delete_private_posts'   => 'manage_documentations',
    'delete_published_posts' => 'manage_documentations',
    'delete_others_posts'    => 'manage_documentations',
    'edit_private_posts'     => 'edit_documentations',
    'edit_published_posts'   => 'edit_documentations'
    ),
  );
  register_post_type( 'documentation', $args );
}


/*
===================================
REGISTER WIN/LOSS POST TYPE
===================================
*/
add_action( 'init' , 'register_win_loss_post_type' );

function register_win_loss_post_type() {
  $labels = array(
    'name'                => 'Win/Loss',
    'singular_name'       => 'Win/Loss',
    'add_new'             => 'Add New Win/Loss',
    'add_new_item'        => 'Add New Win/Loss',
    'edit_item'           => 'Edit Win/Loss',
    'new_item'            => 'New Win/Loss',
    'all_items'           => 'All Win/Losses',
    'view_item'           => 'View Win/Loss',
    'search_items'        => 'Search Win/Losses',
    'not_found'           => 'No Win/Loss found',
    'not_found_in_trash'  => 'No Win/Loss found in Trash',
    'parent_item_colon'   => '',
    'menu_name'           => 'Win/Losses'
  );
  $args = array(
    'labels'      => $labels,
    'public'             => true,
    'has_archive' => true,
    'menu_icon'   => 'dashicons-phone',
    'supports'    => array( 'title', 'excerpt', 'comments'),
    'capability_type' => 'features',
    'map_meta_cap' => true,
    'capabilities' => array(
    // meta caps (don't assign these to roles)
    'edit_post'              => 'edit_win_loss',
    'read_post'              => 'read_win_loss',
    'delete_post'            => 'delete_win_loss',
    // primitive/meta caps
    'create_posts'           => 'create_win_losses',
    // primitive caps used outside of map_meta_cap()
    'edit_posts'             => 'edit_win_losss',
    'edit_others_posts'      => 'manage_win_losses',
    'publish_posts'          => 'manage_win_losses',
    'read_private_posts'     => 'read',
    // primitive caps used inside of map_meta_cap()
    'read'                   => 'read',
    'delete_posts'           => 'manage_win_losses',
    'delete_private_posts'   => 'manage_win_losses',
    'delete_published_posts' => 'manage_win_losses',
    'delete_others_posts'    => 'manage_win_losses',
    'edit_private_posts'     => 'edit_win_losses',
    'edit_published_posts'   => 'edit_win_losses'
    ),
  );
  register_post_type( 'win-loss', $args );
}