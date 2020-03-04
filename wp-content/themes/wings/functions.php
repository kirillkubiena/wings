<?php

/**
 * Theme Support
 */
add_theme_support( 'menus' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

/**
 * Menus
 */
register_nav_menus( array(
    'primary' => 'Primary Menu'
));

/**
 * ACF Option Pages
 */
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
	));	
}