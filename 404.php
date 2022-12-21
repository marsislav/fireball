<?php get_header(); ?>
<!-- Main Wrapper -->
<div id="main-wrapper" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
        <div class="main section" id="main" name="Main Posts">
            <div class="widget Blog" data-version="2" id="Blog1">
                <div class="blog-posts hfeed container index-post-wrap">

                    <div class="empty aligncenter">

                        <h1><?php _e('404', 'fireball');?></h1>
                        <h2><?php _e("There's nothing here!", "fireball");?></h2>
                        <h3><?php _e('Sorry, the page you were looking for in this blog does not exist.', 'fireball');?>
                        </h3>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Sidebar Wrapper -->
<?php get_sidebar();?>

<div class="clearfix"></div>
</div>
<?php get_footer(); ?>