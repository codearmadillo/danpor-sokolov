<?php

  // remove header links
  add_action('init', 'tjnz_head_cleanup');
  function tjnz_head_cleanup() {
      remove_action( 'wp_head', 'feed_links_extra', 3 );                      // Category Feeds
      remove_action( 'wp_head', 'feed_links', 2 );                            // Post and Comment Feeds
      remove_action( 'wp_head', 'rsd_link' );                                 // EditURI link
      remove_action( 'wp_head', 'wlwmanifest_link' );                         // Windows Live Writer
      remove_action( 'wp_head', 'index_rel_link' );                           // index link
      remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );              // previous link
      remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );               // start link
      remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );   // Links for Adjacent Posts
      remove_action( 'wp_head', 'wp_generator' );                             // WP version
      if (!is_admin()) {
          wp_deregister_script('jquery');                                     // De-Register jQuery
          wp_register_script('jquery', '', '', '', true);                     // Register as 'empty', because we manually insert our script in header.php
      }
  }

  // remove WP version from RSS
  add_filter('the_generator', 'tjnz_rss_version');
  function tjnz_rss_version() { return ''; }

    /*
    Register navigation menus
    */
    register_nav_menus(array(
        'main_menu' => 'Main website menu',
        'footer_menu' => 'Footer menu',
        'footer_additional' => 'Additional footer menu containing privacy policy'
    ));

    /*
    Allow thumbnails
    */
    if(function_exists('add_theme_support')){ 
        add_theme_support( 'post-thumbnails');
    }

    /*
    Delete header gap
    */
    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    add_action('get_header', 'remove_admin_login_header');

    /*
    Custom functions
    */
    function hasChildren($id){
        return count(get_children($id));
    }
?>