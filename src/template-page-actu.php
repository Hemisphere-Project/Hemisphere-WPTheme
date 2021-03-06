<?php /* Template Name: Actu Page Template */ get_header(); ?>
<?php $width_sequence = [0=>"3",1=>"4",2=>"4",3=>"3",4=>"3",5=>"3",6=>"4",7=>"3",]; $width_sequence_length = count($width_sequence);?>
<?php $margin_top_sequence = [0=>"1",1=>"2",2=>"1",3=>"1",4=>"2",5=>"1",6=>"2",7=>"1",]; $margin_top_sequence_length = count($margin_top_sequence);?>


<script>
	document.body.className += ' hidden';
</script>

<section id="introSection" class="intro">
	<div class="intro-block1">
		<div id="introL1" class="intro-block1-l1"></div>
		<div id="introL2" class="intro-block1-l2"></div>
	</div>
</section>
<section id="introSpacer" class="intro">
	<!-- <div class="intro-block2">
		<div>&lt;m.&gt; bonjour@hemisphere-project.com</div>
		<div>&lt;t.&gt; [0033] 682 984 800</div>
	</div> -->
</section>


<!-- <div class="legend">
	<div class="legend-line-1">
		<span class="lgd-numbering"></span><span class="lgd-dash">  </span><span class="lgd-title"></span>
	</div>
	<div class="legend-line-2">
		<span class="lgd-commanditaire"></span>
	</div>
	<div class="legend-line-3">
		<span class="lgd-lieu"></span> <span class="lgd-annee"></span>
	</div>
</div> -->

<main id="start" role="main">

	<!-- section -->
	<section class="projects row">
	<?php
		$args = array( 'post_type' => 'project',
						'posts_per_page' => 20,
						'orderby'   => 'meta_value',
						'meta_key'  => 'wpcf-date',
						'order'   => 'DESC');
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<div id="<?php the_title(); ?>" class="project-<?php the_ID(); ?> project-item col-<?php $cnt = $loop->current_post;echo $width_sequence[($cnt % $width_sequence_length)]?>-10 top-margin-<?php $cnt = $loop->current_post;echo $margin_top_sequence[($cnt % $margin_top_sequence_length)]?>">

		<div class="container">
			<div class="cover-image">
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<!-- <a href="<?php echo get_post_type_archive_link('project').'#post-'.get_the_ID(); ?>" > -->
						<a href="<?php echo get_post_type_archive_link('project').'#'.$post->post_name ?>" >
						<?php the_post_thumbnail("large"); // Declare pixel size you need inside the array ?>
						<div class="noise"></div>
					</a>
				<?php endif; ?>
			</div>
		</div>

		<!-- <div class="numbering"><?php echo $cnt+1; ?></div>
		<h2 class="title hidden"><?php echo types_render_field( "titre", array( ) ); ?></h2>
		<div class="commanditaire hidden"><?php echo types_render_field( "commanditaire", array( ) ); ?></div>
		<div class="lieu hidden"><?php echo types_render_field( "lieu", array( ) ); ?></div>
		<div class="date hidden"><?php echo types_render_field("date", array("format" => "m.Y")) ?></div> -->

		<div class="little_legend">
			<div class="little_num"><?php echo '<'.($cnt+1).'> '; ?></div>
			<div class="little_title"><?php echo types_render_field( "titre", array( ) ); ?></div>
		</div>

		<div class="mobile_little_legend">
			<div class="little_num"><?php echo '<'.($cnt+1).'> '; ?></div>
			<div class="little_title"><?php echo types_render_field( "titre", array( ) ); ?></div><br>
			<div class="commanditaire"><?php echo types_render_field( "commanditaire", array( ) ); ?></div>
			<div class="lieu"><?php echo types_render_field( "lieu", array( ) ); ?>, <?php echo types_render_field("date", array("format" => "m.Y")) ?></div>
		</div>




	</div>

	<?php endwhile; ?>
	</section>
	<!-- /section -->
</main>
<?php get_footer(); ?>
