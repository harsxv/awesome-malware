	
	<?php // Get Theme Options from Database
		$theme_options = dukan_theme_options();
	?>	

	<div id="footer-bg">
	
		<?php do_action('dukan_before_footer'); ?>
		
		<div id="footer-wrap">
		
			<footer id="footer" class="container clearfix" role="contentinfo">
				
				<?php // Display Social Icons
				if ( isset($theme_options['footer_icons']) and $theme_options['footer_icons'] == true ) : ?>

					<div id="footer-social-icons" class="social-icons-wrap clearfix">
						<?php dukan_display_social_icons(); ?>
					</div>

				<?php endif; ?>
				
				<div id="footer-text">
					<?php do_action('dukan_footer_text'); ?>
				</div>
				
			</footer>
			
		</div>
		
	</div>
	
</div><!-- end #wrapper -->

<?php wp_footer(); ?>
</body>
</html>