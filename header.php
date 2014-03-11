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

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

    <header id="masthead" class="site-header container " role="banner">
        <div class="site-branding">
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png"/>
                </a>
            </h1>
        </div>

        <nav id="site-navigation" class="" role="navigation">
            <h1 class="menu-toggle"><?php _e('Menu', 'innovation1000'); ?></h1>
            <a class="skip-link screen-reader-text"
               href="#content"><?php _e('Skip to content', 'innovation1000'); ?></a>

            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
        <!-- #site-navigation -->

        <br style="clear:both"/>

        <div id="tag list">
            <?php $wpdb->show_errors(); ?>
            <?php
            most_common_tags_in_last_days();
            ?>
        </div>

    </header>
    <!-- #masthead -->

    <div id="content" class="site-content">
