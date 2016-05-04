<?php /* Template Name: About Page Template */ get_header(); ?>

	<main role="main">

		<section class="about">
			<section class="cartouche">
				<div class="first-block">
					<div id="about_1"> Atelier de dispositifs numériques </div>
					<div id="about_2"> 234 avenue Felix Faure 69003 Lyon </div>
				</div>
				<div class="second-block">
					<div id="about_3">&lt;m.&gt; bonjour@hemisphere-project.com</div>
					<div id="about_4">&lt;t.&gt; [0033]6 59 18 50 01</div>
				</div>

			</section>
			<section class="about-content">
				<div class="text-column">
					<div id="about_text_scroll">
						<div class="about-title">presentation:</div>
						<div class="presentation-text"><?php echo types_render_field( "presentation", array( ) ); ?></div>
						<div class="about-title">acteurs:</div>
						<div class="acteurs-text"><?php echo types_render_field( "acteurs", array( ) ); ?></div>
						<!-- <div class="about-title">atelier:</div>
						<div class="atelier-text"><?php echo types_render_field( "atelier_presentation", array( ) ); ?></div> -->
						<div class="about-title">credits:</div>
						<div class="credits-text"><?php echo types_render_field( "credits", array( ) ); ?></div>
					</div>
				</div>
				<!-- <div class="images-column">
					<?php echo types_render_field( "about_images", array("width" => "1200", "height" => "1200", "proportional" => "true" ) ) ;?>
				</div> -->

			</section>
		</section>
	</main>

	<?php get_footer(); ?>
