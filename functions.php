<?php
//Adds featured imgs to posts
  add_theme_support('post-thumbnails');


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

  API Functions

  -----------------------------------------*/

  add_action('init', 'register_member_cpt');
  function register_member_cpt() {
      register_post_type('members', [
        'label' => 'Members',
        'public' => true,
        'capability_type' => 'post'
      ]);
  }

  add_action('wp_ajax_nopriv_get_member_from_api', 'get_members_from_api');
  add_action('wp_ajax_get_member_from_api', 'get_members_from_api');

  function get_members_from_api(){
    $current_page = ( ! empty($_POST['current_page']) ) ? $_POST['current_page'] : 1;
    $members = [];

    $results = wp_remote_retrieve_body( wp_remote_get('http://api.qa.flwatertracker.com/api/Outgoings/FACILITIES_FOR_FLAWARN?api-version=1.0' . $current_page. '&per_page=50'));

    $results = json_decode($results);

    if( ! is_array( $results ) || empty( $results ) ){
      return false;
    }

    $members[] = $results;

    foreach( $members[0] as $member){

      $member_slug = sanitize_title($member->facility_name . '-' . $member->facility_id);

      $inserted_member = wp_insert_post ([
        'post-name' => $member_slug,
        'post-title' => $member_slug,
        'post-type' => 'member',
        'post-status' => 'publish'
      ]);

      if( is_wp_error( $inserted_member) ) {
        continue;
      }

      $fillable = [
        'field_60b7a2f83cbd1' => 'facility_id'
        'field_60b7a3293cbd2' => 'facility_name'
        'field_60b7a32f3cbd3' => 'county'
        'field_60b7a34a3cbd4' => 'mutual_aid_agreement'
        'field_60b7a3553cbd5' => 'flawarn_member'
      ];

      foreach( $fillable as $key => $facility_name ) {
        update_field( $key, $member->$facility_name, $inserted_member);
      }

    }

    $curent_page = $current_page + 1;
    wp_remote_post( admin_url('admin-ajax.php?action=get_members_from_api'), [
      'blocking' => false,
      'sslverify' => false,
      'body' => [
        'current_page' => $current_page
      ]
    ]);
  }

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

  //Logo in the header
  add_theme_support( 'custom-header', array(
    'flex-width'      => true,
    'width'           => 260,
    'flex-height'     => true,
    'height'          => 100,
    'header-selector' => '.site-title a',
    'header-text'     => false
  ) );

  //Adds featured imgs to posts
    add_theme_support('post-thumbnails');


  ?>
