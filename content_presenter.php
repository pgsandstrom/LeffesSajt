<?php
/**
 * Holds the a cloud or list (depending on screen size) of articles and tags.
 * @package innovation1000
 */
?>
<div class="container">
    <div class="mobile-menu col-xs-12 hidden-sm hidden-md hidden-lg">
        <div class="mobile-menu-archive col-xs-6 col-sm-6">
            <a href="<?php echo get_page_link( get_page_by_title( 'Arkiv' )->ID ); ?>">
                <span class="archive-text-long">BLÄDDRA I ARKIVET</span>
                <span class="archive-text-short">ARKIVET</span>
            </a>
        </div>
        <div class="mobile-menu-search col-xs-6 col-sm-6">
            <?php get_search_form(); ?>
        </div>
    </div>

    <div class="container-cloud-left col-md-6 col-sm-6 hidden-xs">
        <div class="cloud-left">
            <div class="cloud-titlebar cloud-title-left">
                <span class="cloud-title hidden-xs">Välj bland rubriker</span>
                <span class="cloud-title visible-xs">Rubriker</span>
                <span class="load-more load-more-pos hidden-sm hidden-xs">
                    <a href="javascript:void(0)" onclick="tusentips.shufflePosts();"> LADDA FLER</a>
                </span>
                <a class="load-more-pos hidden-md hidden-lg" href="javascript:void(0)"
                   onclick="tusentips.shufflePosts();">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/refresh.png"/>
                </a>
                <a class="menu-pos visible-xs" href="javascript:void(0)" onclick="tusentips.activatePostMenu();">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/menu.png"/>
                </a>
            </div>
            <div id="postList" class="cloud-body">
                <ul>
                    <?php print_all_posts(); ?>
                </ul>
                <a class="visible-xs" href="javascript:void(0)"
                   onclick="tusentips.shufflePosts();">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/refresh.png"/>
                </a>
            </div>
        </div>
    </div>

    <div class="container-cloud-right col-md-6 col-sm-6 hidden-xs">
        <div class="cloud-right">
            <div class="cloud-titlebar cloud-title-right">
                <span class="cloud-title hidden-xs">Välj bland ämnen</span>
                <span class="cloud-title visible-xs">Ämnen</span>
                <span class="load-more load-more-pos hidden-sm hidden-xs">
                    <a href="javascript:void(0)" onclick="tusentips.shuffleTags();">LADDA FLER</a>
                </span>
                <a class="load-more-pos hidden-md hidden-lg" href="javascript:void(0)"
                   onclick="tusentips.shuffleTags();">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/refresh.png"/>
                </a>
                <a class="menu-pos visible-xs" href="javascript:void(0)" onclick="tusentips.activateTagMenu();">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/menu.png"/>
                </a>
            </div>
            <div id="tagList" class="cloud-body">
                <ul>
                    <?php print_most_common_tags(); ?>
                </ul>
                <a class="visible-xs" href="javascript:void(0)"
                   onclick="tusentips.shuffleTags();">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/refresh.png"/>
                </a>
            </div>
        </div>
    </div>
</div>