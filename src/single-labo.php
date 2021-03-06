<?php get_header(); ?>
	<main role="main">
		<!-- section -->
		<section class="labo">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- post title -->
				<div class="labo-title labol1">
					<a href="" onclick="return false;"><?php echo types_render_field( "titre", array( ) ).', '; ?></span></a>
				</div>
				<div class="labo-title labol2">
					<a href="" onclick="return false;"><?php echo types_render_field( "sous-titre", array( ) ); ?> </a>
				</div>

				<?php the_content();?>

				<div class="labo-single-sub-title">
					<span class="whitelab">&lt;Type&gt;</span>
					<span><?php echo get_the_term_list( $post->ID, 'type-labo', '', ', ', '' ); ?></span>
					<!-- <span><?php echo strip_tags ( get_the_term_list( get_the_ID(), 'type-labo', "",", " ) ); ?></span> -->
					<br>
					<span class="whitelab">&lt;Equipe&gt;</span>
					<span class="equipe"><?php echo types_render_field( "equipe", array( ) ); ?></span>
					<br>
					<span class="whitelab">&lt;Date&gt;</span>
					<span class="date"><?php echo types_render_field( "date", array("format" => "m.Y") ); ?></span>
				</div>

			</article>

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
	</main>
