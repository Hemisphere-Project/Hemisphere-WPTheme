<?php /* Template Name: Repertoire Page Template */ get_header(); ?>

	<main role="main">

		<section class="repertoireSection">
			<div class="fixed-table-container">
				<div class="header-background"> </div>
				<div class="fixed-table-container-inner">
					<table class="repertoire-table">
						<thead>
							<tr>
								<th><div class="th-inner repertoireDate">Date</div></th>
								<th><div class="th-inner repertoireTitle">Titre</div></th>
								<th><div class="th-inner repertoirePlace">Lieu</div></th>
								<th><div class="th-inner repertoireType">Type</div></th>
								<th><div class="th-inner repertoireTeam">Equipe</div></th>
								<th><div class="th-inner repertoireDomain">Domaine</div></th>
							</tr>
						</thead>
						<tbody>

							<?php
								// $args = array( 'post_type' => 'project', 'posts_per_page' => 20 );
								$args = array( 'post_type' => 'project',
												'posts_per_page' => 20,
												'orderby'   => 'meta_value',
												'meta_key'  => 'wpcf-date',
												'order'   => 'DESC');

								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<tr>
									<td>
										<?php echo types_render_field("date", array("format" => "m.Y")) ?>
									</td>
									<td>
										<!-- <a href="<?php echo get_post_type_archive_link('project').'#post-'.get_the_ID(); ?>" ><?php the_title(); ?></a> -->
										<a href="<?php echo get_post_type_archive_link('project').'#'.$post->post_name ?>" ><?php the_title(); ?></a>
									</td>
									<td>
										<?php echo types_render_field( "lieu", array( ) ); ?>
									</td>
									<td>
										<?php echo get_the_term_list( $post->ID, 'project-type', '', ', ', '' ); ?>
									</td>
									<td>
										<?php
										echo get_the_term_list( $post->ID, 'membre', '', ', ', '' ) ;
										if ($coll = get_the_term_list( $post->ID, 'collaborateur', '', ', ', '' ) ) echo ', ';?>
										<br><br>
										<?php
										echo get_the_term_list( $post->ID, 'collaborateur', '', ', ', '' ); ?>
									</td>
									<td>
										<?php echo get_the_term_list( $post->ID, 'category', '', ', ', '' ); ?>
										<!-- <?php
											foreach((get_the_category()) as $category) {
												echo $category->cat_name . ' ';
											}
										?> -->
									</td>
								</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</main>
	<?php get_footer(); ?>
