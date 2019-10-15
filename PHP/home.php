<?php get_header(); ?>

<?php // Get Theme Options from Database
	//$theme_options = dukan_theme_options();

	// Display Featured Posts on homepage
	if ( is_front_page() && dukan_has_featured_content() ) :
		
		// Include the featured content template.
		get_template_part( 'featured-content' );
		
	endif;
?>

	<div id="wrap" class="container clearfix">
	
		<section id="content" class="primary" role="main">
		 
		<?php if (have_posts()) : while (have_posts()) : the_post();
		
			get_template_part( 'content' );
		
			endwhile;
			
		
			
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