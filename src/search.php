

<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="search-section">
		
			<div class="search-header">
				<span class="votre-recherche">
					Votre Recherche : 
				</span>
				
				<span class="search-form">
					<?php get_template_part('searchform'); ?>
				</span>
				<hr>
			</div>
			<div class="search-results">
				<h1><?php if($wp_query->found_posts == 0) : echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); endif; ?></h1>
				<div class="search-results-columns">
					<?php get_template_part('search-loop'); ?>
					<?php get_template_part('pagination'); ?>
				</div>
			</div>
			
		</section>
		<!-- /section -->
	</main>

