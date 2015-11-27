<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>
		<?php $res_count = 0 ?>



		<?php if (have_posts()): while (have_posts()) : the_post();?>


			<!-- article -->
			<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-panel="<?php echo 'dp'.$res_count; ?>"> -->
			<article id="<?php echo $post->post_name; ?>" <?php post_class(); ?> data-panel="<?php echo 'dp'.$res_count; ?>">

				<div class="legend">
					<div class="legend-line-1">
						<span class="lgd-numbering"><?php $res_count++; echo $res_count; ?></span> — <span class="lgd-title"><?php echo types_render_field("titre", array()) ?></span>
					</div>
					<div class="legend-line-2">
						<span class="lgd-commanditaire"><?php echo types_render_field( "commanditaire", array( ) ); ?></span>
					</div>
					<div class="legend-line-3">
						<span class="lgd-lieu"><?php echo types_render_field( "lieu", array( ) ); ?> ,</span> <span class="lgd-annee"><?php echo types_render_field("date", array("format" => "m.Y")) ?></span>
					</div>
				</div>

				<div class="image-column ">
					<div class="image-container ">
						<?php echo types_render_field( "images", array("width" => "1200", "height" => "1200", "proportional" => "true" ) ) ;?>
					</div>
				</div>
				<div class="text-column">
					<div class="excerpt">
						<!--<?php the_excerpt(); ?>-->
						<?php the_content(); ?>
					</div>
					<div class="infos">
						<div>
						<span class="info-separator">&lt;Domaine&gt;</span>
						<h2 class="info"><?php echo get_the_term_list( $post->ID, 'category', '', ', ', '' ); ?></h2>
						</div>
						<div>
						<span class="info-separator">&lt;Type&gt;</span>
						<h2 class="info"><?php echo get_the_term_list( $post->ID, 'project-type', '', ', ', '' ); ?></h2>
						</div>
						<br>
						<div>
						<span class="info-separator">&lt;Équipe&gt;</span>
						<!-- <span class="info"><?php echo types_render_field( "equipe", array( ) ); ?> </span> -->
							<?php
								$str = types_render_field( "equipe", array( ) );
								$arr = explode(",", $str);
								$numItems = count($arr);
								$i = 0;
								foreach($arr as $val) {
									++$i;
									if($i != $numItems) { echo $val.',<br>';}
								  if($i === $numItems) { echo $val;}
								}
							?>
						</div>
						<div>
						<br>
						<span class="info-separator">&lt;Lieu&gt;</span>
						<h3 class="info"><?php echo types_render_field( "lieu", array( ) ); ?></h3>
						</div>
						<div>
						<span class="info-separator">&lt;Annee&gt;</span>
						<span class="info"><?php echo types_render_field("date", array("format" => "Y")) ?></span>
						</div>
						<div>
						<!-- <span class="info-separator">&lt;Lien&gt;</span> -->
						<?php $lien = types_render_field("lien", array(target => "_blank"));
						if ($lien) echo '<span class="info-separator">&lt;Lien&gt;</span>'; ?>
						<span class="info"><?php echo types_render_field("lien", array(target => "_blank")) ?></span>
						</div>
					</div>
					<div class="legend"></div>
				</div>
				<br><br><br><br><br><br><br><br>
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


		<?php get_template_part('pagination'); ?>

	</section>
	<!-- /section -->
	</main>
