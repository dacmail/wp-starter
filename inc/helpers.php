<?php
	// Listado de comentarios
	function comentarios($comment, $args, $depth) {
	   $GLOBALS['comment'] = $comment; ?>
	   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	     <article id="comment-<?php comment_ID(); ?>" class="clearfix">
		  <?php echo get_avatar($comment,$size='75' ); ?>
	    	<div class="comment-content">
	    		<h5 class="author">
					<?php comment_author_link(); ?>
					<?php if ($comment->comment_approved == '0') : ?>
			         	<em><?php _e('Your comment is awaiting moderation.', 'ungrynerd') ?></em>
			      	<?php endif; ?>
			      	<?php edit_comment_link(__('(Edit)', 'ungrynerd'),'  ','') ?>
				</h5>
	    		<?php comment_text() ?>
	    	</div>
	     </article>
	<?php
	}

	function ungrynerd_pagination($query=null) {
		global $wp_query;
		$query = $query ? $query : $wp_query;
		$big = 999999999;

		$paginate = paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'type' => 'array',
			'total' => $query->max_num_pages,
			'format' => '?paged=%#%',
			'mid_size' => 2,
            'end_size' => 1,
			'current' => max( 1, get_query_var('paged') ),
			'prev_text' => __('<i class="fa fa-chevron-left"></i>'),
			'next_text' => __('<i class="fa fa-chevron-right"></i>'),
			)
		);

		if ($query->max_num_pages > 1) : ?>
			<ul class="pagination">
			<?php foreach ( $paginate as $page ) {
				echo '<li>' . $page . '</li>';
			} ?>
		</ul>
		<?php endif;
	}

	function ungrynerd_path($path='') {
		echo get_template_directory_uri() . $path;
	}
?>
