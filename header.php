<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <!--Classica Web Font-->
  <link rel="stylesheet" href="https://use.typekit.net/roz5znz.css">
  <!--font awesome-->
  <script src="https://kit.fontawesome.com/45fdff44f1.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class();?>>

<header>
  <div class="align-content-center">
    <div class="row main-nav">
      <div class="col-md-5" id="site-logo">
          <div>
          <!--If/else for Logo and Site Title-->
          <?php if(get_header_image() == '') { ?>
            <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php
          }else{?>
            <a href="<?php echo home_url('/'); ?>"><img class="align-middle uf-logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo" /></a>
            <?php
          }
          ?>
        </div>

      <!--  <div>
        <!--><!--Navigation-->
          <!--<a href="<?php echo home_url('/'); ?>"><div class="header-text">
            <p class="head-text"><?php bloginfo('description'); ?></p>
          </div></a>
        </div>-->
      </div>

      <div class="col-md-7" id="site-nav">
        <!--Navigation-->
        <?php wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'container-class' => 'menu-header'
          ));
        ?>
      </div>
    </div>
  </div>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://pwd.aa.ufl.edu/treeo/wp-content/uploads/sites/20/2021/03/treeo-white.png" alt="..." height="36">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php wp_nav_menu(array(
        'menu' => 'top-menu',
        'menu_class' => 'navbar-nav font-weight-extra-bold ml-auto',
        'container' => '',
        'li_class' => 'nav-link',
        'active_class' => 'active'
      ));?>
    </div>
  </div>
</nav>
</header>
