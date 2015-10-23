<?php get_header() ?>
<div id="container" class="container">
	<div class="row">
		<div class="col-sm-9">
			<section id="content" class="clearfix">
				<?php get_template_part( 'loop', 'single' ); ?>
			</section>
			<nav class="pagination">
				<?php previous_posts_link( __('Anterior', 'ungrynerd')); ?>
				<?php next_posts_link( __('Siguiente', 'ungrynerd')); ?>
			</nav>
		</div>
		<?php get_sidebar() ?>
	</div> <!-- /.row -->
</div>
<?php get_footer() ?>