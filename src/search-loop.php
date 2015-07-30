<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class("col-1-3"); ?>>

		<!-- post title -->
		<div class="title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</div>
		<!-- /post title -->
		<?php html5wp_excerpt('html5wp_search','html5wp_search_more'); // Build your custom callback length in functions.php ?>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<?php the_post_thumbnail(array(240,240)); // Declare pixel size you need inside the array ?>
		<?php endif; ?>
		<!-- /post thumbnail -->
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<!--<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>-->
	</article>
	<!-- /article -->

<?php endif; ?>
