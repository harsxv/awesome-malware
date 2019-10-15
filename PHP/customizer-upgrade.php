<?php
/**
 * Register PRO Version section, settings and controls for Theme Customizer
 *
 */

// Add Theme Colors section to Customizer
add_action( 'customize_register', 'dukan_customize_register_upgrade_settings' );

function dukan_customize_register_upgrade_settings( $wp_customize ) {

	// Add Sections for Post Settings
	$wp_customize->add_section( 'dukan_section_upgrade', array(
        'title'    => __( 'Pro Version', 'dukan-lite' ),
        'priority' => 50,
		'panel' => 'dukan_options_panel' 
		)
	);

	// Add PRO Version Section
	$wp_customize->add_setting( 'dukan_theme_options[pro_version_label]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new dukan_Customize_Header_Control(
        $wp_customize, 'dukan_control_pro_version_label', array(
            'label' => __( 'You need more features?', 'dukan-lite' ),
            'section' => 'dukan_section_upgrade',
            'settings' => 'dukan_theme_options[pro_version_label]',
            'priority' => 1
            )
        )
    );
	$wp_customize->add_setting( 'dukan_theme_options[pro_version]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new dukan_Customize_Text_Control(
        $wp_customize, 'dukan_control_pro_version', array(
            'label' =>  __( 'Purchase the Pro Version to get additional features and advanced customization options.', 'dukan-lite' ),
            'section' => 'dukan_section_upgrade',
            'settings' => 'dukan_theme_options[pro_version]',
            'priority' => 2
            )
        )
    );
	$wp_customize->add_setting( 'dukan_theme_options[pro_version_button]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new dukan_Customize_Button_Control(
        $wp_customize, 'dukan_control_pro_version_button', array(
            'label' => sprintf( __( 'Learn more about %s Pro', 'dukan-lite' ), 'dukan'),
			'section' => 'dukan_section_upgrade',
            'settings' => 'dukan_theme_options[pro_version_button]',
            'priority' => 3
            )
        )
    );

}

?>