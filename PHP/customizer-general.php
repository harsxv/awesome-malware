<?php
/**
 * Register General section, settings and controls for Theme Customizer
 *
 */

// Add Theme Colors section to Customizer
add_action( 'customize_register', 'dukan_customize_register_general_settings' );

function dukan_customize_register_general_settings( $wp_customize ) {

	// Add Section for Theme Options
	$wp_customize->add_section( 'dukan_section_general', array(
        'title'    => __( 'General Settings', 'dukan-lite' ),
        'priority' => 10,
		'panel' => 'dukan_options_panel' 
		)
	);
	
	// Add Settings and Controls for Layout
	$wp_customize->add_setting( 'dukan_theme_options[layout]', array(
        'default'           => 'right-sidebar',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'dukan_sanitize_layout'
		)
	);
    $wp_customize->add_control( 'dukan_control_layout', array(
        'label'    => __( 'Theme Layout', 'dukan-lite' ),
        'section'  => 'dukan_section_general',
        'settings' => 'dukan_theme_options[layout]',
        'type'     => 'radio',
		'priority' => 1,
        'choices'  => array(
            'left-sidebar' => __( 'Left Sidebar', 'dukan-lite' ),
            'right-sidebar' => __( 'Right Sidebar', 'dukan-lite' ),
			)
		)
	);

	// Add Footer Content Header
	$wp_customize->add_setting( 'dukan_theme_options[footer_content]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new dukan_Customize_Header_Control(
        $wp_customize, 'dukan_control_footer_content', array(
            'label' => __( 'Footer Icons', 'dukan-lite' ),
            'section' => 'dukan_section_general',
            'settings' => 'dukan_theme_options[footer_content]',
            'priority' => 4
            )
        )
    );

	// Add Footer Settings
	$wp_customize->add_setting( 'dukan_theme_options[footer_icons]', array(
        'default'           => false,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'dukan_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'dukan_control_footer_icons', array(
        'label'    => __( 'Display Social Icons in footer', 'dukan-lite' ),
        'section'  => 'dukan_section_general',
        'settings' => 'dukan_theme_options[footer_icons]',
        'type'     => 'checkbox',
		'priority' => 5
		)
	);
	
	// Add Default Fonts Header
	$wp_customize->add_setting( 'dukan_theme_options[default_fonts]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new dukan_Customize_Header_Control(
        $wp_customize, 'dukan_control_default_fonts', array(
            'label' => __( 'Default Fonts', 'dukan-lite' ),
            'section' => 'dukan_section_general',
            'settings' => 'dukan_theme_options[default_fonts]',
            'priority' => 6
            )
        )
    );
	
	// Add Settings and Controls for Deactivate Google Font setting
	$wp_customize->add_setting( 'dukan_theme_options[deactivate_google_fonts]', array(
        'default'           => false,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'dukan_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'dukan_control_deactivate_google_fonts', array(
        'label'    => __( 'Deactivate Google Fonts in case your language is not compatible.', 'dukan-lite' ),
        'section'  => 'dukan_section_general',
        'settings' => 'dukan_theme_options[deactivate_google_fonts]',
        'type'     => 'checkbox',
		'priority' => 7
		)
	);
	
}

?>