<article id="post-<?php the_ID(); ?>" <?php post_class("loaded"); ?>>

	<div class="labo-title">
		<!-- <a href="<?php the_permalink(); ?>"><?php echo types_render_field( "titre", array( ) ); ?></span></a> -->
		<a href="<?php the_permalink(); ?>"><?php the_title();?></span></a>
	</div>
	<div class="labo-sub-title">
		<span><?php echo types_render_field( "titre", array( ) ); ?> </span>
		<br>
		<span>&lt;Type&gt;</span>
		<span><?php echo get_the_term_list( $post->ID, 'type-labo', '', ', ', '' ); ?></span>
		<br>
		<span>&lt;Equipe&gt;</span>
		<span class="equipe"><?php echo types_render_field( "equipe", array( ) ); ?></span>
		,
		<span class="date"><?php echo types_render_field( "date", array("format" => "m.Y") ); ?></span>
	</div>

	<div class="labo-content"><!--<?php the_content();?>--></div>

</article>
