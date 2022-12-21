<!DOCTYPE html>
<html class="ltr" dir="ltr" <?php language_attributes(); ?>">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset');?>">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
    <?php wp_head();?>
</head>

<body <?php body_class('index home')?>">
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
                                                    target="_blank" title="facebook"></a></li>
                                            <?php }?>
                                            <?php if(get_theme_mod('fireball_twitter_handle')){?>
                                            <li class="twitter"><a
                                                    href="<?php echo esc_url(get_theme_mod('fireball_twitter_handle'));?>"
                                                    target="_blank" title="twitter"></a></li>
                                            <?php } ?>
                                            <li class="instagram"><a href="https://cream-way2themes.blogspot.com/#"
                                                    target="_blank" title="instagram"></a></li>
                                            <li class="pinterest"><a href="https://cream-way2themes.blogspot.com/#"
                                                    target="_blank" title="pinterest"></a></li>
                                            <li class="gplus"><a href="https://cream-way2themes.blogspot.com/#"
                                                    target="_blank" title="gplus"></a></li>
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
                        <!--<div class="mobile-menu">
                            <ul id="main-menu-nav" role="menubar">
                                <li><a href="https://cream-way2themes.blogspot.com/" role="menuitem">Home</a></li>
                                <li class="has-sub"><a href="https://cream-way2themes.blogspot.com/#"
                                        role="menuitem">Features</a>
                                    <ul class="sub-menu m-sub">
                                        <li class="has-sub"><a href="https://cream-way2themes.blogspot.com/#"
                                                role="menuitem">Multi DropDown</a>
                                            <ul class="sub-menu2 m-sub">
                                                <li><a href="https://cream-way2themes.blogspot.com/#"
                                                        role="menuitem">DropDown 1</a></li>
                                                <li><a href="https://cream-way2themes.blogspot.com/#"
                                                        role="menuitem">DropDown 2</a></li>
                                                <li><a href="https://cream-way2themes.blogspot.com/#"
                                                        role="menuitem">DropDown 3</a></li>
                                            </ul>
                                            <div class="submenu-toggle"></div>
                                        </li>
                                        <li><a href="https://cream-way2themes.blogspot.com/p/post-format-and-page-markup.html"
                                                role="menuitem">ShortCodes</a></li>
                                        <li><a href="https://www.sorabloggingtips.com/2017/01/how-to-add-sitemap-widget-in-blogspot-blogs.html"
                                                role="menuitem">SiteMap</a></li>
                                        <li><a href="https://cream-way2themes.blogspot.com/soratemplates"
                                                role="menuitem">Error Page</a></li>
                                    </ul>
                                    <div class="submenu-toggle"></div>
                                </li>







                                <li><a href="https://cream-way2themes.blogspot.com/search/label/recent?&amp;max-results=6"
                                        role="menuitem">Mega Menu</a></li>
                                <li><a href="https://www.sorabloggingtips.com/2018/10/how-to-setup-cream-blogger-template.html"
                                        role="menuitem">Documentation</a></li>
                                <li><a href="https://youtu.be/UbmAZyUAzmU" role="menuitem">Video Documentation</a></li>
                                <li><a href="http://www.way2themes.com/2018/10/cream-fashion-magazine-blogger-template.html"
                                        role="menuitem">Download This Template</a></li>
                            </ul>
                        </div>-->
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
                            <div id="nav-search">
                                <form action="https://cream-way2themes.blogspot.com/search" class="search-form"
                                    role="search">
                                    <input autocomplete="off" class="search-input" name="q"
                                        placeholder="Search this blog" type="search" value="">
                                    <span class="hide-search"></span>
                                </form>
                            </div>
                            <span class="show-search"></span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- Content Wrapper -->
                <div class="row" id="content-wrapper" style="transform: none;">
                    <div class="container" style="transform: none;">