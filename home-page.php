<?php /* Template Name: Homepage */ ?>
<?php get_header() ?>
<section class="container">
	<div class="row">
		<div class="col-sm-9">
			<section id="content" class="clearfix">
				<?php $featured = new WP_Query(array(
												'meta_key' => '_ungrynerd_featured',
												'meta_value' => 'on',
												'post_type'=>'page, post',
												'posts_per_page' => -1)); ?>
				<?php while ($featured->have_posts()) : $featured->the_post(); ?>
					<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<h1 class="post-title">
							<a href="<?php the_permalink() ?>" title="Enlace a <?php the_title_attribute(); ?>">
								<?php the_title(); ?>
							</a>
						</h1>
						<div class="post-content">
							<?php the_content( __('Leer m&aacute;s &raquo;', 'ungrynerd')); ?>
							<?php wp_link_pages(); ?>
						</div>
						<div class="meta"><?php the_tags(); ?></div>
					</article>
				<?php endwhile; ?>
			</section>
		</div>
		<?php get_sidebar() ?>
	</div> <!-- /.row -->
</section>
<?php get_footer() ?>
