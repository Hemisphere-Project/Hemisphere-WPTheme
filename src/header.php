<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="google-site-verification" content="x-Z4oipOTSwzThUwjKdxRTYtzJ46C7daSP9Mpj95DQE" />
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- <meta name="description" content="<?php bloginfo('description'); ?>"> -->

		<?php wp_head(); ?>

		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });


        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<div class="header-pack">

						<?php if(is_page('hemisphere')) : ?>

						<div class="element" ><a class="current" href="<?php echo get_permalink( get_page_by_path( 'hemisphere' ) )."#start";?>">Hémisphère__</a></div>
						<div class="element" ><a href="<?php echo get_post_type_archive_link('project'); ?>">Réalisations__</a></div>
						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'repertoire' ) );?>">Répertoire__</a></div>
						<div class="element" ><a href="<?php echo get_post_type_archive_link('labo'); ?>">Laboratoire__</a></div>
						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'a-propos' ) );?>">À propos__</a></div>

						<?php elseif(is_post_type_archive('project')) : ?>

						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'hemisphere' ) )."#start";?>">Hémisphère__</a></div>
						<div class="element" ><a class="current" href="<?php echo get_post_type_archive_link('project'); ?>">Réalisations__</a></div>
						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'repertoire' ) );?>">Répertoire__</a></div>
						<div class="element" ><a href="<?php echo get_post_type_archive_link('labo'); ?>">Laboratoire__</a></div>
						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'a-propos' ) );?>">À propos__</a></div>

					<?php elseif(is_post_type_archive('labo')||is_singular('labo') ) : ?>

						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'hemisphere' ) )."#start";?>">Hémisphère__</a></div>
						<div class="element" ><a href="<?php echo get_post_type_archive_link('project'); ?>">Réalisations__</a></div>
						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'repertoire' ) );?>">Répertoire__</a></div>
						<div class="element" ><a class="current" href="<?php echo get_post_type_archive_link('labo'); ?>">Laboratoire__</a></div>
						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'a-propos' ) );?>">À propos__</a></div>

						<?php elseif(is_page('repertoire')) : ?>

						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'hemisphere' ) )."#start";?>">Hémisphère__</a></div>
						<div class="element" ><a href="<?php echo get_post_type_archive_link('project'); ?>">Réalisations__</a></div>
						<div class="element" ><a class="current" href="<?php echo get_permalink( get_page_by_path( 'repertoire' ) );?>">Répertoire__</a></div>
						<div class="element" ><a href="<?php echo get_post_type_archive_link('labo'); ?>">Laboratoire__</a></div>
						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'a-propos' ) );?>">À propos__</a></div>

						<?php elseif(is_page('a-propos')) : ?>

						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'hemisphere' ) )."#start";?>">Hémisphère__</a></div>
						<div class="element" ><a href="<?php echo get_post_type_archive_link('project'); ?>">Réalisations__</a></div>
						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'repertoire' ) );?>">Répertoire__</a></div>
						<div class="element" ><a href="<?php echo get_post_type_archive_link('labo'); ?>">Laboratoire__</a></div>
						<div class="element" ><a class="current" href="<?php echo get_permalink( get_page_by_path( 'a-propos' ) );?>">À propos__</a></div>

						<?php else: ?>

						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'hemisphere' ) )."#start";?>">Hémisphère__</a></div>
						<div class="element" ><a href="<?php echo get_post_type_archive_link('project'); ?>">Réalisations__</a></div>
						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'repertoire' ) );?>">Répertoire__</a></div>
						<div class="element" ><a href="<?php echo get_post_type_archive_link('labo'); ?>">Laboratoire__</a></div>
						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'a-propos' ) );?>">À propos__</a></div>

						<?php endif;?>



						<div class="element" >
							<form class="search" method="get" action="<?php echo home_url(); ?>" role="search"  autocomplete="off">
								<input class="search-input" type="search" name="s" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Rechercher'" placeholder="Rechercher">
							</form>
						</div>

					</div>




			</header>
