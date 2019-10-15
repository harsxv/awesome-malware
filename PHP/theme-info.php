<?php
/***
 * Theme Info
 *
 * Adds a simple Theme Info page to the Appearance section of the WordPress Dashboard. 
 *
 */


// Add Theme Info page to admin menu
add_action('admin_menu', 'dukan_add_theme_info_page');
function dukan_add_theme_info_page() {
	
	// Get Theme Details from style.css
	$theme = wp_get_theme(); 
	
	add_theme_page( 
		sprintf( __( 'Welcome to %1$s %2$s', 'dukan-lite' ), $theme->get( 'Name' ), $theme->get( 'Version' ) ), 
		__('Theme Info', 'dukan-lite'), 
		'edit_theme_options', 
		'dukan', 
		'dukan_display_theme_info_page'
	);
	
}


// Display Theme Info page
function dukan_display_theme_info_page() { 
	
	// Get Theme Details from style.css
	$theme = wp_get_theme(); 
	
?>
			

	<div class="wrap theme-info-wrap">

		<h1><?php printf( __( 'Welcome to %1$s %2$s', 'dukan-lite' ), $theme->get( 'Name' ), $theme->get( 'Version' ) ); ?></h1>

		<div class="theme-description"><?php echo $theme->get( 'Description' ); ?></div>
		
		<hr>
		<div class="important-links clearfix">
			<p><strong><?php esc_html_e('Important Links:', 'dukan-lite'); ?></strong>
				<a href="<?php echo esc_url( __('http://odude.com/themes/dukan/', 'dukan-lite'));?>" target="_blank"><?php esc_html_e('Visit Us', 'dukan-lite'); ?></a>
			
	
			</p>
		</div>
		<hr>
				
		<div id="getting-started">

			<div class="columns-wrapper clearfix">

				<div class="column column-half clearfix">
				
					<h3><?php printf( __( 'Getting Started with %s', 'dukan-lite' ), $theme->get( 'Name' ) ); ?></h3>
						
					<div class="section">
						<h4><?php esc_html_e( 'Theme Documentation', 'dukan-lite' ); ?></h4>
						
						<p class="about">
							<?php esc_html_e( 'You need help to setup and configure this theme? We got you covered with an extensive theme documentation on our website.', 'dukan-lite' ); ?>
						</p>
						<p>
							<a href="<?php echo esc_url( __('http://odude.com/themes/dukan/', 'dukan-lite'));?>" target="_blank" class="button button-secondary">
								<?php printf( __( 'View %s Documentation', 'dukan-lite' ), 'dukan' ); ?>
							</a>
						</p>
					</div>
					
					<div class="section">
						<h4><?php _e( 'Theme Options', 'dukan-lite' ); ?></h4>
						
						<p class="about">
							<?php printf( __( '%s makes use of the Customizer for all theme settings. Click on "Customize Theme" to open the Customizer now.', 'dukan-lite' ), $theme->get( 'Name' ) ); ?>
						</p>
						<p>
							<a href="<?php echo admin_url( 'customize.php' ); ?>" class="button button-primary"><?php _e('Customize Theme', 'dukan-lite'); ?></a>
						</p>
					</div>
					
					<div class="section">
						<h4><?php esc_html_e( 'Pro Version', 'dukan-lite' ); ?></h4>
						
						<p class="about">
							<?php esc_html_e( 'You need more features? Purchase the Pro Version to get additional features and advanced customization options.', 'dukan-lite' ); ?>
						</p>
						<p>
							<a href="<?php echo esc_url( __('http://odude.com/themes/dukan/', 'dukan-lite'));?>" target="_blank" class="button button-secondary">
								<?php printf( __( 'Learn more about %s Pro', 'dukan-lite' ), 'dukan'); ?>
							</a>
						</p>
					</div>

				</div>
				
				<div class="column column-half clearfix">
					
					<img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" />
					
				</div>
				
			</div>
			
		</div>
		
		<hr>
		
		<div id="theme-author">
			
			<p><?php printf( __( '%1$s is proudly brought to you by %2$s. If you like this theme, %3$s :)', 'dukan-lite' ), 
				$theme->get( 'Name' ),
				'<a target="_blank" href="'.esc_url( __( 'http://odude.com/', 'dukan-lite' ) ).'" title="' . esc_attr__( 'ODude', 'dukan-lite' ) . '">' . esc_html__( 'ODude', 'dukan-lite' ) . '</a>',
				'<a target="_blank" href="'.esc_url( __( 'http://wordpress.org/support/view/theme-reviews/dukan-lite?filter=5', 'dukan-lite' ) ).'" title="' . esc_attr__( 'Dukan Lite Review', 'dukan-lite' ) . '">' . esc_html__( 'rate it', 'dukan-lite' ) . '</a>'); ?>
			</p>
		
		</div>
	
	</div>

<?php
}


// Add CSS for Theme Info Panel
add_action('admin_enqueue_scripts', 'dukan_theme_info_page_css');
function dukan_theme_info_page_css() { 
	
	// Load styles and scripts only on dukan page
	if ( isset($_GET['page']) and $_GET['page'] == 'dukan' ) :
		
		// Embed theme info css style
		wp_enqueue_style('dukan-lite-theme-info-css', get_template_directory_uri() .'/css/theme-info.css');
		
	endif;
}


?>