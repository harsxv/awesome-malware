<?php get_header(); ?>

<?php // Get Theme Options from Database
	$theme_options = dukan_theme_options();
?>

	<div id="wrap" class="container clearfix">
		
		<section id="content" class="primary" role="main">

			<header class="page-header">
			
				<?php the_archive_title( '<h2 class="archive-title">', '</h2>' ); ?>
			</header>
		
			<?php if (have_posts()) : while (have_posts()) : the_post();
		
				get_template_part( 'content' );
		
			endwhile;
			
			//dukan_display_pagination();
			
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'dukan-lite' ),
				'next_text'          => __( 'Next page', 'dukan-lite' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'dukan-lite' ) . ' </span>',
			) );

			endif; ?>
			
		</section>
		
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>	