<?php

// Theme Support
add_theme_support( 'menus' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );


// Menu
register_nav_menus( array(
    'primary' => 'Primary Menu'
));


// ACF Option Pages
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
	));	
}

// Remove admin bar
show_admin_bar(false);

// Outputs Breadcrumb
function get_breadcrumb() { ?>
  <div class="breadcrumb">
    <a href="<?php echo home_url(); ?>">Hlavní stránka</a>
    <span class="breadcrumb-arrow">»</span>
    <?php if (is_single()) { ?>
      <a href="<?php echo get_permalink('19'); ?>">Novinky</a>
      <span class="breadcrumb-arrow">»</span>
        <?php if (is_single()) { ?>
            <span><?php the_title(); ?></span>
        <?php  }} ?>
  </div>
<?php }