<?php
/*
==============================
ADD GLOBAL CSS TO PAGE
==============================
*/
function enqueue_global_css() {
	wp_enqueue_style('style', get_stylesheet_directory_URI() . '/dist/style.css', array(), '2.0.1');
}
add_action('wp_enqueue_scripts', 'enqueue_global_css');
