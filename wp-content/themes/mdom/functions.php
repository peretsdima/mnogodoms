<?php
function mdom_setup() {
		
	load_theme_textdomain( 'mdom' );
	add_editor_style( array( 'css/editor-style.css', 'css/vendor.css') );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );
	register_nav_menu( 'primary', __( 'Navigation Menu', 'mdom' ) );
	register_nav_menu( 'primary2', __( 'Footer Menu 1', 'mdom' ) );
	register_nav_menu( 'primary3', __( 'Footer Menu 2', 'mdom' ) );
	add_theme_support( 'post-thumbnails' );
	add_filter( 'use_default_gallery_style', '__return_false' );
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'mdom_setup' );
function mdom_scripts_styles() {
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', 'jquery', false);
	wp_enqueue_style( 'mdom-style', get_stylesheet_uri(), array(), time() );
}
add_action( 'wp_enqueue_scripts', 'mdom_scripts_styles' );
function mdom_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() )
		return $title;
	$title .= get_bloginfo( 'name', 'display' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'mdom' ), max( $paged, $page ) );
	return $title;
}
add_filter( 'wp_title', 'mdom_wp_title', 10, 2 );
function mdom_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Сайдбар', 'mdom' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar', 'mdom' ),
		'before_widget' => '<div class="aside-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="aside-title">',
		'after_title'   => '</span>',
	) );
}
add_action( 'widgets_init', 'mdom_widgets_init' );
function mdom_body_class( $classes ) {
	if ( ! is_multi_author() )
		$classes[] = 'single-author';
	if ( is_active_sidebar( 'sidebar-2' ) && ! is_attachment() && ! is_404() )
		$classes[] = 'sidebar';
	if ( ! get_option( 'show_avatars' ) )
		$classes[] = 'no-avatars';
	return $classes;
}
add_filter( 'body_class', 'mdom_body_class' );
function mdom_customize_preview_js() {
	wp_enqueue_script( 'mdom-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20141120', true );
}
add_action( 'customize_preview_init', 'mdom_customize_preview_js' );
if( function_exists('acf_add_options_page') ) { acf_add_options_page(); }
function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);
function pp_override_mce_options($initArray) {
	$opts = '*[*]';
	$initArray['valid_elements'] = $opts;
	$initArray['extended_valid_elements'] = $opts;
	return $initArray;
}
add_filter('tiny_mce_before_init', 'pp_override_mce_options');
function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');
add_filter('excerpt_more', function($more) {
	return '';
});