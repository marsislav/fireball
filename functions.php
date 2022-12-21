<?php

//Setup

//Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));
include(get_theme_file_path('/includes/widgets.php'));
include(get_theme_file_path('/includes/comment-callback.php'));
//Hooks
add_action('wp_enqueue_scripts', 'fireball_enqueue');
add_action('after_setup_theme', 'fireball_setup_theme');
add_action('widgets_init', 'fireball_widgets');
//Shortcodes