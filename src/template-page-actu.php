<?php /* Template Name: Actu Page Template */ get_header(); ?>
<?php $width_sequence = [0=>"3",1=>"4",2=>"4",3=>"3",4=>"3",5=>"3",6=>"4",7=>"3",]; $width_sequence_length = count($width_sequence);?>
<?php $margin_top_sequence = [0=>"1",1=>"2",2=>"1",3=>"1",4=>"2",5=>"1",6=>"2",7=>"1",]; $margin_top_sequence_length = count($margin_top_sequence);?>


<script>
	document.body.className += ' hidden';
</script>

<section id="introSection" class="intro">
	<div class="intro-block1">
		<div class="intro-block1-l1">Hémisphère,</div>
		<div class="intro-block1-l2">Atelier de dispositifs numériques</div>
		<!-- <div class="intro-block1-l3">234 avenue Felix Faure 69003 Lyon</div> -->
	</div>
</div>
<section id="introSpacer" class="intro">
	<!-- <div class="intro-block2">
		<div>&lt;m.&gt; bonjour@hemisphere-project.com</div>
		<div>&lt;t.&gt; [0033] 682 984 800</div>
	</div> -->
</section>


<div class="legend">
	<div class="legend-line-1">
		<span class="lgd-numbering"></span><span class="lgd-dash"> — </span><span class="lgd-title"></span>
	</div>
	<div class="legend-line-2">
		<span class="lgd-commanditaire"></span>
	</div>
	<div class="legend-line-3">
		<span class="lgd-lieu"></span> <span class="lgd-annee"></span>
	</div>
</div>

<main id="start" role="main">

	<!-- section -->
	<section class="projects row">
	<?php
		$args = array( 'post_type' => 'project',
						'posts_per_page' => 20,
						'orderby'   => 'meta_value',
						'meta_key'  => 'wpcf-date',
						'order'   => 'ASC');
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>

	<div id="<?php the_title(); ?>" class="project-<?php the_ID(); ?> project-item col-<?php $cnt = $loop->current_post;echo $width_sequence[($cnt % $width_sequence_length)]?>-10 top-margin-<?php $cnt = $loop->current_post;echo $margin_top_sequence[($cnt % $margin_top_sequence_length)]?>">

		<div class="cover-image">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<!--<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">-->
				<a href="<?php echo get_post_type_archive_link('project').'#post-'.get_the_ID(); ?>" >
					<?php the_post_thumbnail("large"); // Declare pixel size you need inside the array ?>
					<div class="noise"></div>
				</a>

			<?php endif; ?>
		</div>

		<div class="numbering"><?php echo $cnt+1; ?></div>

		<!-- hidden fields -->
		<h1 class="title hidden"><?php echo types_render_field( "titre", array( ) ); ?></h1>
		<div class="commanditaire hidden"><?php echo types_render_field( "commanditaire", array( ) ); ?></div>
		<div class="lieu hidden"><?php echo types_render_field( "lieu", array( ) ); ?></div>
		<div class="date hidden"><?php echo types_render_field("date", array("format" => "m.Y")) ?></div>
		<!-- /hidden fields -->

	</div>

	<?php endwhile; ?>
	</section>
	<!-- /section -->
</main>
