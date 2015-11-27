<?php get_header(); ?>

<main role="main">
	<section class="labo">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php get_template_part('part-labo'); ?>

		<?php endwhile; ?>

		<?php else: ?>

		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>

	<?php endif; ?>

	<?php get_template_part('pagination'); ?>

	</section>
</main>

<?php get_footer(); ?>
