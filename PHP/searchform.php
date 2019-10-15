
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label>
			<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'dukan-lite' ); ?></span>
			<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'dukan-lite' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
		</label>
		<button type="submit" class="search-submit">
			<span class="genericon-search"></span>
		</button>
	</form>

