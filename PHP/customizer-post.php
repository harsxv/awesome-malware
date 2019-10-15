<?php
/**
 * Register Post Settings section, settings and controls for Theme Customizer
 *
 */

// Add Theme Colors section to Customizer
add_action( 'customize_register', 'dukan_customize_register_post_settings' );

function dukan_customize_register_post_settings( $wp_customize ) {

	// Add Sections for Post Settings
	$wp_customize->add_section( 'dukan_section_post', array(
        'title'    => __( 'Post Settings', 'dukan-lite' ),
        'priority' => 30,
		'panel' => 'dukan_options_panel' 
		)
	);

	// Add Post Images Headline
	$wp_customize->add_setting( 'dukan_theme_options[post_images]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new dukan_Customize_Header_Control(
        $wp_customize, 'dukan_control_post_images', array(
            'label' => __( 'Post Images', 'dukan-lite' ),
            'section' => 'dukan_section_post',
            'settings' => 'dukan_theme_options[post_images]',
            'priority' => 1
            )
        )
    );
	$wp_customize->add_setting( 'dukan_theme_options[post_thumbnails_single]', array(
        'default'           => true,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'dukan_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'dukan_control_posts_thumbnails_single', array(
        'label'    => __( 'Display featured images on single posts', 'dukan-lite' ),
        'section'  => 'dukan_section_post',
        'settings' => 'dukan_theme_options[post_thumbnails_single]',
        'type'     => 'checkbox',
		'priority' => 2
		)
	);
	
	// Add Excerpt Text setting
	$wp_customize->add_setting( 'dukan_theme_options[excerpt_text_headline]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new dukan_Customize_Header_Control(
        $wp_customize, 'dukan_control_excerpt_text_headline', array(
            'label' => __( 'Text after Excerpts', 'dukan-lite' ),
            'section' => 'dukan_section_post',
            'settings' => 'dukan_theme_options[excerpt_text_headline]',
            'priority' => 3
            )
        )
    );
	$wp_customize->add_setting( 'dukan_theme_options[excerpt_text]', array(
        'default'           => false,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'dukan_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'dukan_control_excerpt_text', array(
        'label'    => __( 'Display [...] after excerpts', 'dukan-lite' ),
        'section'  => 'dukan_section_post',
        'settings' => 'dukan_theme_options[excerpt_text]',
        'type'     => 'checkbox',
		'priority' => 4
		)
	);
	
	// Add Post Meta Settings
	$wp_customize->add_setting( 'dukan_theme_options[postmeta_headline]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new dukan_Customize_Header_Control(
        $wp_customize, 'dukan_control_postmeta_headline', array(
            'label' => __( 'Post Meta', 'dukan-lite' ),
            'section' => 'dukan_section_post',
            'settings' => 'dukan_theme_options[postmeta_headline]',
            'priority' => 5
            )
        )
    );
	$wp_customize->add_setting( 'dukan_theme_options[meta_date]', array(
        'default'           => true,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'dukan_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'dukan_control_meta_date', array(
        'label'    => __( 'Display post date', 'dukan-lite' ),
        'section'  => 'dukan_section_post',
        'settings' => 'dukan_theme_options[meta_date]',
        'type'     => 'checkbox',
		'priority' => 6
		)
	);
	$wp_customize->add_setting( 'dukan_theme_options[meta_author]', array(
        'default'           => true,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'dukan_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'dukan_control_meta_author', array(
        'label'    => __( 'Display post author', 'dukan-lite' ),
        'section'  => 'dukan_section_post',
        'settings' => 'dukan_theme_options[meta_author]',
        'type'     => 'checkbox',
		'priority' => 7
		)
	);
	$wp_customize->add_setting( 'dukan_theme_options[meta_category]', array(
        'default'           => true,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'dukan_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'dukan_control_meta_category', array(
        'label'    => __( 'Display post categories', 'dukan-lite' ),
        'section'  => 'dukan_section_post',
        'settings' => 'dukan_theme_options[meta_category]',
        'type'     => 'checkbox',
		'priority' => 8
		)
	);
	$wp_customize->add_setting( 'dukan_theme_options[meta_tags]', array(
        'default'           => true,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'dukan_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'dukan_control_meta_tags', array(
        'label'    => __( 'Display post tags', 'dukan-lite' ),
        'section'  => 'dukan_section_post',
        'settings' => 'dukan_theme_options[meta_tags]',
        'type'     => 'checkbox',
		'priority' => 9
		)
	);

}

?>