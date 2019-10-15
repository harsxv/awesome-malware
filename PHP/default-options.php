<?php
/**
 * Returns theme options
 *
 * Use sane defaults in case the user has not configured any theme options yet.
 */


// Return theme options
function dukan_theme_options() {
    
	// Merge Theme Options Array from Database with Default Options Array
	$theme_options = wp_parse_args( 
		
		// Get saved theme options from WP database
		get_option( 'dukan_theme_options', array() ), 
		
		// Merge with Default Options if setting was not saved yet
		dukan_default_options() 
		
	);

	// Return theme options
	return $theme_options;
	
}


// Build default options array
function dukan_default_options() {

	$default_options = array(
		'layout' 							=> 'right-sidebar',
		'footer_icons'						=> false,
		'deactivate_google_fonts'			=> false,
		'header_search' 					=> false,
		'header_icons' 						=> false,
		'post_thumbnails_single' 			=> true,
		'excerpt_text' 						=> false,
		'meta_date'							=> true,
		'meta_author'						=> true,
		'meta_category'						=> true,
		'meta_tags'							=> true
	);
	
	return $default_options;
}


?>