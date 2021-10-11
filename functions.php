<?php
//Adds featured imgs to posts
  add_theme_support('post-thumbnails');


  /*-------------------------------------

  Add MENUS

  -----------------------------------------*/
  add_theme_support('menus');

  register_nav_menus(array(
    'top-menus' => ('Top Menu', 'theme')
  ));

  function add_class_li($classes,$item,$args){
    if(isset($args->li_class)) {
      $classes[] = $args->li_class;
    }
    if(isset($args->active_class) && in_array('current-menu-items',$classes)){
      $classes[] = $args->active_class;
    }
    return $classes;
  }

  add_filter( 'nav_menu_css_class', 'add_class_li', 10, 3);

  function add_anchor_class($attr,$item,$args){
    if(isset($args->a_class)){
      $attr['class'] = $args->a_class;
    }
    return $attr;
  }

  add_filter( 'nav_menu_link_attributes', 'add_anchor_class' 10, 3 );
  /*-------------------------------------

  Adds style sheet and JavaScript files

  -----------------------------------------*/

  function custom_theme_scripts() {
  //Bootstrap integration
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

  //main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

  //Javascript files
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
  }

  add_action('wp_enqueue_scripts', 'custom_theme_scripts');


  /*-------------------------------------

  CUSTOM POST TYPES

  -----------------------------------------*/
    // REGISTER CUSTOM POST TYPES
  // You can register more, just duplicate the register_post_type code inside of the function and change the values. You are set!
  if ( ! function_exists( 'create_post_type' ) ) :

  function create_post_type() {

  	// You'll want to replace the values below with your own.
  	register_post_type( 'members', // change the name
  		array(
  			'labels' => array(
  				'name' => __( 'Members' ), // change the name
  				'singular_name' => __( 'members' ), // change the name
  			),
  			'public' => true,
  			'supports' => array ( 'title', 'custom-fields' ), // do you need all of these options?
  			'taxonomies' => array( 'category', 'post_tag' ), // do you need categories and tags?
  			'hierarchical' => true,
  			'menu_icon' => get_bloginfo( 'template_directory' ) . "/images/icon.png",
  			'rewrite' => array ( 'slug' => __( 'members' ) ) // change the name
  		)
  	);

  }
  add_action( 'init', 'create_post_type' );

  endif;

  /*-------------------------------------

  WIDGET AREAS

  -----------------------------------------*/
  function blank_widgets_init() {

    //Home: Banner Widget
    register_sidebar(array(
      'name'          => ('Banner Home'),
      'id'            => 'banner-home',
      'description'   => 'Top banner widget area in home page',
      'before_widget' => '<div class="widget-home widget-top">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Footer: Left Widget
    register_sidebar(array(
      'name'          => ('Left Footer'),
      'id'            => 'left-footer',
      'description'   => 'Left widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-left">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Footer: Middle Widget
    register_sidebar(array(
      'name'          => ('Middle Footer'),
      'id'            => 'middle-footer',
      'description'   => 'Middle widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-menu-title">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Footer: Middle Right Widget
    register_sidebar(array(
      'name'          => ('Middle Right Footer'),
      'id'            => 'middle-right-footer',
      'description'   => 'Middle right widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));

    //Footer: Right Widget
    register_sidebar(array(
      'name'          => ('Right Footer'),
      'id'            => 'right-footer',
      'description'   => 'Right widget area in the footer',
      'before_widget' => '<div class="widget-footer widget-right">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  }

  add_action('widgets_init', 'blank_widgets_init');

  //Custom Menus
  function custom_menus(){
    register_nav_menus(array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer Menu'),
    ));
  }
  add_action('init', 'custom_menus');
/*
  //Logo in the header
  add_theme_support( 'custom-header', array(
    'flex-width'      => true,
    'width'           => 260,
    'flex-height'     => true,
    'height'          => 100,
    'header-selector' => '.site-title a',
    'header-text'     => false
  ) );
*/
  //Adds featured imgs to posts
    add_theme_support('post-thumbnails');


  ?>
