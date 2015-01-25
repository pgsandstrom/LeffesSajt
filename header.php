<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package innovation1000
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!--    <link rel="stylesheet" href="-->
	<?php //bloginfo('template_directory'); ?><!--/css/bootstrap-theme.css" type="text/css"-->
	<!--          media="screen"/>-->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" type="text/css"
		  media="screen"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css" type="text/css"
		  media="screen"/>

	<link rel="shortcut icon"
		  href="<?php bloginfo('template_directory'); ?>/img/logo.png"/>

	<?php wp_head(); ?>

	<!-- analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-49829878-1', 'tusentips.se');
		ga('send', 'pageview');
	</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="" role="banner">

		<div id="mobile-header-container" class="col-xs-12 hidden-sm hidden-md hidden-lg">
			<div class="">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<img class="mobile-main-logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png"/>
				</a>

				<div class="mobile-site-title">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<div>TUSEN TIPS</div>
						<div>OM INNOVATION</div>
					</a>
				</div>
			</div>
		</div>

		<div class="site-header container hidden-xs">
			<div id="header-container">
				<img id="authors" src="<?php echo get_bloginfo('template_directory'); ?>/img/authors_wide.png"/>
				<nav id="site-navigation" class="" role="navigation">
					<?php //denna h1:an är ett mysteri, headern slutar funka utan den... ?>
					<h1 class="menu-toggle hide"><?php _e('Menu', 'innovation1000'); ?></h1>
					<a class="skip-link screen-reader-text"
					   href="#content"><?php _e('Skip to content', 'innovation1000'); ?></a>

					<div id="header-menu">
						<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
					</div>
				</nav>

				<div class="site-branding">

					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<img class="main-logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png"/>
					</a>

					<div class="site-title">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<div>TUSEN TIPS</div>
							<div>OM INNOVATION</div>
						</a>
					</div>

				</div>
			</div>
		</div>

	</header>
	<!-- #masthead -->

	<div id="content" class="site-content">
