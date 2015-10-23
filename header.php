<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="navbar" id="header">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu">
					<span class="sr-only"><?php _e('Toggle navigation', 'ungrynerd'); ?></span>
					<?php _e('Menu', 'ungrynerd'); ?>
				</button>
				<a href="<?php echo home_url(); ?>" class="logo navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
			</div>
			<?php wp_nav_menu(array('container' => 'nav',
								'container_id' => 'main-menu', 
								'container_class' => 'collapse width navbar-collapse', 
								'menu_class' => 'nav navbar-nav',
								'theme_location' => 'main')); ?>

		</div> <!--- /.container -->
	</header>