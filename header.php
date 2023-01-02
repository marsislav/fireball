<!DOCTYPE html>
<html class="ltr" dir="ltr" <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset');?>">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
    <?php wp_head();?>
</head>

<body <?php body_class('index home')?>>
    <?php wp_body_open(); ?>
    <!-- Outer Wrapper -->

    <!-- Main Top Bar -->
    <div id="top-bar">
        <div class="container row">
            <div class="top-bar-nav section" id="top-bar-nav">
                <div class="widget LinkList">
                    <div class="widget-content">
                        <ul>
                            <?php 
                            if(has_nav_menu('top')){
                                wp_nav_menu(array (
                                'theme_location'=>'top'
                                ));
                            }?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Top Social -->
            <div class="top-bar-social social section" id="top-bar-social">
                <div class="widget">
                    <div class="widget-content social">
                        <ul><?php if(get_theme_mod('fireball_facebook_handle')){?>
                            <li class="facebook"><a
                                    href="<?php echo esc_url(get_theme_mod('fireball_facebook_handle'))?>"
                                    target="_blank" title="Facebook"></a></li>
                            <?php }?>
                            <?php if(get_theme_mod('fireball_instagram_handle')){?>
                            <li class="instagram"><a
                                    href="<?php echo esc_url(get_theme_mod('fireball_instagram_handle'))?>"
                                    target="_blank" title="Instagram"></a></li>
                            <?php }?>
                            <?php if(get_theme_mod('fireball_twitter_handle')){?>
                            <li class="twitter"><a
                                    href="<?php echo esc_url(get_theme_mod('fireball_twitter_handle'));?>"
                                    target="_blank" title="Twitter"></a></li>
                            <?php } ?>
                            <?php if(get_theme_mod('fireball_pinterest_handle')){?>
                            <li class="pinterest"><a
                                    href="<?php echo esc_url(get_theme_mod('fireball_pinterest_handle'));?>"
                                    target="_blank" title="Pinterest"></a></li>
                            <?php } ?>
                            <?php if(get_theme_mod('fireball_youtube_handle')){?>
                            <li class="youtube"><a
                                    href="<?php echo esc_url(get_theme_mod('fireball_youtube_handle'));?>"
                                    target="_blank" title="Youtube"></a></li>
                            <?php }?>
                            <?php if(get_theme_mod('fireball_viber_handle')){?>
                            <li class="viber"><a
                                    href="viber://chat?number=<?php echo esc_url(get_theme_mod('hs21_viber_handle'))?>"
                                    title="Viber"></a></li>
                            <?php }?>
                            <?php if(get_theme_mod('fireball_whatsapp_handle')){?>
                            <li class="whatsapp"><a
                                    href="https://api.whatsapp.com/send?phone=<?php echo esc_url(get_theme_mod('hs21_whatsapp_handle'));?>"
                                    title="Whatsapp"></a></li>
                            <?php }?>
                            <?php if(get_theme_mod('fireball_github_handle')){?>
                            <li class="github"><a href="<?php echo esc_url(get_theme_mod('fireball_github_handle'));?>"
                                    target="_blank" title="Github"></a></li>
                            <?php }?>
                            <?php if(get_theme_mod('fireball_skype_handle')){?>
                            <li class="skype"><a
                                    href="skype:<?php echo esc_url(get_theme_mod('hs21_skype_handle'));?>?chat"
                                    title="Skype"></a></li>
                            <?php }?>
                            <?php if(get_theme_mod('fireball_email_handle')){?>
                            <li class="email"><a
                                    href="mailto:<?php echo esc_url(get_theme_mod('hs21_email_handle'));?>?chat"
                                    title="Email"></a></li>
                            <?php }?>
                            <?php if(get_theme_mod('fireball_phone_handle')){?>
                            <li class="phone"><a href="tel:<?php echo esc_url(get_theme_mod('hs21_phone_handle'));?>"
                                    title="Phone"></a></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Wrapper -->
    <div id="header-wrap">
        <header class="header-header" style="background-image:url(<?php header_image();?> )">
            <div class="container row">
                <div class="header-logo section" id="header-logo>
                                <div class=" widget Header" data-version="2" id="Header1">
                    <div class="header-widget">
                        <div class="header-image-wrapper">
                            <?php if (has_custom_logo()) {
                        the_custom_logo();
                    } else {    
                        esc_html(bloginfo('name'));
                    }
                    ?>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    </header>

    <div class="mobile-bar">
        <div class="container">
            <div class="row">
                <div class="main">
                    <button class="mobile-menu"><i class="fa-solid fa-bars"></i></button>

                </div>

            </div>

        </div>

    </div>


    <div class="modal">
        <div class="content">
            <a href="#"
                class="times"><?php _e('<h3> <i class="fa fa-times"></i> Hide the navigation </h3>', 'fireball');?></a>
            <?php 
                if(has_nav_menu('top')){
            _e('<h3>Top bar menu</h3>', 'fireball');
        
                    wp_nav_menu(array (
                    'theme_location'=>'top'
                    ));
                }?>

            <?php 
                if(has_nav_menu('main')){
                _e('<h3>Main menu</h3>', 'fireball');
        
                    wp_nav_menu(array (
                    'theme_location'=>'main'
                    ));
                }?>

        </div>


    </div>
    <div class="header-menu">
        <div class="container row">
            <span class="slide-menu-toggle"><i class="fa-solid fa-bars"></i></span>
            <div class="main-menu section" id="main-menu" name="Main Menu">
                <div class="widget LinkList show-menu">
                    <ul id="main-menu-nav" role="menubar">
                        <?php 
                                        if(has_nav_menu('main')){
                                            wp_nav_menu([
                                                'theme_location'=>'main',
                                                'container'=>'li',
                                                'fallback_cb'=>__('Main menu', 'fireball'),
                                                'depth'=>1
                                            ]);
                                        }?>
                    </ul>

                </div>

            </div>




        </div>

    </div>
    <div class="container">
        <div id="nav-search">
            <?php get_search_form( );?>
        </div>
    </div>

    <div class="clearfix"></div>