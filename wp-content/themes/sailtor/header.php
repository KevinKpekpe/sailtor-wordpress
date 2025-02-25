<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> - <?php wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <!-- Favicons -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename"><?php bloginfo('name'); ?></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <nav id="navmenu" class="navmenu">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'header', 
            'menu_id'        => 'primary-menu', 
            'menu_class'     => 'nav-menu',   
            'container'      => false,        
            'depth'          => 2,              
            'walker'         => new Bootstrap_Walker_Nav_Menu() 
          ));
          ?>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="about.html">Get Started</a>

    </div>
  </header>