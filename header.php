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
  <div class="align-content-center">
      <div id="site-logo">
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

       <div>
        <a href="<?php echo home_url('/'); ?>"><div class="header-text">
            <p class="head-text"><?php bloginfo('description'); ?></p>
          </div></a>
        </div>
      </div>

      <!--<div class="col-md-7" id="site-nav">-->
        <!--Navigation-->
      <!--  <?php wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'container-class' => 'menu-header'
          ));
        ?>
      </div>
    </div>
  </div>-->
<div id="navbar" class="main-nav">
  <ul class="menu">
<li title="home"><a href="https://pwd.aa.ufl.edu/cdprs/#home" class="home">home</a></li>
<li title="posters"><a href="https://pwd.aa.ufl.edu/cdprs/#posters" class="posters">posters</a></li>
<li title="about"><a href="https://pwd.aa.ufl.edu/cdprs/#about" class="active about">about</a></li>
<li title="agenda"><a href="https://pwd.aa.ufl.edu/cdprs/#agenda" class="agenda">agenda</a></li>
<li title="speakers"><a href="https://pwd.aa.ufl.edu/cdprs/#speakers" class="speakers">speakers</a></li>
<li title="submit"><a href="https://pwd.aa.ufl.edu/cdprs/#submit" class="submit">submit</a></li>
</ul>
</div>

</header>
