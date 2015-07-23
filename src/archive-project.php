<?php get_header(); ?>

	<div class="elevator">
		<div class="up-arrow">↑</div>
		<div class="elevator-items-list">
		</div>
		<div class="down-arrow">↓</div>
	</div>
	<main role="main">
	<!-- section -->
	<section >
		<?php $res_count = 0 ?>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-panel="<?php echo 'dp'.$res_count; ?>">
				
				
				<div class="legend">
					<div class="legend-line-1">
						<span class="lgd-numbering"><?php $res_count++; echo $res_count; ?></span><span class="lgd-title"><?php echo types_render_field("titre", array()) ?></span>
					</div>
					<div class="legend-line-2">
						<span class="lgd-commanditaire"><?php echo types_render_field( "commanditaire", array( ) ); ?></span>
					</div>
					<div class="legend-line-3">
						<span class="lgd-lieu"><?php echo types_render_field( "lieu", array( ) ); ?></span>, <span class="lgd-annee"><?php echo types_render_field("date", array("format" => "m.Y")) ?></span>
					</div>
				</div>
				
				
				<!--<?php echo types_render_field( "membres", array( ) ); ?>
				<?php the_category(); ?>
				<?php echo get_the_term_list( $post->ID, 'membre', '<h5>Membres</h5><ul><li>', '</li><li>', '</li></ul>' ); ?>
				<?php echo get_the_term_list( $post->ID, 'collaborateur', '<h5>Collaborateurs</h5><ul><li>', '</li><li>', '</li></ul>' ); ?>-->
	
			
				<div class="image-column ">
					<?php echo types_render_field( "images", array("width" => "1200", "height" => "1200", "proportional" => "true" ) ) ;?>
				</div>
				<div class="text-column">
					<div class="excerpt">
						<?php the_excerpt(); ?>
					</div>
					<div class="infos">
						<div>
						<span class="info-separator">&lt;Activités&gt;</span>
						<span class="info"><?php echo get_the_term_list( $post->ID, 'project-type', '', ', ', '' ); ?></span>
						</div>
						<div>
						<span class="info-separator">&lt;Équipe&gt;</span>
						<span class="info"><?php echo types_render_field( "equipe", array( ) ); ?></span>
						</div>
						<div>
						<span class="info-separator">&lt;Lieu&gt;</span>
						<span class="info"><?php echo types_render_field( "lieu", array( ) ); ?></span>
						</div>
						<div>
						<span class="info-separator">&lt;Annee&gt;</span>
						<span class="info"><?php echo types_render_field("date", array("format" => "Y")) ?></span>
						</div>
						<div>
						<span class="info-separator">&lt;Lien&gt;</span>
						<span class="info"><?php echo types_render_field("lien", array()) ?></span>. 
						</div>
					</div>
					<div class="legend"></div>
				</div>
				
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

