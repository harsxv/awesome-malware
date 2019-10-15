<?php get_header(); ?>

	<div id="wrap" class="container clearfix">
		
		<section id="content" class="primary" role="main">
		
    <?php if(function_exists('bcn_display'))
    {
		?>
		<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
		<?php  bcn_display(); ?>
		</div>
		
		<?php
    }
	?>

		<?php if (have_posts()) : while (have_posts()) : the_post();
		
			get_template_part( 'content', 'single' );
			
			
			// Previous/next post navigation.
			
			the_post_navigation();
			
			
			endwhile;
		
		endif; ?>
			
		<?php comments_template(); ?>
		
		</section>
		
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>	