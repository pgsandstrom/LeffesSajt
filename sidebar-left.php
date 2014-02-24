<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package test123123
 */
?>
<div id="secondary" class="widget-area sidebar-left col-md-3 col-sm-4 hidden-xs" role="complementary">

    <aside id="search" class="widget widget_search">
        <?php get_search_form(); ?>
    </aside>

    <aside id="recent" class="widget">
        <h2 class="sidebar-title">MEST LÄSTA</h2>
        <ul class="sidebar-text">
            <li><a href="http://localhost/wordpress/?p=26" title="Look Artikel 2">Todo 1</a></li>
            <li><a href="http://localhost/wordpress/?p=6" title="Look lorem ipsum">Todo 2</a></li>
        </ul>
    </aside>

    <aside id="recent" class="widget">
        <h2 class="sidebar-title">SENAST TILLAGDA</h2>
        <ul class="sidebar-text">
            <?php
            //            visa senaste publicerade artiklar:
            $args = array('numberposts' => '5', 'category' => get_cat_ID('artiklar'));
            $recent_posts = wp_get_recent_posts($args);
            foreach ($recent_posts as $recent) {
                echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look ' . esc_attr($recent["post_title"]) . '" >' . $recent["post_title"] . '</a> </li> ';
            }
            ?>
        </ul>
    </aside>

    <aside id="meta" class="widget">
        <h2 class="sidebar-title">META</h2>
        <ul>
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <?php wp_meta(); ?>
        </ul>
    </aside>

</div><!-- #secondary -->
