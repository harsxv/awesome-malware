	<?php
//Only for searhc page
?>	
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
		<h2 class="post-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<div class="entry clearfix">
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink() ?>" class="more-link"><?php _e('Read more', 'dukan-lite'); ?></a>
		</div>

	</div>