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
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="https://pwd.aa.ufl.edu/treeo/wp-content/uploads/sites/20/2021/03/treeo-white.png" alt="..." height="36">
        </a>
          <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fa fa-bars"></i>
          </button>
          <?php
          wp_nav_menu([
              'menu'            => 'primary',
              'theme_location'  => 'menu-1',
              'container'       => 'div',
              'container_id'    => 'navbarResponsive',
              'container_class' => 'collapse navbar-collapse',
              'menu_id'         => false,
              'menu_class'      => 'navbar-nav ml-auto',
              'depth'           => 0,
              'fallback_cb'     => 'bs4navwalker::fallback',
              'walker'          => new bs4navwalker()
          ]);
          ?>
      </div>
  </nav>
<!--<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-white" id="navbar-below">
  <div class="container">
    <a class="navbar-brand font-weight-bold" href="#">
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
        'li_class' => 'nav-item',
        'a_class' => 'nav-link',
        'active_class' => 'active'
      ));?>
    </div>
  </div>
</nav>
</header>-->
