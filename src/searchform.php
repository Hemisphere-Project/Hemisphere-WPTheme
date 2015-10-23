<!-- search -->
<form class="search" method="get" action="<?php echo home_url(); ?>" role="search"  autocomplete="off">
	<input class="search-input" type="search" name="s" onfocus="this.placeholder = ''" placeholder="<?php _e( '', 'html5blank' ); echo get_search_query(); ?>">
	<button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'html5blank' ); ?></button>
</form>
<!-- /search -->
