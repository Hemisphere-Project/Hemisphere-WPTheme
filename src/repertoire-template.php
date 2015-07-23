<?php /* Template Name: Repertoire Page Template */ get_header(); ?>

	<main role="main">
	
		<section class="repertoire">
			<div class="fixed-table-container">
				<div class="header-background"> </div>
				<div class="fixed-table-container-inner">
					<table class="repertoire-table">
						<thead>
							<tr>
								<th><div class="th-inner">Date</div></th>
								<th><div class="th-inner">Titre</div></th>
								<th><div class="th-inner">Lieu</div></th>
								<th><div class="th-inner">Type</div></th>
								<th><div class="th-inner">Equipe</div></th>
								<th><div class="th-inner">Catégorie</div></th>
							</tr>
						</thead>
						<tbody>
				
							<?php 
								$args = array( 'post_type' => 'project', 'posts_per_page' => 20 );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<tr>
									<td>
										<?php echo types_render_field("date", array("format" => "d.m.Y")) ?>
									</td>
									<td>
										<?php echo types_render_field("titre", array()) ?>
									</td>
									<td>
										<?php echo types_render_field( "lieu", array( ) ); ?>
									</td>
									<td>
										<?php echo get_the_term_list( $post->ID, 'project-type', '', ', ', '' ); ?>
									</td>
									<td>
										<?php echo get_the_term_list( $post->ID, 'membre', '', ', ', '' ); ?>
										<?php echo get_the_term_list( $post->ID, 'collaborateur', '', ', ', '' ); ?>
									</td>
									<td>
										<?php
											foreach((get_the_category()) as $category) {
												echo $category->cat_name . ' ';
											}
										?>
									</td>
								</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</main>


