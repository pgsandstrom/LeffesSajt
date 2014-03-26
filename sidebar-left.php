<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package innovation1000
 */
?>
<div id="sidebar-left" class="widget-area sidebar sidebar-left col-md-3 col-sm-4 hidden-xs" role="complementary">

    <aside id="recent" class="widget">
        <h2 class="sidebar-title">MEST LÄSTA</h2>
        <?php
        if (function_exists('wpp_get_mostpopular')) {
            wpp_get_mostpopular();
        }
        ?>
    </aside>

<!--    <aside id="recent" class="widget">-->
<!--        <h2 class="sidebar-title">MEST KOMMENTERADE</h2>-->
<!---->
<!--        <ul class="sidebar-body">-->
<!--            --><?php
//            print_most_commented_articles();
//            ?>
<!--        </ul>-->
<!--    </aside>-->

    <aside id="recent" class="widget">
        <h2 class="sidebar-title">ORDLISTOR</h2>

        <ul class="sidebar-body">
            <?php
            print_ordlista();
            ?>
        </ul>
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
