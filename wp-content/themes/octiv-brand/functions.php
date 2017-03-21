<?php

function admin_default_page() {
  return '/';
}

add_filter('login_redirect', 'admin_default_page');


function my_login_logo() {
	echo "<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,700' rel='stylesheet' type='text/css'>";
	echo "
		<script>
			window.onload = start;

			function start() {
				var video = document.createElement('video');
				var container = document.querySelector('#login');
				video.src = 'https://octiv.com/wp-content/themes/octiv2016/dist/video/hero-video.mp4';
				video.autoplay = true;
				video.loop = true;
				document.body.appendChild(video);
			}
		</script>
	";
}

add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/dist/css/login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

/*
==============================
ADD GLOBAL CSS TO PAGE
==============================
*/
function enqueue_global_css() {
	wp_enqueue_style('style', get_stylesheet_directory_URI() . '/dist/css/style.css', array(), '1.0.0');
	if (is_singular('design-examples')) {
		wp_enqueue_style('single', get_stylesheet_directory_URI() . '/dist/css/single-design-examples.css', array(), '1.0.0');
	}
}
add_action('wp_enqueue_scripts', 'enqueue_global_css');

/*
==============================
ADD GLOBAL JS TO PAGE
==============================
*/
function enqueue_global_js() {
	if (is_singular('design-examples')) {
		wp_enqueue_script('prism', get_stylesheet_directory_URI() . '/src/js/_prism.js', array(), '1.0.0', true);
	}
	wp_enqueue_script('app', get_stylesheet_directory_URI() . '/dist/js/app.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_global_js');

/*
==========================================
HIDE ADMIN BAR
==========================================
*/
add_filter('show_admin_bar', '__return_false');

/*
==========================================
REMOVE WP EMOJICONS
==========================================
*/
function disable_wp_emojicons() {
  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

/*
==========================================
CREATING ADMIN NAV MENUS
==========================================
*/
register_nav_menus( array(
		'header' => __( 'Header' )
) );

/*
==============================
BREADCRUMB OVERRIDES
==============================
*/
// add_filter( 'wpseo_breadcrumb_links', 'yoast_breadcrumb_overrides' );
//
// function yoast_breadcrumb_overrides( $links ) {
//     global $post;
//     if ( is_singular( array('design-examples') ) ) {
// 				$array = wp_get_post_terms($post->ID, 'design_examples_type');
// 				print_r($array);
// 				$breadcrumb[] = array(
// 						'url' => '/' . $post->post_type,
// 						'text' => $post->post_title,
// 				);
// 				array_splice( $links, 2, 0, $breadcrumb );
//     }
//     return $links;
// }
