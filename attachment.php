<?php get_header(); ?>
<!-- Main Wrapper -->
<div id="main-wrapper" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
        <div class="main section" id="main" name="Main Posts">
            <div class="widget Blog">
                <div class="blog-posts hfeed container index-post-wrap">

                    <div class="grid-posts">
                        <?php if (have_posts()) {
                        while(have_posts()){
                          the_post();
                          get_template_part('partials/post/content-single');
                        }

                        }
                        else {
                        _e('<h5>Sorry, posts yet!</h5>', 'fireball');
                        }
                        ?>

                    </div>
                </div>
                <div class="blog-pager container" id="blog-pager">
                    <?php next_posts_link();?>
                    <?php previous_posts_link();?>
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