<?php /* Template Name: About Page Template */ get_header(); ?>

	<main role="main">

		<section class="about">
			<section class="cartouche">
				<div class="first-block">
					<div> Atelier de dispositifs numériques </div>
					<div> 234 avenue Felix Faure 69003 Lyon </div>
				</div>
				<div class="second-block">
					<div>&lt;m.&gt; bonjour@hemisphere-project.com</div>
					<div>&lt;t.&gt; [0033] 682 984 800</div>
				</div>

			</section>
			<section class="about-content">
				<div class="text-column">
					<div id="about_text_scroll">
						<div class="about-title">presentation:</div>
						<div class="presentation-text"><?php echo types_render_field( "presentation", array( ) ); ?></div>
						<div class="about-title">acteurs:</div>
						<div class="acteurs-text"><?php echo types_render_field( "acteurs", array( ) ); ?></div>
						<!-- <div class="about-title">newsletter :</div>
						<div class="newsletter-text"></div> -->
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
