<div class="about-author">
    <?php
        $author_id=get_the_author_meta('ID');
        $author_posts=get_the_author_posts();
        $author_display=get_the_author();
        $author_posts_url=get_author_posts_url($author_id);
        $author_description=get_the_author_meta('user_description');
        $author_website=get_the_author_meta('user_url');
    ?>
    <div class="avatar-container">
        <?php echo get_avatar($author_id )?>
    </div>
    <h3 class="author-name">
        <span>Posted by</span>
        <?php if ($author_website) {?>
        <a href="<?php echo esc_url($author_website)?>" target="_blank">
            <?php } ?>
            <?php echo esc_html($author_display);?>
            <?php if ($author_website) {?>
        </a>
        <?php }?>
        <a href="<?php echo esc_url($author_posts_url)?>">
            <?php printf(esc_html(_n('%s post', '%s posts', $author_posts, 'fireball')),number_format_i18n($author_posts)); ?></a>
    </h3>
    <span class="author-description"><?php echo esc_html($author_description);?></span>
</div>