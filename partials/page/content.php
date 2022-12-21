<div class="blog-post hentry post-content">
    <?php if (has_post_thumbnail()) {?>
    <div class="post-image-wrap">
        <?php the_post_thumbnail( 'thumb', array( 'class' => 'post-thumb' ) );  ?>
    </div>
    <?php } ?>
    <div class="post-info">
        <h2 class="post-title">
            <?php the_title();?>
        </h2>

        <p class="post-snippet"><?php the_content();
        $link_pages_settings=array(
            'before'=>'<p class="aligncenter">',
            'after'=>'</p>',
        );
        wp_link_pages($link_pages_settings);?>
        </p>
    </div>
</div>