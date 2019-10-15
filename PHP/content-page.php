
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
		<h2 class="page-title entry-title"><?php the_title(); ?></h2>

		<div class="entry clearfix">
			<?php the_content(); ?>		
		</div>
		<?php wp_link_pages(); ?>

	</div>