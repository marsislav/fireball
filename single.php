<?php get_header(); ?>
<!-- Main Wrapper -->
<!-- Content Wrapper -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <main>
                <div class=" grid-posts">
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


                    <div class="blog-pager container" id="blog-pager">
                        <?php next_posts_link();?>
                        <?php previous_posts_link();?>
                    </div>
            </main>
        </div>

        <!-- Sidebar Wrapper -->
        <div class="col-md-4">
            <?php get_sidebar();?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php get_footer(); ?>