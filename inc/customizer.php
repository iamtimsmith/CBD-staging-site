<?php
/**
 * Understrap Theme Customizer
 *
 * @package understrap
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'understrap_customize_register' ) ) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function understrap_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}
}
add_action( 'customize_register', 'understrap_customize_register' );

if ( ! function_exists( 'understrap_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function understrap_theme_customize_register( $wp_customize ) {

		// Theme layout settings.
		$wp_customize->add_section( 'understrap_theme_layout_options', array(
			'title'       => __( 'Theme Layout Settings', 'understrap' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Container width and sidebar defaults', 'understrap' ),
			'priority'    => 160,
		) );

		 //select sanitization function
        function understrap_theme_slug_sanitize_select( $input, $setting ){
         
            //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
            $input = sanitize_key($input);
 
            //get the list of possible select options 
            $choices = $setting->manager->get_control( $setting->id )->choices;
                             
            //return input if valid or return default option
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
             
        }

		$wp_customize->add_setting( 'understrap_container_type', array(
			'default'           => 'container',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'understrap_theme_slug_sanitize_select',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'understrap_container_type', array(
					'label'       => __( 'Container Width', 'understrap' ),
					'description' => __( "Choose between Bootstrap's container and container-fluid", 'understrap' ),
					'section'     => 'understrap_theme_layout_options',
					'settings'    => 'understrap_container_type',
					'type'        => 'select',
					'choices'     => array(
						'container'       => __( 'Fixed width container', 'understrap' ),
						'container-fluid' => __( 'Full width container', 'understrap' ),
					),
					'priority'    => '10',
				)
			) );

		$wp_customize->add_setting( 'understrap_sidebar_position', array(
			'default'           => 'right',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sanitize_text_field',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'understrap_sidebar_position', array(
					'label'       => __( 'Sidebar Positioning', 'understrap' ),
					'description' => __( "Set sidebar's default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.",
					'understrap' ),
					'section'     => 'understrap_theme_layout_options',
					'settings'    => 'understrap_sidebar_position',
					'type'        => 'select',
					'sanitize_callback' => 'understrap_theme_slug_sanitize_select',
					'choices'     => array(
						'right' => __( 'Right sidebar', 'understrap' ),
						'left'  => __( 'Left sidebar', 'understrap' ),
						'both'  => __( 'Left & Right sidebars', 'understrap' ),
						'none'  => __( 'No sidebar', 'understrap' ),
					),
					'priority'    => '20',
				)
			) );


			// Custom Settings
			$wp_customize->add_setting( 'header_bg', array( 'default' => '#fafafa', ) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg', array(
				'label'							=> 'Header Settings', 'understrap',
				'description'				=> 'Background Color',
				'section'						=> 'colors',
				'settings'					=> 'header_bg',
				'priority'          => 30,
			)));
		
			$wp_customize->add_setting('headerLink', array('default','#000000',));
			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'headerLink', array(
				'label'     =>  '', 'understrap',
				'description'	=>	'Link Color',
				'section'   =>  'colors',
				'settings'  =>  'headerLink',
				'priority'  =>  50,
			)));

			$wp_customize->add_setting( 'footer_bg');
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer_bg', array(
      'label'   =>  'Footer Settings', 'understrap',
      'description'   =>  'Background Color',
      'section'     =>  'colors',
			'settings'    =>  'footer_bg',
			'priority'  =>  170,
    )));

    $wp_customize->add_setting( 'footer_text');
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer_text', array(
      'label'   =>  '', 'understrap',
      'description'   =>  'Text Color',
      'section'     =>  'colors',
			'settings'    =>  'footer_text',
			'priority'  =>  190,
    )));

    $wp_customize->add_setting( 'footer_link');
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer_link', array(
      'label'   =>  '', 'understrap',
      'description'   =>  'Link Color',
      'section'     =>  'colors',
			'settings'    =>  'footer_link',
			'priority'  =>  210,
		)));
		
		$wp_customize->add_setting( 'body_link');
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'body_link', array(
      'label'   =>  'Site', 'understrap',
      'description'   =>  'Link Color',
      'section'     =>  'colors',
			'settings'    =>  'body_link',
			'priority'  =>  70,
		)));
		
		$wp_customize->add_setting( 'body_accent');
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'body_accent', array(
      'label'   =>  '', 'understrap',
      'description'   =>  'Accent Color',
      'section'     =>  'colors',
			'settings'    =>  'body_accent',
			'priority'  =>  90,
    )));
	}
} // endif function_exists( 'understrap_theme_customize_register' ).
add_action( 'customize_register', 'understrap_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if ( ! function_exists( 'understrap_customize_preview_js' ) ) {
	/**
	 * Setup JS integration for live previewing.
	 */
	function understrap_customize_preview_js() {
		wp_enqueue_script( 'understrap_customizer', get_template_directory_uri() . '/js/customizer.js',
			array( 'customize-preview' ), '20130508', true );
	}
}
add_action( 'customize_preview_init', 'understrap_customize_preview_js' );
