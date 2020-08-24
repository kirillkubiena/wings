<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="author" content="Kirill Kubiena">
  <meta name="copyright" content="Wings 2020">
  <meta name="description" content="Jsem krásná moderní kavárna s vynikajícími dýmkami, s příjemným prostředím a originalitou, s vyjímečnou chutí kávy, čajů a pochutin">
  <meta name="keywords" content="Wings, wingskarvina.cz, wingkarvina, shisha, wings karvina, čajovna wings karvina, wings cajovna, cajovna, čajovna karvina, hookah bar karvina, kávarna, kavarna wings karvina, karvina, hookah," />
  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/images/icon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/images/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/images/icon/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('template_url') ?>/images/icon/site.webmanifest">
  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/lightbox/css/lightbox.css" type="text/css" media="screen">
  <script src="<?php bloginfo('template_url') ?>/lightbox/js/lightbox-plus-jquery.min.js"></script>
  <title><?php
        wp_title('|', true, 'right'); bloginfo('name');
        if ( is_front_page() ) echo ' | ' . get_bloginfo('description');
    ?></title>
    <?php wp_head(); ?>
</head>
<body>
  <header class="<?php if(is_page('hlavni-stranka')) echo('home-page-bg'); else if(is_page('menu')) echo('menu-page-bg'); else if(is_page('galerie')) echo('gallery-page-bg'); else if(is_page('novinky')) echo('news-page-bg'); else if(is_page('kontakt')) echo('contact-page-bg'); else if(is_single()) echo('news-single-bg'); else echo('page-not-found'); ?>">
    <div class="nav container">
      <div class="logo">
        <a href="<?php echo get_home_url(); ?>">
          <img src="<?php bloginfo('template_url') ?>/images/wings-logo.svg" alt="logo" />
        </a>
      </div>
      <div class="myMenu" id="menu">
        <a  class="icon" onclick="myMenuShow()"></a>
        <nav class="navigation">
          <div class="navigation-wrapper">
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
            </ul>
            <?php wp_nav_menu( array(
              'theme_location' => 'primary'
            )); ?>
          </div>
        </nav>
      </div>
    </div>