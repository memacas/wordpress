<?php
/**
 * supermarket-ecommerce: Customizer
 *
 * @package WordPress
 * @subpackage supermarket-ecommerce
 * @since 1.0
 */

function supermarket_ecommerce_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'supermarket_ecommerce_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'supermarket-ecommerce' ),
	) );

	$wp_customize->add_section( 'supermarket_ecommerce_theme_options_section', array(
    	'title'      => __( 'General Settings', 'supermarket-ecommerce' ),
		'priority'   => 30,
		'panel' => 'supermarket_ecommerce_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('supermarket_ecommerce_theme_options',array(
        'default' => __('Right Sidebar','supermarket-ecommerce'),
        'sanitize_callback' => 'supermarket_ecommerce_sanitize_choices'	        
	));
	$wp_customize->add_control('supermarket_ecommerce_theme_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','supermarket-ecommerce'),
        'section' => 'supermarket_ecommerce_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','supermarket-ecommerce'),
            'Right Sidebar' => __('Right Sidebar','supermarket-ecommerce'),
            'One Column' => __('One Column','supermarket-ecommerce'),
            'Three Columns' => __('Three Columns','supermarket-ecommerce'),
            'Four Columns' => __('Four Columns','supermarket-ecommerce'),
            'Grid Layout' => __('Grid Layout','supermarket-ecommerce')
        ),
	));

	// Top Bar
	$wp_customize->add_section( 'supermarket_ecommerce_contact_details', array(
    	'title'      => __( 'Top Bar', 'supermarket-ecommerce' ),
		'priority'   => null,
		'panel' => 'supermarket_ecommerce_panel_id'
	) );

	$wp_customize->add_setting('supermarket_ecommerce_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('supermarket_ecommerce_call',array(
		'label'	=> __('Phone text','supermarket-ecommerce'),
		'section'=> 'supermarket_ecommerce_contact_details',
		'setting'=> 'supermarket_ecommerce_call',
		'type'=> 'text'
	));

	$wp_customize->add_setting('supermarket_ecommerce_mail',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('supermarket_ecommerce_mail',array(
		'label'	=> __('Email text','supermarket-ecommerce'),
		'section'=> 'supermarket_ecommerce_contact_details',
		'setting'=> 'supermarket_ecommerce_mail',
		'type'=> 'text'
	));	

	//Social Icons
	$wp_customize->add_section( 'supermarket_ecommerce_social', array(
    	'title'      => __( 'Social Icons', 'supermarket-ecommerce' ),
		'priority'   => null,
		'panel' => 'supermarket_ecommerce_panel_id'
	) );

	$wp_customize->add_setting('supermarket_ecommerce_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('supermarket_ecommerce_facebook_url',array(
		'label'	=> __('Add Facebook link','supermarket-ecommerce'),
		'section'	=> 'supermarket_ecommerce_social',
		'setting'	=> 'supermarket_ecommerce_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('supermarket_ecommerce_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('supermarket_ecommerce_twitter_url',array(
		'label'	=> __('Add Twitter link','supermarket-ecommerce'),
		'section'	=> 'supermarket_ecommerce_social',
		'setting'	=> 'supermarket_ecommerce_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('supermarket_ecommerce_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('supermarket_ecommerce_insta_url',array(
		'label'	=> __('Add Instagram link','supermarket-ecommerce'),
		'section'	=> 'supermarket_ecommerce_social',
		'setting'	=> 'supermarket_ecommerce_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('supermarket_ecommerce_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('supermarket_ecommerce_linkedin_url',array(
		'label'	=> __('Add Linkedin link','supermarket-ecommerce'),
		'section'	=> 'supermarket_ecommerce_social',
		'setting'	=> 'supermarket_ecommerce_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('supermarket_ecommerce_you_tube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('supermarket_ecommerce_you_tube_url',array(
		'label'	=> __('Add YouTube link','supermarket-ecommerce'),
		'section'	=> 'supermarket_ecommerce_social',
		'setting'	=> 'supermarket_ecommerce_you_tube_url',
		'type'	=> 'url'
	));	

	$wp_customize->add_setting('supermarket_ecommerce_pinterest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('supermarket_ecommerce_pinterest_url',array(
		'label'	=> __('Add Pintrest link','supermarket-ecommerce'),
		'section'	=> 'supermarket_ecommerce_social',
		'setting'	=> 'supermarket_ecommerce_pinterest_url',
		'type'	=> 'url'
	));

	//Home Page slider
	$wp_customize->add_section( 'supermarket_ecommerce_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'supermarket-ecommerce' ),
		'priority'   => null,
		'panel' => 'supermarket_ecommerce_panel_id'
	) );

	$wp_customize->add_setting('supermarket_ecommerce_slider_hide_show',array(
       	'default' => 'true',
       	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('supermarket_ecommerce_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide slider','supermarket-ecommerce'),
	   	'description' => __('Image Size ( 1600px x 667px )','supermarket-ecommerce'),
	   	'section' => 'supermarket_ecommerce_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'supermarket_ecommerce_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'supermarket_ecommerce_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'supermarket_ecommerce_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'supermarket-ecommerce' ),
			'section'  => 'supermarket_ecommerce_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	$args =  array('numberposts' => 0);
	$post_list = get_posts($args);
	$i = 0;
	$posts[]='Select';  
	foreach($post_list as $post){
		$posts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('supermarket_ecommerce_post1',array(
		'sanitize_callback' => 'supermarket_ecommerce_sanitize_choices',
	));
	$wp_customize->add_control('supermarket_ecommerce_post1',array(
		'type'    => 'select',
		'choices' => $posts,
		'label' => __('Select post','supermarket-ecommerce'),
		'description' => __('Image Size ( 300px x 300px )','supermarket-ecommerce'),
		'section' => 'supermarket_ecommerce_slider_section',
	));

	//Product Section
	$wp_customize->add_section('supermarket_ecommerce_product_section',array(
		'title'	=> __('Product Section','supermarket-ecommerce'),
		'description'	=> __('Add content here.','supermarket-ecommerce'),
		'panel' => 'supermarket_ecommerce_panel_id',
	));

	$wp_customize->add_setting('supermarket_ecommerce_product_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('supermarket_ecommerce_product_title',array(
		'label'	=> __('Section Title','supermarket-ecommerce'),
		'section'	=> 'supermarket_ecommerce_product_section',
		'setting'	=> 'supermarket_ecommerce_product_title',
		'type'		=> 'text'
	));

	$args =  array('numberposts' => 0);
	$post_list = get_posts($args);
	$i = 0;
	$psts[]='Select';  
	foreach($post_list as $post){
		$psts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('supermarket_ecommerce_post',array(
		'sanitize_callback' => 'supermarket_ecommerce_sanitize_choices',
	));
	$wp_customize->add_control('supermarket_ecommerce_post',array(
		'type'    => 'select',
		'choices' => $psts,
		'label' => __('Select post','supermarket-ecommerce'),
		'description' => __('Image Size ( 300px x 450px )','supermarket-ecommerce'),
		'section' => 'supermarket_ecommerce_product_section',
	));

	$wp_customize->add_setting( 'supermarket_ecommerce_products', array(
		'default'           => '',
		'sanitize_callback' => 'supermarket_ecommerce_sanitize_dropdown_pages'
	));
	$wp_customize->add_control( 'supermarket_ecommerce_products', array(
		'label'    => __( 'Select Page', 'supermarket-ecommerce' ),
		'section'  => 'supermarket_ecommerce_product_section',
		'type'     => 'dropdown-pages'
	));

	//Footer
    $wp_customize->add_section( 'supermarket_ecommerce_footer', array(
    	'title'      => __( 'Footer Text', 'supermarket-ecommerce' ),
		'priority'   => null,
		'panel' => 'supermarket_ecommerce_panel_id'
	) );

    $wp_customize->add_setting('supermarket_ecommerce_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('supermarket_ecommerce_footer_copy',array(
		'label'	=> __('Footer Text','supermarket-ecommerce'),
		'section'	=> 'supermarket_ecommerce_footer',
		'setting'	=> 'supermarket_ecommerce_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'supermarket_ecommerce_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'supermarket_ecommerce_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'supermarket_ecommerce_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'supermarket_ecommerce_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'supermarket-ecommerce' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'supermarket-ecommerce' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'supermarket_ecommerce_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'supermarket_ecommerce_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'supermarket_ecommerce_customize_register' );

function supermarket_ecommerce_customize_partial_blogname() {
	bloginfo( 'name' );
}

function supermarket_ecommerce_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function supermarket_ecommerce_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function supermarket_ecommerce_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Supermarket_Ecommerce_Customize {

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
		$manager->register_section_type( 'Supermarket_Ecommerce_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Supermarket_Ecommerce_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Ecommerce Pro', 'supermarket-ecommerce' ),
					'pro_text' => esc_html__( 'Go Pro','supermarket-ecommerce' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/themes/wordpress-ecommerce-theme/' ),
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

		wp_enqueue_script( 'supermarket-ecommerce-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'supermarket-ecommerce-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Supermarket_Ecommerce_Customize::get_instance();