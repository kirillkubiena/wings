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
  <!-- Vložení bloku div s třídou breadcrumb -->
  <div class="breadcrumb">
    <!-- Vložení odkazu na hlavní stránku -->
    <a href="<?php echo home_url(); ?>">Hlavní stránka</a>
    <!-- Vložení směru navigace -->
    <span class="breadcrumb-arrow">»</span>
    <!-- Podmínka v PHP -->
    <?php if (is_single()) { ?>
      <!-- Vložení odkazu na stránku se všemi příspěvky -->
      <a href="<?php echo get_permalink('19'); ?>">Novinky</a>
      <!-- Vložení směru navigace -->
      <span class="breadcrumb-arrow">»</span>
        <!-- Podmínka v PHP -->
        <?php if (is_single()) { ?>
            <!-- Vložení titulku příspěvku -->
            <span><?php the_title(); ?></span>
        <?php  }} ?>
  </div>
<?php }