<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<div id="sb-search" class="sb-search">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input class="sb-search-input" value="<?php the_search_query(); ?>" placeholder="<?php _e( 'What are you seraching for?', 'fireball' ); ?>" type="search" name="s" id="<?php echo $unique_id; ?>" >
		<input class="sb-search-submit" type="submit" value="">
		<span class="sb-icon-search"></span>
	</form>
</div>

<script>
	new UISearch( document.getElementById( 'sb-search' ) );
</script>