<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

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

					<!-- logo -->
					<div class="header-pack">
<!--						<div class="main-title">
						<a href="<?php echo home_url(); ?>">
							Hemisphere,<br>
							Atelier de dispositifs numériques
						</a>
						</div>
						<div class="address">
						<a href="http://maps.google.com/?q=234%20avenue%20Felix%Faure%Lyon">
							234 avenue Felix Faure 69003 Lyon
						</a>
						</div>
						<div class="email">
						<a  href="mailto:bonjour@hemisphere-project.com">
							bonjour@hemisphere-project.com
						</a>
						</div>
						<div class="tel">
						<a  href="tel:+33682984802">
							[0033] 682 984 800
						</a>
						</div>-->
						<div class="element" ><a class="current" href="<?php echo get_post_type_archive_link('project'); ?>">Réalisations__</a></div>
						<div class="element" ><a href="<?php echo get_permalink( get_page_by_path( 'repertoire' ) );?>">Répertoire__</a></div>
						<div class="element" ><a  href="<?php echo get_permalink( get_page_by_path( 'hemisphere' ) );?>">Hémisphère__</a></div>
						<div class="element" ><a href="#">Laboratoire__</a></div>
						<div class="element" ><a href="#">À propos__</a></div>
						<div class="element" ><a href="<?php echo get_search_link(''); ?>">Rechercher</a></div>

					</div>
					
					
					<!-- /logo -->

					<!-- nav -->
					<!--<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>-->
					<!-- /nav -->

			</header>
			<!-- /header -->
