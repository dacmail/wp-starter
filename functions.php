<?php
	require get_template_directory() . '/meta-box/meta-box.php';
	include get_template_directory() . '/inc/meta-boxes.php';
	include get_template_directory() . '/inc/actions.php';
	include get_template_directory() . '/inc/config.php';
	include get_template_directory() . '/inc/posts.php';
	include get_template_directory() . '/inc/helpers.php';

	// Modo mantenimiento para no logueados
	// add_action('get_header','ungrynerd_maintenace');
	function ungrynerd_maintenace() {
		if ( !is_user_logged_in()) { wp_die('<h2>Modo mantenimiento, vuelve más tarde.</h2>'); }
	}
?>
