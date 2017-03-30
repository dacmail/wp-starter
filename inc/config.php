<?php
	//Theme setup
	function ungrynerd_setup() {
		load_theme_textdomain('ungrynerd', get_template_directory() . '/languages');

		//Add support to RSS links in head
		add_theme_support('automatic-feed-links');

		//Add title tag support
		add_theme_support('title-tag');

		// Soporte para miniaturas y definición de tamaños
		add_theme_support('post-thumbnails');
		if ( function_exists('add_image_size')) {
			add_image_size('featured', 800, 400, true);
		}

		// Definición menús
		if ( function_exists('register_nav_menus')) {
			register_nav_menus(
				array(
				  'main' => esc_html__('Menu principal', 'ungrynerd'),
				  'secondary' => 'Menu secundario'
				)
			);
		}

		//HTML markup
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		add_theme_support('custom-logo');

	}
	add_action('after_setup_theme', 'ungrynerd_setup');

	// Content width
	function ungrynerd_content_width() {
		$GLOBALS['content_width'] = apply_filters('ungrynerd_content_width', 640);
	}
	add_action('after_setup_theme', 'ungrynerd_content_width', 0);

	// Widgets zones definition
	function ungrynerd_widgets_init() {
		register_sidebar(array(
			'id' => 'sidebar-1',
		    'before_widget' => '<div id="%1$s" class="widget %2$s">',
		    'after_widget' => '</div>',
		    'before_title' => '<h2 class="title">',
		 	'after_title' => '</h2>',
		 	'name' => esc_html__('Barra Lateral', 'ungrynerd')
		));
	}
	add_action('widgets_init', 'ungrynerd_widgets_init');


	add_filter('get_custom_logo','ungrynerd_change_logo_class');
	function ungrynerd_change_logo_class($html) {
		$html = str_replace('class="custom-logo-link"', 'header__logo logo--image', $html);
		return $html;
	}
?>
