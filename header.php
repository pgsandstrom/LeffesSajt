<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package test123123
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

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">

            <!--            bloggens namn:-->
            <?php //bloginfo('name'); ?>


            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                      rel="home">
                    <img src="<?php echo get_bloginfo('template_directory');?>/img/logo.png"/>

                                      </a></h1>

            <h2 class="site-description"><?php bloginfo('description'); ?></h2>
        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <h1 class="menu-toggle"><?php _e('Menu', 'test123123'); ?></h1>
            <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'test123123'); ?></a>

            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
        <!-- #site-navigation -->
    </header>
    <!-- #masthead -->

    <div id="content" class="site-content">
