<?php 
function fireball_setup_theme() {
    add_theme_support( 'post-thumbnails' ); 
    add_theme_support( 'title-tag' ); 
    add_theme_support( 'custom-logo' ); 
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array (
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption'
    ) );


    function hs21_register_menus(){
        register_nav_menus(array (
            'top'=>esc_html__('Top menu', 'fireball'),
            'main'=>esc_html__('Main menu', 'fireball'),
        ));
    }
    
    add_action ('init', 'hs21_register_menus');
   

}