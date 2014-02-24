<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package test123123
 */
?>
<div id="secondary" class="widget-area sidebar-left col-md-3 col-sm-4 hidden-xs" role="complementary">
    LEFT SIDEBAR

    sök:
    <aside id="search" class="widget widget_search">
        <?php get_search_form(); ?>
    </aside>

    <aside id="recent" class="widget">
        <h2>SENAST TILLAGDA</h2>
        <ul>
            <?php
//            visa senaste publicerade artiklar:
            $args = array( 'numberposts' => '5', 'category' => get_cat_ID( 'artiklar' ) );
            $recent_posts = wp_get_recent_posts( $args );
            foreach( $recent_posts as $recent ){
                echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
            }
            ?>
        </ul>
    </aside>

    <aside id="archives" class="widget">
        <h1 class="widget-title"><?php _e('afd', 'test123123'); ?></h1>
        <ul>
            <?php wp_get_archives(array('type' => 'monthly')); ?>
        </ul>
    </aside>

    <aside id="meta" class="widget">
        <h1 class="widget-title"><?php _e('Meta', 'test123123'); ?></h1>
        <ul>
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <?php wp_meta(); ?>
        </ul>
    </aside>

</div><!-- #secondary -->
