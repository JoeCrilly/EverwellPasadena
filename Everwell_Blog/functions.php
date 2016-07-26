<?php

function Eblog_script_enqueue() {
	wp_enqueue_style('mystyleblog', get_template_directory_uri().'/style/mystyle.css', array(), '1.0.0', 'all' );
	wp_enqueue_script('myscriptblog', get_template_directory_uri().'/js/everwell.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'Eblog_script_enqueue');
function Eblog_setup() {
	add_theme_support('menus');
	add_theme_support( 'post-thumbnails' );
}
add_action('init', 'Eblog_setup');
/* Change Excerpt length */
function wpdocs_custom_excerpt_length( $length ) {
	return 95;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
function my_theme_add_editor_styles() {
	add_editor_style( get_template_directory_uri().'style.css');
}
add_action( 'init', 'my_theme_add_editor_styles' );
?>