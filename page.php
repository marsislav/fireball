<?php get_header(); ?>
<!-- Main Wrapper -->
<!-- Content Wrapper -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <main>
                <div class=" grid-posts">
                    <?php
                        while(have_posts()){
                        the_post();
                        get_template_part('partials/page/content');
                        }
                        ?>
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