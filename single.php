<?php get_header() ?>
<section class="container">
    <div class="col-sm-9">
    	<section id="content" class="clearfix">
    		<?php get_template_part('loop', 'single'); ?>
    		<?php comments_template(); ?>
    	</section>
    </div>
	<?php get_sidebar() ?>
</section>
<?php get_footer() ?>
