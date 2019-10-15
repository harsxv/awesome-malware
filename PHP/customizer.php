<?php
/**
 * Implement Theme Customizer
 *
 */

// Load Customizer Helper Functions
//get_template_part('/inc/customizer/functions/custom-controls');
include_once( get_template_directory() . '/inc/customizer/functions/custom-controls.php' );

//get_template_part('/inc/customizer/functions/sanitize-functions');
include_once( get_template_directory() . '/inc/customizer/functions/sanitize-functions.php' );

// Load Customizer Settings
//get_template_part('/inc/customizer/sections/customizer-general');
include_once( get_template_directory() . '/inc/customizer/sections/customizer-general.php' );

//get_template_part('/inc/customizer/sections/customizer-header');
include_once( get_template_directory() . '/inc/customizer/sections/customizer-header.php' );
//get_template_part('/inc/customizer/sections/customizer-post');
include_once( get_template_directory() . '/inc/customizer/sections/customizer-post.php' );
//get_template_part('/inc/customizer/sections/customizer-upgrade');
include_once( get_template_directory() . '/inc/customizer/sections/customizer-upgrade.php' );


// Add Theme Options section to Customizer
add_action( 'customize_register', 'dukan_customize_register_options' );

	


function dukan_customize_register_options( $wp_customize ) 
{

	// Add Theme Options Panel
	$wp_customize->add_panel( 'dukan_options_panel', array(
		'priority'       => 180,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Theme Options', 'dukan-lite' ),
		'description'    => '',
	) );
	
	
	
	// Add postMessage support for site title and description.
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	// Change default background section
	$wp_customize->get_control( 'background_color'  )->section   = 'background_image';
	$wp_customize->get_section( 'background_image'  )->title     = __( 'Color & Backgrounds', 'dukan-lite' );
	
	// Add Header Tagline option
	$wp_customize->add_setting( 'dukan_theme_options[header_tagline]', array(
        'default'           => false,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'dukan_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'dukan_control_header_tagline', array(
        'label'    => __( 'Display Tagline below site title.', 'dukan-lite' ),
        'section'  => 'title_tagline',
        'settings' => 'dukan_theme_options[header_tagline]',
        'type'     => 'checkbox',
		'priority' => 99
		)
	);
	//**********

	$wp_customize->add_setting( 'header_color' , array(
    'default'     => '#000000',
    'transport'   => 'refresh',
	'sanitize_callback' => 'sanitize_hex_color'
) );

	
// add color picker control
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_color', array(
	'label' => __( 'Header Color', 'dukan-lite' ),
	'section' => 'background_image',
	'settings' => 'header_color',
) ) );

//****************
	
}


// Embed JS file to make Theme Customizer preview reload changes asynchronously.
add_action( 'customize_preview_init', 'dukan_customize_preview_js' );

function dukan_customize_preview_js() {
	wp_enqueue_script( 'dukan-lite-customizer-js', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20140312', true );
}


// Embed CSS styles for Theme Customizer
add_action( 'customize_controls_print_styles', 'dukan_customize_preview_css' );

function dukan_customize_preview_css() {
	wp_enqueue_style( 'dukan-lite-customizer-css', get_template_directory_uri() . '/css/customizer.css', array(), '20140312' );

}

function dukan_theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'dukan_theme_prefix_setup' );
?>