<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/images/icon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/images/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/images/icon/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('template_url') ?>/images/icon/site.webmanifest">
  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/lightbox/css/lightbox.css" type="text/css" media="screen">
  <script src="<?php bloginfo('template_url') ?>/lightbox/js/lightbox-plus-jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <title><?php
        wp_title('|', true, 'right'); bloginfo('name');
        if ( is_front_page() ) echo ' | ' . get_bloginfo('description');
    ?></title>
    <?php wp_head(); ?>
</head>
<body>
  <header class="<?php if(is_page('hlavni-stranka')) echo('home-page-bg');  else if(is_page('menu')) echo('menu-page-bg'); else if(is_page('galerie')) echo('gallery-page-bg'); else if(is_page('novinky')) echo('news-page-bg'); else if(is_page('kontakt')) echo('contact-page-bg'); else echo('page-not-found'); ?>">
    <div class="nav container">
      <div class="logo">
        <a href="<?php echo get_home_url(); ?>">
          <img src="<?php bloginfo('template_url') ?>/images/wings-logo.svg" alt="logo" />
        </a>
      </div>
      <div class="myMenu" id="menu">
        <a  class="icon" onclick="myMenuShow()"></a>
        <nav class="navigation">
          <ul class="container">
            <li>
              <div class="responsive-logo">
                <a href="<?php echo get_home_url(); ?>">
                  <img src="<?php bloginfo('template_url') ?>/images/wings-logo.svg" alt="wings logo" />
                </a>
              </div>
            </li>
            <li>
              <a class="responsive-icon" onclick="myMenu()"></a>
            </li>
            <li><a href="<?php echo get_home_url(); ?>" class="<?php if(is_page('hlavni-stranka')) echo('active'); ?>">Hlavní stránka</a></li>
            <li><a href="<?php echo get_page_link( get_page_by_title('menu')); ?>" class="<?php if(is_page('menu')) echo('active'); ?>">Menu</a></li>
            <li><a href="<?php echo get_page_link( get_page_by_title('galerie')); ?>" class="<?php if(is_page('galerie')) echo('active'); ?>">Galerie</a></li>
            <li><a href="<?php echo get_page_link( get_page_by_title('novinky')); ?>" class="<?php if(is_page('novinky')) echo('active'); ?>">Novinky</a></li>
            <li><a href="<?php echo get_page_link( get_page_by_title('kontakt')); ?>" class="<?php if(is_page('kontakt')) echo('active'); ?>">Kontakt</a></li>
          </ul>
        </nav>
      </div>
    </div>