<?php
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