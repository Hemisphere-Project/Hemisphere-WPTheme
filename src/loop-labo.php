<!-- section -->
<section class="labo">

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


		<!-- post title -->
		<div class="labo-title">
			<a href="<?php the_permalink(); ?>"><?php echo types_render_field( "titre", array( ) ); ?></span></a>
		</div>
		<div class="labo-sub-title">

			<span class="date"><?php echo types_render_field( "date", array( ) ); ?></span>
			<span>&lt;Type&gt;</span>
			<span><?php echo get_the_term_list( $post->ID, 'type-labo', '', ', ', '' ); ?></span>
			<span>&lt;Equipe&gt;</span>
			<span class="equipe"><?php echo types_render_field( "equipe", array( ) ); ?></span>
		</div>
		<!-- /post title -->

		<!-- post details -->
		<!-- /post details -->

		<?php the_content(); // Dynamic Content ?>

		<div class="info"></div>
	</article>
	<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

	<!-- article -->
	<article>

		<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

	</article>
	<!-- /article -->

<?php endif; ?>

</section>
<!-- /section -->
