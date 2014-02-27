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
            //            Vanligaste taggarna senaste 30 dagarna. Se:
            //             http://wordpress.stackexchange.com/questions/48557/display-list-of-most-used-tags-in-the-last-30-days
            global $wpdb;
            $term_ids = $wpdb->get_col("
    SELECT term_id FROM $wpdb->term_taxonomy
    INNER JOIN $wpdb->term_relationships ON $wpdb->term_taxonomy.term_taxonomy_id=$wpdb->term_relationships.term_taxonomy_id
    INNER JOIN $wpdb->posts ON $wpdb->posts.ID = $wpdb->term_relationships.object_id
    WHERE DATE_SUB(CURDATE(), INTERVAL 30 DAY) <= $wpdb->posts.post_date");

            if (count($term_ids) > 0) {

                $tags = get_tags(array(
                    'orderby' => 'count',
                    'order' => 'DESC',
                    'number' => 28,
                    'include' => $term_ids,
                ));
                echo '<ul class="tag-list">';
                $first = true;
                foreach ((array)$tags as $tag) {
                    if ($first) {
                        $first = false;
                    } else {
                        echo '<div class="tag-list-separator"></div>';
                    }
                    echo '<li class="tag-list-item"><a href="' . get_tag_link($tag->term_id) . '" rel="tag">' . $tag->name . '</a></li>';
                }
                echo '</ul>';
            }
            ?>
        </div>

    </header>
    <!-- #masthead -->

    <div id="content" class="site-content">
