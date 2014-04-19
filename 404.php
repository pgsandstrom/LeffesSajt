<?php
/**
 * The template for displaying 404 pages (Not Found).
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

    <div id="primary" class="container">

        <?php get_sidebar('left'); ?>

        <main id="main" class="site-main col-md-6 col-sm-8 col-xs-12" role="main">

            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 class="page-title">Artikeln kunde inte hittas</h1>
                </header>
                <!-- .page-header -->

                <div class="page-content">
                    <p>Felet kan bero på att du skrivit in fel adress i webbläsaren eller att sidan tagits bort.</p>

                    <p>Om du tror att felet beror på ett misstag från vår sida, kontakta oss på leif.denti@gu.se</p>

                </div>
                <!-- .page-content -->
            </section>
            <!-- .error-404 -->

        </main>
        <!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>