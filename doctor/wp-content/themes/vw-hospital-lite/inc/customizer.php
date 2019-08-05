<?php
/**
 * VW Hospital Lite Theme Customizer
 *
 * @package VW Hospital Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_hospital_lite_customize_register( $wp_customize ) {

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_hospital_lite_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-hospital-lite' ),
	    'description' => __( 'Description of what this panel does.', 'vw-hospital-lite' ),
	) );

	//Layouts
	$wp_customize->add_section( 'vw_hospital_lite_left_right', array(
    	'title'      => __( 'Theme Layout Settings', 'vw-hospital-lite' ),
		'priority'   => 30,
		'panel' => 'vw_hospital_lite_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('vw_hospital_lite_theme_options',array(
	        'default' => '',
	        'sanitize_callback' => 'vw_hospital_lite_sanitize_choices'
	));

	$wp_customize->add_control('vw_hospital_lite_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section','vw-hospital-lite'),
	        'section' => 'vw_hospital_lite_left_right',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','vw-hospital-lite'),
	            'Right Sidebar' => __('Right Sidebar','vw-hospital-lite'),
	            'One Column' => __('One Column','vw-hospital-lite'),
	            'Three Columns' => __('Three Columns','vw-hospital-lite'),
	            'Four Columns' => __('Four Columns','vw-hospital-lite'),
	            'Grid Layout' => __('Grid Layout','vw-hospital-lite')
	        ),
	));

	$font_array = array(
        '' => __( 'No Fonts', 'vw-hospital-lite' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-hospital-lite' ),
        'Acme' => __( 'Acme', 'vw-hospital-lite' ),
        'Anton' => __( 'Anton', 'vw-hospital-lite' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-hospital-lite' ),
        'Arimo' => __( 'Arimo', 'vw-hospital-lite' ),
        'Arsenal' => __( 'Arsenal', 'vw-hospital-lite' ),
        'Arvo' => __( 'Arvo', 'vw-hospital-lite' ),
        'Alegreya' => __( 'Alegreya', 'vw-hospital-lite' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-hospital-lite' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-hospital-lite' ),
        'Bangers' => __( 'Bangers', 'vw-hospital-lite' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-hospital-lite' ),
        'Bad Script' => __( 'Bad Script', 'vw-hospital-lite' ),
        'Bitter' => __( 'Bitter', 'vw-hospital-lite' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-hospital-lite' ),
        'BenchNine' => __( 'BenchNine', 'vw-hospital-lite' ),
        'Cabin' => __( 'Cabin', 'vw-hospital-lite' ),
        'Cardo' => __( 'Cardo', 'vw-hospital-lite' ),
        'Courgette' => __( 'Courgette', 'vw-hospital-lite' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-hospital-lite' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-hospital-lite' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-hospital-lite' ),
        'Cuprum' => __( 'Cuprum', 'vw-hospital-lite' ),
        'Cookie' => __( 'Cookie', 'vw-hospital-lite' ),
        'Chewy' => __( 'Chewy', 'vw-hospital-lite' ),
        'Days One' => __( 'Days One', 'vw-hospital-lite' ),
        'Dosis' => __( 'Dosis', 'vw-hospital-lite' ),
        'Droid Sans' => __( 'Droid Sans', 'vw-hospital-lite' ),
        'Economica' => __( 'Economica', 'vw-hospital-lite' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-hospital-lite' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-hospital-lite' ),
        'Francois One' => __( 'Francois One', 'vw-hospital-lite' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-hospital-lite' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-hospital-lite' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-hospital-lite' ),
        'Handlee' => __( 'Handlee', 'vw-hospital-lite' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-hospital-lite' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-hospital-lite' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-hospital-lite' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-hospital-lite' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-hospital-lite' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-hospital-lite' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-hospital-lite' ),
        'Kanit' => __( 'Kanit', 'vw-hospital-lite' ),
        'Lobster' => __( 'Lobster', 'vw-hospital-lite' ),
        'Lato' => __( 'Lato', 'vw-hospital-lite' ),
        'Lora' => __( 'Lora', 'vw-hospital-lite' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-hospital-lite' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-hospital-lite' ),
        'Merriweather' => __( 'Merriweather', 'vw-hospital-lite' ),
        'Monda' => __( 'Monda', 'vw-hospital-lite' ),
        'Montserrat' => __( 'Montserrat', 'vw-hospital-lite' ),
        'Muli' => __( 'Muli', 'vw-hospital-lite' ),
        'Marck Script' => __( 'Marck Script', 'vw-hospital-lite' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-hospital-lite' ),
        'Open Sans' => __( 'Open Sans', 'vw-hospital-lite' ),
        'Overpass' => __( 'Overpass', 'vw-hospital-lite' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-hospital-lite' ),
        'Oxygen' => __( 'Oxygen', 'vw-hospital-lite' ),
        'Orbitron' => __( 'Orbitron', 'vw-hospital-lite' ),
        'Patua One' => __( 'Patua One', 'vw-hospital-lite' ),
        'Pacifico' => __( 'Pacifico', 'vw-hospital-lite' ),
        'Padauk' => __( 'Padauk', 'vw-hospital-lite' ),
        'Playball' => __( 'Playball', 'vw-hospital-lite' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-hospital-lite' ),
        'PT Sans' => __( 'PT Sans', 'vw-hospital-lite' ),
        'Philosopher' => __( 'Philosopher', 'vw-hospital-lite' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-hospital-lite' ),
        'Poiret One' => __( 'Poiret One', 'vw-hospital-lite' ),
        'Quicksand' => __( 'Quicksand', 'vw-hospital-lite' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-hospital-lite' ),
        'Raleway' => __( 'Raleway', 'vw-hospital-lite' ),
        'Rubik' => __( 'Rubik', 'vw-hospital-lite' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-hospital-lite' ),
        'Russo One' => __( 'Russo One', 'vw-hospital-lite' ),
        'Righteous' => __( 'Righteous', 'vw-hospital-lite' ),
        'Slabo' => __( 'Slabo', 'vw-hospital-lite' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-hospital-lite' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-hospital-lite'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-hospital-lite' ),
        'Sacramento' => __( 'Sacramento', 'vw-hospital-lite' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-hospital-lite' ),
        'Tangerine' => __( 'Tangerine', 'vw-hospital-lite' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-hospital-lite' ),
        'VT323' => __( 'VT323', 'vw-hospital-lite' ),
        'Varela Round' => __( 'Varela Round', 'vw-hospital-lite' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-hospital-lite' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-hospital-lite' ),
        'Volkhov' => __( 'Volkhov', 'vw-hospital-lite' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-hospital-lite' )
    );

	//Typography
	$wp_customize->add_section( 'vw_hospital_lite_typography', array(
    	'title'      => __( 'Typography', 'vw-hospital-lite' ),
		'priority'   => 30,
		'panel' => 'vw_hospital_lite_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'vw_hospital_lite_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_hospital_lite_paragraph_color', array(
		'label' => __('Paragraph Color', 'vw-hospital-lite'),
		'section' => 'vw_hospital_lite_typography',
		'settings' => 'vw_hospital_lite_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('vw_hospital_lite_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_hospital_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_hospital_lite_paragraph_font_family', array(
	    'section'  => 'vw_hospital_lite_typography',
	    'label'    => __( 'Paragraph Fonts','vw-hospital-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('vw_hospital_lite_paragraph_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_hospital_lite_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','vw-hospital-lite'),
		'section'	=> 'vw_hospital_lite_typography',
		'setting'	=> 'vw_hospital_lite_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'vw_hospital_lite_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_hospital_lite_atag_color', array(
		'label' => __('"a" Tag Color', 'vw-hospital-lite'),
		'section' => 'vw_hospital_lite_typography',
		'settings' => 'vw_hospital_lite_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('vw_hospital_lite_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_hospital_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_hospital_lite_atag_font_family', array(
	    'section'  => 'vw_hospital_lite_typography',
	    'label'    => __( '"a" Tag Fonts','vw-hospital-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'vw_hospital_lite_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_hospital_lite_li_color', array(
		'label' => __('"li" Tag Color', 'vw-hospital-lite'),
		'section' => 'vw_hospital_lite_typography',
		'settings' => 'vw_hospital_lite_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('vw_hospital_lite_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_hospital_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_hospital_lite_li_font_family', array(
	    'section'  => 'vw_hospital_lite_typography',
	    'label'    => __( '"li" Tag Fonts','vw-hospital-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'vw_hospital_lite_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_hospital_lite_h1_color', array(
		'label' => __('H1 Color', 'vw-hospital-lite'),
		'section' => 'vw_hospital_lite_typography',
		'settings' => 'vw_hospital_lite_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('vw_hospital_lite_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_hospital_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_hospital_lite_h1_font_family', array(
	    'section'  => 'vw_hospital_lite_typography',
	    'label'    => __( 'H1 Fonts','vw-hospital-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('vw_hospital_lite_h1_font_size',array(
		'default'	=> '50px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_hospital_lite_h1_font_size',array(
		'label'	=> __('H1 Font Size','vw-hospital-lite'),
		'section'	=> 'vw_hospital_lite_typography',
		'setting'	=> 'vw_hospital_lite_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'vw_hospital_lite_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_hospital_lite_h2_color', array(
		'label' => __('h2 Color', 'vw-hospital-lite'),
		'section' => 'vw_hospital_lite_typography',
		'settings' => 'vw_hospital_lite_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('vw_hospital_lite_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_hospital_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_hospital_lite_h2_font_family', array(
	    'section'  => 'vw_hospital_lite_typography',
	    'label'    => __( 'h2 Fonts','vw-hospital-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('vw_hospital_lite_h2_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_hospital_lite_h2_font_size',array(
		'label'	=> __('h2 Font Size','vw-hospital-lite'),
		'section'	=> 'vw_hospital_lite_typography',
		'setting'	=> 'vw_hospital_lite_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'vw_hospital_lite_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_hospital_lite_h3_color', array(
		'label' => __('h3 Color', 'vw-hospital-lite'),
		'section' => 'vw_hospital_lite_typography',
		'settings' => 'vw_hospital_lite_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('vw_hospital_lite_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_hospital_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_hospital_lite_h3_font_family', array(
	    'section'  => 'vw_hospital_lite_typography',
	    'label'    => __( 'h3 Fonts','vw-hospital-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('vw_hospital_lite_h3_font_size',array(
		'default'	=> '36px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_hospital_lite_h3_font_size',array(
		'label'	=> __('h3 Font Size','vw-hospital-lite'),
		'section'	=> 'vw_hospital_lite_typography',
		'setting'	=> 'vw_hospital_lite_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'vw_hospital_lite_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_hospital_lite_h4_color', array(
		'label' => __('h4 Color', 'vw-hospital-lite'),
		'section' => 'vw_hospital_lite_typography',
		'settings' => 'vw_hospital_lite_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('vw_hospital_lite_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_hospital_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_hospital_lite_h4_font_family', array(
	    'section'  => 'vw_hospital_lite_typography',
	    'label'    => __( 'h4 Fonts','vw-hospital-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('vw_hospital_lite_h4_font_size',array(
		'default'	=> '30px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_hospital_lite_h4_font_size',array(
		'label'	=> __('h4 Font Size','vw-hospital-lite'),
		'section'	=> 'vw_hospital_lite_typography',
		'setting'	=> 'vw_hospital_lite_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'vw_hospital_lite_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_hospital_lite_h5_color', array(
		'label' => __('h5 Color', 'vw-hospital-lite'),
		'section' => 'vw_hospital_lite_typography',
		'settings' => 'vw_hospital_lite_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('vw_hospital_lite_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_hospital_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_hospital_lite_h5_font_family', array(
	    'section'  => 'vw_hospital_lite_typography',
	    'label'    => __( 'h5 Fonts','vw-hospital-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('vw_hospital_lite_h5_font_size',array(
		'default'	=> '25px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_hospital_lite_h5_font_size',array(
		'label'	=> __('h5 Font Size','vw-hospital-lite'),
		'section'	=> 'vw_hospital_lite_typography',
		'setting'	=> 'vw_hospital_lite_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'vw_hospital_lite_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_hospital_lite_h6_color', array(
		'label' => __('h6 Color', 'vw-hospital-lite'),
		'section' => 'vw_hospital_lite_typography',
		'settings' => 'vw_hospital_lite_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('vw_hospital_lite_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_hospital_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_hospital_lite_h6_font_family', array(
	    'section'  => 'vw_hospital_lite_typography',
	    'label'    => __( 'h6 Fonts','vw-hospital-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('vw_hospital_lite_h6_font_size',array(
		'default'	=> '18px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_hospital_lite_h6_font_size',array(
		'label'	=> __('h6 Font Size','vw-hospital-lite'),
		'section'	=> 'vw_hospital_lite_typography',
		'setting'	=> 'vw_hospital_lite_h6_font_size',
		'type'	=> 'text'
	));	

	//home page slider
	$wp_customize->add_section( 'vw_hospital_lite_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'vw-hospital-lite' ),
		'priority'   => 30,
		'panel' => 'vw_hospital_lite_panel_id'
	) );

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'vw_hospital_lite_slidersettings-page-' . $count, array(
				'default'           => '',
				'sanitize_callback' => 'absint'
		) );

		$wp_customize->add_control( 'vw_hospital_lite_slidersettings-page-' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'vw-hospital-lite' ),
			'section'  => 'vw_hospital_lite_slidersettings',
			'type'     => 'dropdown-pages'
		) );

	}

	//OUR services
	$wp_customize->add_section('vw_hospital_lite_our_services',array(
		'title'	=> __('Our Services','vw-hospital-lite'),
		'description'=> __('This section will appear below the slider.','vw-hospital-lite'),
		'panel' => 'vw_hospital_lite_panel_id',
	));	

	for ( $count = 0; $count <= 3; $count++ ) {

		$wp_customize->add_setting( 'vw_hospital_lite_servicesettings-page-' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'absint'
		));
		$wp_customize->add_control( 'vw_hospital_lite_servicesettings-page-' . $count, array(
			'label'    => __( 'Select Service Page', 'vw-hospital-lite' ),
			'section'  => 'vw_hospital_lite_our_services',
			'type'     => 'dropdown-pages'
		));
	}


	//Topbar
	$wp_customize->add_section('vw_hospital_lite_top',array(
        'title' => __('Contact Us','vw-hospital-lite'),
        'description'   => __('This section is used to display address and contact','vw-hospital-lite'),
        'panel' => 'vw_hospital_lite_panel_id',
    ));

    $wp_customize->add_setting('vw_hospital_lite_contact_call',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('vw_hospital_lite_contact_call',array(
        'label' => __('Contact No ','vw-hospital-lite'),
        'section' => 'vw_hospital_lite_top',
        'setting'   => 'vw_hospital_lite_contact_call',
        'type'  => 'text'
    ) );

    $wp_customize->add_setting('vw_hospital_lite_contact_email',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('vw_hospital_lite_contact_email',array(
            'label' => __('Email Address','vw-hospital-lite'),
            'section' => 'vw_hospital_lite_top',
            'setting'   => 'vw_hospital_lite_contact_email',
            'type'  => 'text'
        )
    );

    //social pannel
	$wp_customize->add_section('vw_hospital_lite_social_section',array(
        'title' => __('Social Links','vw-hospital-lite'),
        'description'   => '',
        'panel' => 'vw_hospital_lite_panel_id',
    ));
	
	$wp_customize->add_setting('vw_hospital_lite_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('vw_hospital_lite_youtube_url',array(
		'label'	=> __('Youtube URL','vw-hospital-lite'),
		'section'	=> 'vw_hospital_lite_social_section',
		'type'		=> 'url'
	));
	
	$wp_customize->add_setting('vw_hospital_lite_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('vw_hospital_lite_facebook_url',array(
		'label'	=> __('Facebook URL','vw-hospital-lite'),
		'section'	=> 'vw_hospital_lite_social_section',
		'type'		=> 'url'
	));
	
	$wp_customize->add_setting('vw_hospital_lite_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('vw_hospital_lite_twitter_url',array(
		'label'	=> __('Twitter URL','vw-hospital-lite'),
		'section'	=> 'vw_hospital_lite_social_section',
		'type'		=> 'url'
	));
	
	$wp_customize->add_setting('vw_hospital_lite_rss_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('vw_hospital_lite_rss_url',array(
		'label'	=> __('RSS URL','vw-hospital-lite'),
		'section'	=> 'vw_hospital_lite_social_section',
		'type'		=> 'url'
	));


	// Footer
	$wp_customize->add_section('vw_hospital_lite_footer_section',array(
		'title'	=> __('Copyright','vw-hospital-lite'),
		'description'	=> __('Add some text for footer like copyright etc.','vw-hospital-lite'),
		'priority'	=> null,
		'panel' => 'vw_hospital_lite_panel_id',
	));
	
	$wp_customize->add_setting('vw_hospital_lite_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('vw_hospital_lite_footer_copy',array(
		'label'	=> __('Copyright Text','vw-hospital-lite'),
		'section'	=> 'vw_hospital_lite_footer_section',
		'type'		=> 'text'
	));		
	/** home page setions end here**/
	
}
add_action( 'customize_register', 'vw_hospital_lite_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo-resizer.php' );
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class VW_Hospital_Lite_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'VW_Hospital_Lite_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new VW_Hospital_Lite_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'	=> 9,
					'title'    => esc_html__( 'VW Hospital Pro', 'vw-hospital-lite' ),
					'pro_text' => esc_html__( 'Upgrade Pro','vw-hospital-lite' ),
					'pro_url'  => esc_url('https://www.vwthemes.com/premium/hospital-wordpress-theme/')
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new VW_Hospital_Lite_Customize_Section_Pro(
				$manager,
				'example_2',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Documentation', 'vw-hospital-lite' ),
					'pro_text' => esc_html__( 'Docs', 'vw-hospital-lite' ),
					'pro_url'  => admin_url( 'themes.php?page=vw_hospital_lite_guide' )
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'vw-hospital-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-hospital-lite-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
VW_Hospital_Lite_Customize::get_instance();