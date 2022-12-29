<div class="blog-post hentry post-content">
    <?php if (has_post_thumbnail()) {?>
    <div class="post-image-wrap">
        <?php the_post_thumbnail( 'thumb', array( 'class' => 'post-thumb' ) );  ?>
    </div>
    <?php } ?>
    <div <?php post_class( 'post-info' ); ?>>
        <h2 class="post-title">
            <?php the_title();?>
        </h2>
        <div class="post-meta">
            <span class="post-author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"
                    title="<?php _e('All posts by ', 'fireball'); the_author(); ?>"><?php the_author(); ?></a></span>
            <span class="post-date published"><?php echo get_the_date(); ?></span>
        </div>
        <p class="post-snippet"><?php the_content();
        $link_pages_settings=array(
            'before'=>'<p class="aligncenter">',
            'after'=>'</p>',
        );
        wp_link_pages($link_pages_settings);?></p>
        <div class="post-labels">
            <span><?php _e('Tags: ', 'fireball');?> </span>
            <div class="label-head Label">
                <?php the_tags('',' ');?>
                <div class="clearfix"></div>
                <?php get_template_part('partials/post/author');?>
                <?php get_template_part('partials/post/post-navigation');?>
                <div class="clearfix"></div>
                <?php if (comments_open()|| get_comments_number()){comments_template();}?>

            </div>
        </div>

    </div>
</div>