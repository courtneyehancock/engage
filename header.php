<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <!--Classica Web Font-->
  <link rel="stylesheet" href="https://use.typekit.net/roz5znz.css">
  <!--font awesome-->
  <script src="https://use.fontawesome.com/8a29ee712e.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class();?>>

<header>
  <!--<div class="align-content-center">
    <div class="row main-nav">
      <div class="col-md-5" id="site-logo">
          <div>-->
          <!--If/else for Logo and Site Title-->
          <!--<?php if(get_header_image() == '') { ?>
            <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php
          }else{?>
            <a href="<?php echo home_url('/'); ?>"><img class="align-middle uf-logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Logo" /></a>
            <?php
          }
          ?>
        </div>

        <div>-->
          <!--Navigation-->
        <!--  <a href="<?php echo home_url('/'); ?>"><div class="header-text">
            <p class="head-text"><?php bloginfo('description'); ?></p>
          </div></a>
        </div>
      </div>

      <div class="col-md-7" id="site-nav">-->
        <!--Navigation-->
      <!--  <?php wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'container-class' => 'menu-header'
          ));
        ?>
      </div>
    </div>
  </div>-->
<div class="main-nav">
  <ul class="menu">
<li title="home"><a href="#" class="home">home</a></li>
<li title="search"><a href="#" class="search">about</a></li>
<li title="pencil"><a href="#" class="pencil">agenda</a></li>
<li title="about"><a href="#" class="about">speakers</a></li>
<li title="archive"><a href="#" class="archive">posters</a></li>
<li title="contact"><a href="#" class="contact">submit</a></li>
</ul>
</div>

</header>
