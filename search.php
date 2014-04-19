<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package innovation1000
 */

get_header(); ?>

<div class="container">
    <div class="container-cloud-left col-md-6 col-sm-6 col-xs-6">
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
                <a class="load-more-pos-below visible-xs" href="javascript:void(0)"
                   onclick="tusentips.shufflePosts();">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/refresh.png"/>
                </a>
            </div>
        </div>
    </div>

    <div class="container-cloud-right col-md-6 col-sm-6 col-xs-6">
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
                <a class="load-more-pos-below visible-xs" href="javascript:void(0)"
                   onclick="tusentips.shuffleTags();">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/refresh.png"/>
                </a>
            </div>
        </div>
    </div>
</div>

<hr class="mobile-separator visible-xs">

<div id="primary" class="container content-area">
    <?php get_sidebar('left'); ?>
    <main id="main" class="site-main col-md-6 col-sm-8 col-xs-12" role="main">

        <?php if (have_posts()) : ?>

            <header class="page-header">
                <h1 class="page-title"><?php printf(__('Search Results for: %s', 'innovation1000'), '<span>' . get_search_query() . '</span>'); ?></h1>
            </header><!-- .page-header -->

            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('content', 'search'); ?>

            <?php endwhile; ?>

            <?php innovation1000_paging_nav(); ?>

        <?php else : ?>

            <?php get_template_part('content', 'none'); ?>

        <?php endif; ?>

    </main>
    <!-- #main -->
    <?php get_sidebar('right'); ?>
</div><!-- #primary -->

<?php get_footer(); ?>
