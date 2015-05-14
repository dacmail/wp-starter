<?php
	//Enqueue scripts and styles
	function ungrynerd_scripts() {
		wp_enqueue_style('ungrynerd-style', get_stylesheet_uri() );

		if( !is_admin()){
			wp_deregister_script('jquery');

			wp_enqueue_script('jquery','/wp-includes/js/jquery/jquery.js','','',true);
			wp_enqueue_script('ungrynerd-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
			wp_enqueue_script('html5shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', array(), '3.7.2');
			wp_enqueue_script('respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '1.4.2');
			
			//wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
			//wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
		}

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'ungrynerd_scripts' );

	//Remove emojis support
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	//Remove recent comments styles in head
	function remove_recent_comments_style() {
	    global $wp_widget_factory;
	    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
	}
	add_action('widgets_init', 'remove_recent_comments_style');

	// Oculta la barra de administración
	add_filter( "show_admin_bar", "__return_false" );