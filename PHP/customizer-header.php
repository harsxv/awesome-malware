<?php
/**
 * Register Header Content section, settings and controls for Theme Customizer
 *
 */

// Add Theme Colors section to Customizer
add_action( 'customize_register', 'dukan_customize_register_header_settings' );

function dukan_customize_register_header_settings( $wp_customize ) {

	// Add Sections for Header Content
	$wp_customize->add_section( 'dukan_section_header', array(
        'title'    => __( 'Header Area', 'dukan-lite' ),
        'priority' => 20,
		'panel' => 'dukan_options_panel' 
		)
	);

	// Add Header Content Header
	$wp_customize->add_setting( 'dukan_theme_options[header_content]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new dukan_Customize_Header_Control(
        $wp_customize, 'dukan_control_header_content', array(
            'label' => __( 'Header Content', 'dukan-lite' ),
            'section' => 'dukan_section_header',
            'settings' => 'dukan_theme_options[header_content]',
            'priority' => 2
            )
        )
    );

	// Add Settings and Controls for Header
	$wp_customize->add_setting( 'dukan_theme_options[header_search]', array(
        'default'           => false,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'dukan_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'dukan_control_header_search', array(
        'label'    => __( 'Display search field on header area', 'dukan-lite' ),
        'section'  => 'dukan_section_header',
        'settings' => 'dukan_theme_options[header_search]',
        'type'     => 'checkbox',
		'priority' => 3
		)
	);

	$wp_customize->add_setting( 'dukan_theme_options[header_icons]', array(
        'default'           => false,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'dukan_sanitize_checkbox'
		)
	);
   /*  $wp_customize->add_control( 'dukan_control_header_icons', array(
        'label'    => __( 'Display Social Icons on header area', 'dukan-lite' ),
        'section'  => 'dukan_section_header',
        'settings' => 'dukan_theme_options[header_icons]',
        'type'     => 'checkbox',
		'priority' => 4
		)
	); */
	
}

?>