<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package innovation1000
 */
?>
<div id="sidebar-left" class="widget-area sidebar-left col-md-3 col-sm-4 hidden-xs" role="complementary">

    <aside id="recent" class="widget">
        <h2 class="sidebar-title">MEST LÄSTA</h2>

        <ul class="sidebar-list">
            <?php if (function_exists('get_most_viewed')): ?>
                <?php get_most_viewed(); ?>
            <?php endif; ?>
        </ul>
    </aside>

    <aside id="recent" class="widget">
        <h2 class="sidebar-title">MEST KOMMENTERADE</h2>

        <ul class="sidebar-list">
            <?php
            most_commented_articles();
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

</div><!-- #sidebar-left -->
