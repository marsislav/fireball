<!DOCTYPE html>
<html class="ltr" dir="ltr" <?php language_attributes(); ?>">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset');?>">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
    <?php wp_head();?>
</head>

<body <?php body_class('index home')?>">
    <?php wp_body_open(); ?>
    <div class="theme-options">
        <div class="sora-panel section" id="sora-panel" name="Theme Options">
            <div class="widget LinkList" data-version="2" id="LinkList70">

            </div>
            <div class="widget LinkList" data-version="2" id="LinkList71">

            </div>
            <!-- Outer Wrapper -->
            <div id="outer-wrapper" style="transform: none;">
                <!-- Main Top Bar -->
                <div id="top-bar">
                    <div class="container row">
                        <div class="top-bar-nav section" id="top-bar-nav" name="Top Navigation">
                            <div class="widget LinkList" data-version="2" id="LinkList72">
                                <div class="widget-content">
                                    <ul>
                                        <?php wp_nav_menu(array (
                        'theme_location'=>'top'
                    ));?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Top Social -->
                        <div class="top-bar-social social section" id="top-bar-social" name="Social Top">
                            <div class="widget LinkList" data-version="2" id="LinkList73">
                                <div class="widget-content">
                                    <ul>
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
                                            <li class="fab fa-viber"><a href="
                                                viber://chat?number=<?php echo get_theme_mod('hs21_viber_handle')?>"
                                                    title="Viber"></a></li>
                                            <?php }?>
                                            <?php if(get_theme_mod('fireball_whatsapp_handle')){?>
                                            <li class="whatsapp"><a
                                                    href="https://api.whatsapp.com/send?phone=<?php echo get_theme_mod('hs21_whatsapp_handle')?>"
                                                    title="Whatsapp"></a></li>
                                            <?php }?>
                                            <?php if(get_theme_mod('fireball_github_handle')){?>
                                            <li class="github"><a
                                                    href="<?php echo esc_url(get_theme_mod('fireball_github_handle'));?>"
                                                    target="_blank" title="Github"></a></li>
                                            <?php }?>
                                            <?php if(get_theme_mod('fireball_github_handle')){?>
                                            <li class="github"><a
                                                    href="<?php echo esc_url(get_theme_mod('fireball_github_handle'));?>"
                                                    target="_blank" title="Github"></a></li>
                                            <?php }?>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Wrapper -->
                <div id="header-wrap">
                    <div class="header-header">
                        <div class="container row">
                            <div class="header-logo section" id="header-logo" name="Header Logo">
                                <div class="widget Header" data-version="2" id="Header1">
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
                    </div>
                    <div class="header-menu">
                        <div class="mobile-menu">
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
                        <div class="container row">
                            <span class="slide-menu-toggle"></span>
                            <div class="main-menu section" id="main-menu" name="Main Menu">
                                <div class="widget LinkList show-menu" data-version="2" id="LinkList74">
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
                            <div id="nav-search" style="position:relative">
                                <?php get_search_form( );?>
                            </div>
                            
                            

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- Content Wrapper -->
                <div class="row" id="content-wrapper" style="transform: none;">
                    <div class="container" style="transform: none;">