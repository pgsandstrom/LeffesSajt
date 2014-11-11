<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package innovation1000
 */
?>
<div id="sidebar-left" class="widget-area sidebar sidebar-left col-md-3 col-sm-4 hidden-xs" role="complementary">

    <aside id="search" class="widget widget_search">
        <?php get_search_form(); ?>
    </aside>

    <aside id="recent" class="widget">
        <h2 class="sidebar-title">MEST LÄSTA</h2>
        <?php
        if (function_exists('wpp_get_mostpopular')) {
            wpp_get_mostpopular("limit=5&post_type=post&stats_views=0&range=weekly");
        }
        ?>
    </aside>

    <!--    <aside id="recent" class="widget">-->
    <!--        <h2 class="sidebar-title">MEST KOMMENTERADE</h2>-->
    <!---->
    <!--        <ul class="sidebar-body">-->
    <!--            --><?php
    //            print_most_commented_articles();
    //
    ?>
    <!--        </ul>-->
    <!--    </aside>-->

    <aside id="recent" class="widget">
        <h2 class="sidebar-title">ORDLISTOR</h2>

        <ul class="sidebar-body">
            <?php
//            Only print these hardcoded articles if they exist:
            if (get_permalink(37)) : ?>
            <li><a href="<?php echo get_permalink(37); ?>"><?php echo get_the_title(37); ?></a></li>
            <?php endif ?>
            <?php if (get_permalink(41)) : ?>
            <li><a href="<?php echo get_permalink(41); ?>"><?php echo get_the_title(41); ?></a></li>
            <?php endif ?>
        </ul>
    </aside>

    <aside id="recent" class="">
        I SAMARBETE MED
        <a href="http://vinnova.se" target="_blank">
            <img id="vinnova" src="<?php echo get_bloginfo('template_directory'); ?>/img/vinnova_logo.jpg"/>
        </a>
    </aside>


    <!--    <aside id="meta" class="widget">-->
    <!--        <h2 class="sidebar-title">META</h2>-->
    <!--        <ul class="sidebar-body">-->
    <!--            --><?php //wp_register(); ?>
    <!--    <li>--><?php //wp_loginout(); ?><!--</li>-->
    <!--    --><?php //wp_meta(); ?>
    <!--        </ul>-->
    <!--    </aside>-->

</div><!-- #sidebar-left -->
