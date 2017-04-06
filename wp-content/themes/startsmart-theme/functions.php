<?php

if ( ! function_exists( 'start_smart_setup' ) ) :

function start_smart_setup() {
	load_theme_textdomain( 'start-smart', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'start-smart' ),
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'custom-background', apply_filters( 'start_smart_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'start_smart_setup' );
function start_smart_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'start_smart_content_width', 640 );
}
add_action( 'after_setup_theme', 'start_smart_content_width', 0 );
function start_smart_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'start-smart' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'start-smart' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'start_smart_widgets_init' );

function start_smart_scripts() {
	wp_enqueue_style( 'start-smart-style', get_stylesheet_uri() );
    wp_enqueue_style( 'start-smart-bootstrap-css', get_template_directory_uri() . '/vendors/node_modules/bootstrap/dist/css/bootstrap.css');
    wp_enqueue_style( 'start-smart-theme-style', get_template_directory_uri() . '/vendors/css/theme-style.css');
	wp_enqueue_script( 'start-smart-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'start-smart-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script( 'start-smart-jquery', get_template_directory_uri() . '/vendors/node_modules/jquery/dist/jquery.min.js', array(), '20151215', true );
    wp_enqueue_script( 'start-smart-tether', get_template_directory_uri() . '/vendors/node_modules/tether/dist/js/tether.min.js', array(), '20151215', true );
    wp_enqueue_script( 'start-smart-bootstrap-js', get_template_directory_uri() . '/vendors/node_modules/bootstrap/dist/js/bootstrap.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'start_smart_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';
