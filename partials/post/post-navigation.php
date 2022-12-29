<div id="related-wrap">
    <div class="title-wrap">
        <h3><?php _e('You may like these posts', 'fireball');?></h3>
    </div>
    <div class="related-ready">

        <ul class="related-posts">
            <?php 
        $categories=get_the_category();
        $rp_query=new WP_Query([
            'posts_per_page'=>3,
            'post__not_in'=>[$post->ID],
            'cat'=>!empty($categories)? $categories[0]->term_id :null,
        ]);
        
        if ($rp_query->have_posts()){
            while ($rp_query->have_posts()){
                $rp_query->the_post();?>
            <li class="related-item">
                <?php if(has_post_thumbnail()){?>
                <div class="post-image-wrap">
                    <a class="post-image-link" href="<?php the_permalink();?>">
                        <?php the_post_thumbnail('thumbnail');?>
                    </a>
                    <span class="post-tag"><?php the_category(',');?></span>
                </div>
                <?php } ?>
                <h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                <div class="post-meta"><span class="post-date"><?php echo get_the_date();?></span></div>
            </li>


            <?php 
            }
            wp_reset_postdata();
        }
        
        ?>


        </ul>
    </div>
</div>