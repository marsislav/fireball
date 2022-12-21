<?php
function fireball_enqueue () {

    wp_register_style( 'fireball_main', get_template_directory_uri().'/assets/css/main.css'); 
    wp_enqueue_style( 'fireball_main' );

    wp_register_script( 'fireball_main',get_template_directory_uri().'/assets/js/main.js', array(), false, true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'fireball_main' );

}