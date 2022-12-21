<div class="blog-post hentry index-post">
    <?php if (has_post_thumbnail()) {?>
    <div class="post-image-wrap">
        <a class="post-image-link" href="<?php the_permalink();?>">
            <?php the_post_thumbnail( 'thumb', array( 'class' => 'post-thumb' ) );  ?>
            <!--<img alt="The 10 Most Common Dreams and What is Their Meaning" class="post-thumb" src="./Cream_files/1.jpg">-->
        </a>
        <span class="post-tag index-post-tag">
            <?php the_category(' , ');?>
        </span>
    </div>
    <?php } ?>
    <div class="post-info">
        <h2 class="post-title">
            <a href="<?php the_permalink();?>"><?php the_title();?></a>
        </h2>
        <div class="post-meta">
            <span class="post-author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"
                    title="<?php _e('All posts by ', 'fireball'); the_author(); ?>"><?php the_author(); ?></a></span>
            <span class="post-date published"><?php echo get_the_date(); ?></span>
        </div>
        <p class="post-snippet"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
        <a class="read-more" href="<?php the_permalink();?>"><?php _e('Continue Reading', 'fireball');?></a>
    </div>
</div>