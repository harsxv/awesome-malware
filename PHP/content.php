		<?php
		//Listing products when category is choosen
		?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('archive-post clearfix'); ?>>

		<div class="postmeta-wrap clearfix">
			
			<a href="<?php the_permalink() ?>" rel="bookmark">
				<?php the_post_thumbnail('dukan-post-thumbnail'); ?>
			</a>
			
			<div class="postmeta"><?php dukan_display_postmeta(); ?></div>
			
		</div>
		
		<div class="post-content">

			<h2 class="post-title entry-title">
				<a href="<?php the_permalink() ?>" rel="bookmark">
					<?php dukan_display_subtitle(); ?>
					<?php the_title('<span>', '</span>'); ?>
				</a>
			</h2>

			<div class="entry clearfix">
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink() ?>" class="more-link"><?php _e('Read more', 'dukan-lite'); ?></a>
			</div>

		</div>

	</article>