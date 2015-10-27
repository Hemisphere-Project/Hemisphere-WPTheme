<?php get_header(); ?>

	<div class="elevator">
		<div class="up-arrow">↑</div>
		<div class="elevator-items-list">
		</div>
		<div class="down-arrow">↓</div>
	</div>
	<!--<main role="main">-->
	<!-- section -->
		<?php
			$args = array( 'post_type' => 'project',
							'posts_per_page' => 20,
							'orderby'   => 'meta_value',
							'meta_key'  => 'wpcf-date',
							'order'   => 'DESC');
			query_posts($args);
			get_template_part('single-project');
		?>
	<!-- /section -->
	<!--</main>-->
