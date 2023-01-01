<?php
function fireball_enqueue () {

    wp_register_style( 'fireball_bootstrap', get_template_directory_uri().'/assets/css/bootstrap-grid.min.css'); 
    wp_enqueue_style( 'fireball_bootstrap' );

    wp_register_style( 'fireball_main', get_template_directory_uri().'/assets/css/main.css'); 
    wp_enqueue_style( 'fireball_main' );

    wp_register_style( 'fireball_fa', get_template_directory_uri().'/assets/css/all.min.css'); 
    wp_enqueue_style( 'fireball_fa' );


    /*Custom Main color */
    $main_color                =   get_theme_mod( 'fireball_main_color' );
    wp_add_inline_style(
        'fireball_main',
        'a, a.read-more{ color: ' . $main_color . '; border-color: '. $main_color. '; }'
    );
   
    wp_add_inline_style(
        'fireball_main',
        '.title-wrap, .post-labels span,  .post-tag, .header-menu, .sb-icon-search, .sb-search-input, .sb-search.sb-search-open .sb-icon-search, .no-js .sb-search .sb-icon-search{ background-color: ' . $main_color . '; }'
    );
    /*End custom main color */

    wp_register_script( 'fireball_modernizr',get_template_directory_uri().'/assets/js/modernizr.custom.js', array(), false, true );
    wp_register_script( 'fireball_classie',get_template_directory_uri().'/assets/js/classie.js', array(), false, true );
    wp_register_script( 'fireball_uisearch',get_template_directory_uri().'/assets/js/uisearch.js', array(), false, false );
    wp_register_script( 'fireball_main',get_template_directory_uri().'/assets/js/main.js', array(), false, true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'fireball_modernizr');
    wp_enqueue_script( 'fireball_classie');
    wp_enqueue_script( 'fireball_uisearch');
    wp_enqueue_script( 'fireball_main' );

}