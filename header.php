<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<div class="container">
			<div class="header__wrapper">
				<?php if (has_custom_logo()): ?>
					<?php the_custom_logo(); ?>
				<?php else: ?>
					<a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo logo--text">
						<?php bloginfo('name'); ?>
					</a>
				<?php endif ?>

				<button class="header__menu-toggle"><?php esc_html_e('Menu', 'ungrynerd'); ?></button>
			</div>
			<?php wp_nav_menu(array('container' => 'nav',
								'menu_class' => 'header__menu',
								'theme_location' => 'main',
								'fallback_cb' => false)); ?>
		</div> <!--- /.container -->
	</header>
