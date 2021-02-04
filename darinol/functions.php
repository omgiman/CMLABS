<?php

	function enqueue_darinol() {
    	wp_enqueue_style( 'style', get_stylesheet_uri() );
    	wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js' );
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_darinol' );
	
	function register_custom_widget_area() {
		register_sidebar(
			array(
				'id' => 'top-widget',
				'name' => esc_html__( 'Top Widget', 'darinol' ),
				'description' => esc_html__( 'A new widget area', 'darinol' ),
				'before_widget' => '<div id="%1$s" class="section widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
				'after_title' => '</h3></div>'
			)
		);
		register_sidebar(
			array(
				'id' => 'bottom-widget',
				'name' => esc_html__( 'Bottom Widget', 'darinol' ),
				'description' => esc_html__( 'A new widget area', 'darinol' ),
				'before_widget' => '<div id="%1$s" class="section widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
				'after_title' => '</h3></div>'
			)
		);
	}
	add_action( 'widgets_init', 'register_custom_widget_area' );

?>