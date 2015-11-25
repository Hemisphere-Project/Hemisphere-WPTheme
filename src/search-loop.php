<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class("col-1-3"); ?>>

		<!-- post title -->
		<div class="title">
			<!-- <a href="<?php echo get_post_type_archive_link('project').'#'.$post->post_name ?>" ><?php the_title(); ?></a> -->
			<a href="<?php if (get_post_type() == 'labo') echo the_permalink(); else if (get_post_type() == 'project') echo get_post_type_archive_link('project').'#'.$post->post_name ?>">
				<?php the_title(); ?>
			</a>
		</div>

		<?php	html5wp_excerpt('html5wp_search','html5wp_search_more'); // Build your custom callback length in functions.php ?>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : ?>
			<!-- <a href="<?php echo get_post_type_archive_link('project').'#'.$post->post_name ?>" > -->
				<a href="<?php if (get_post_type() == 'labo') echo the_permalink(); else if (get_post_type() == 'project') echo get_post_type_archive_link('project').'#'.$post->post_name ?>">
				<?php the_post_thumbnail(array(240,240)); ?>
			</a>

		<?php endif; ?>

	</article>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<!--<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>-->
	</article>
	<!-- /article -->

<?php endif; ?>
