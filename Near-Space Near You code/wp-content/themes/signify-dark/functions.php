<?php
/*
 * This is the child theme for Signify theme.
 */

/**
 * Enqueue default CSS styles
 */
function signify_dark_enqueue_styles() {
	// Include parent theme CSS.
    wp_enqueue_style( 'signify-style', get_template_directory_uri() . '/style.css', null, date( 'Ymd-Gis', filemtime( get_template_directory() . '/style.css' ) ) );
   
    // Include child theme CSS.
    wp_enqueue_style( 'signify-dark-style', get_stylesheet_directory_uri() . '/style.css', array( 'signify-style' ), date( 'Ymd-Gis', filemtime( get_stylesheet_directory() . '/style.css' ) ) );
	
	// Load rtl css.
	if ( is_rtl() ) {
		wp_enqueue_style( 'signify-rtl', get_template_directory_uri() . '/rtl.css', array( 'signify-style' ), filemtime( get_stylesheet_directory() . '/rtl.css' ) );
	}

	// Enqueue child block styles after parent block style.
	wp_enqueue_style( 'signify-dark-block-style', get_stylesheet_directory_uri() . '/assets/css/child-blocks.css', array( 'signify-block-style' ), date( 'Ymd-Gis', filemtime( get_stylesheet_directory() . '/assets/css/child-blocks.css' ) ) );
}
add_action( 'wp_enqueue_scripts', 'signify_dark_enqueue_styles' );

/**
 * Add child theme editor styles
 */
function signify_dark_editor_style() {
	add_editor_style( array(
			'assets/css/child-editor-style.css',
			signify_fonts_url(),
			get_theme_file_uri( 'assets/css/font-awesome/css/font-awesome.css' ),
		)
	);
}
add_action( 'after_setup_theme', 'signify_dark_editor_style', 11 );

/**
 * Enqueue editor styles for Gutenberg
 */
function signify_dark_block_editor_styles() {
	// Enqueue child block editor style after parent editor block css.
	wp_enqueue_style( 'signify-dark-block-editor-style', get_stylesheet_directory_uri() . '/assets/css/child-editor-blocks.css', array( 'signify-block-editor-style' ), date( 'Ymd-Gis', filemtime( get_stylesheet_directory() . '/assets/css/child-editor-blocks.css' ) ) );
}
add_action( 'enqueue_block_editor_assets', 'signify_dark_block_editor_styles', 11 );

/**
 * Loads the child theme textdomain and update notifier.
 */
function signify_dark_setup() {
    load_child_theme_textdomain( 'signify-dark', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'signify_dark_setup', 11 );

/**
 * Change default background color
 */
function signify_dark_background_default_color( $args ) {
    $args['default-color'] = '#111111';

    return $args;
}
add_filter( 'signify_custom_background_args', 'signify_dark_background_default_color' );

/**
 * Change default header text color
 */
function signify_dark_header_default_color( $args ) {
	$args['default-text-color'] = '#b7b7b7';
	$args['default-image']      =  get_theme_file_uri( 'assets/images/header-image-dark.jpg' );

	return $args;
}
add_filter( 'signify_custom_header_args', 'signify_dark_header_default_color' );

/**
 * Remove color-scheme-default and add color-scheme-dark to body class
 *
 * @since 1.0.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function signify_dark_body_classes( $classes ) {
	// Added color scheme to body class.
	$classes['color-scheme'] = 'color-scheme-dark';

	return $classes;
}
add_filter( 'body_class', 'signify_dark_body_classes', 100 );

/**
 * Add layout option to featured content
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function signify_dark_featured_content_layout( $wp_customize ) {
	signify_register_option( $wp_customize, array(
			'name'              => 'signify_featured_content_layout',
			'default'           => 'layout-three',
			'sanitize_callback' => 'signify_sanitize_select',
			'active_callback'   => 'signify_is_featured_content_active',
			'choices'           => array(
				'layout-one'   => esc_html__( '1 column', 'signify-dark' ),
				'layout-two'   => esc_html__( '2 columns', 'signify-dark' ),
				'layout-three' => esc_html__( '3 columns', 'signify-dark' ),
				'layout-four'  => esc_html__( '4 columns', 'signify-dark' ),
			),
			'label'             => esc_html__( 'Select Layout', 'signify-dark' ),
			'section'           => 'signify_featured_content',
			'type'              => 'select',
		)
	);
}
add_action( 'customize_register', 'signify_dark_featured_content_layout', 11 );
