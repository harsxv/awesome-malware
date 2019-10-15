<!DOCTYPE html><!-- HTML 5 -->
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />


<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php endif; ?>


<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php // Get Theme Options from Database
	$theme_options = dukan_theme_options();
?>

<div id="wrapper" class="hfeed">

	<div id="header-wrap">
	
		<div id="topheader-wrap">
			
			<div id="topheader" class="container clearfix">
			
				<?php // Display Search Form
				if ( isset($theme_options['header_search']) and $theme_options['header_search'] == true ) : ?>

					<div id="header-search">
						<?php get_search_form(true); ?>
					</div>

				<?php endif; ?>
				
				<?php // Display Top Navigation Menu
				if ( has_nav_menu( 'secondary' ) ) : ?>
				
					<nav id="topnav" class="clearfix" role="navigation">
						<?php 
					
						// Display Top Navigation
							wp_nav_menu( array(
								'theme_location' => 'secondary', 
								'container' => false, 
								'menu_id' => 'topnav-menu', 
								'echo' => true, 
								'fallback_cb' => '',
								'depth' => 1)
							);
						?>
					</nav>
					
				<?php endif; ?>
				
			</div>
			
		</div>
	
		<header id="header" class="container clearfix" role="banner">

			<div id="logo">
			<?php
			if ( get_theme_mod( 'custom_logo' ) )
			{
				//echo esc_url( get_theme_mod( 'themeslug_banner' )
				$custom_logo_id = esc_attr(get_theme_mod( 'custom_logo' ));
				$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				
				?>
				 <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( $image[0] ); ?>'></a>
				 
				
				 
				 
				<?php
			}
			else
			{
				?>
			
				<?php do_action('dukan_site_title'); ?>
				
				<?php // Display Tagline on header if activated
				if ( isset($theme_options['header_tagline']) and $theme_options['header_tagline'] == true ) : ?>			
					<h2 class="site-description"><?php bloginfo('description'); ?></h2>
				<?php endif; 
			}	
			?>
			
			</div>
			
			<div id="header-content" class="clearfix">
			
				<div id="dukan_banner" class="clearfix">
						
						
							<?php
			// Check if Top Header has widgets
			if( is_active_sidebar('topheader') )
			{
			
				dynamic_sidebar('topheader');
			}
			
		
			 ?>
				</div>
				
			
			
			</div>

		</header>
	
	</div>
	
	<div id="mainnav-wrap">
		
		<nav id="mainnav" class="container clearfix" role="navigation">
	
			<?php // Display Main Navigation
			if(is_category())
			{

				//$wp_query = NULL;
				//$wp_query = new WP_Query(array('post_type' => 'post','page'));

				}
				wp_nav_menu( array(
					'theme_location' => 'primary', 
					'container' => false, 
					'menu_id' => 'mainnav-menu', 
					'echo' => true, 
					'fallback_cb' => 'dukan_default_menu')
				);
			?>
		</nav>
		
	</div>
	
	<?php // Display Custom Header Image
		dukan_display_custom_header(); ?>
		