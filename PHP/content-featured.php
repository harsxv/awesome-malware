	
	<div class="featured-post">
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<div class="post-thumbnail">
				<a href="<?php the_permalink() ?>" rel="bookmark">
					<?php the_post_thumbnail('dukan_featured-content'); ?>
				</a>
			</div>
			
			<div class="featured-post-content">

				<h2 class="post-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>	
			
			</div>

		</article>
		
	</div>