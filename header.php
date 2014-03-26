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
          href="<?php bloginfo('template_directory'); ?>/favicon.png"/>


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

    <header id="masthead" class="site-header container" role="banner">

        <div id="header-container">

            <img id="authors" src="<?php echo get_bloginfo('template_directory'); ?>/img/authors_wide.png"/>

            <nav id="site-navigation" class="" role="navigation">
                <?php //denna h1:an är ett mysteri, headern slutar funka utan den... ?>
                <h1 class="menu-toggle hide"><?php _e('Menu', 'innovation1000'); ?></h1>
                <a class="skip-link screen-reader-text"
                   href="#content"><?php _e('Skip to content', 'innovation1000'); ?></a>

                <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </nav>

            <div class="site-branding">

                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img id="logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png"/>
                </a>

                <div class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <div>TUSEN TIPS</div>
                        <div>OM INNOVATION</div>
                    </a>
                </div>

            </div>

        </div>

    </header>
    <!-- #masthead -->

    <div id="content" class="site-content">
