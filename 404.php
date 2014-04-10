<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package innovation1000
 */

get_header(); ?>

    <div class="container">

        <div class="container-cloud-left col-md-6 col-sm-6 hidden-xs">
            <div class="cloud-left">
                <div class="cloud-titlebar cloud-title-left">
                    <span class="cloud-title">Välj bland rubriker</span>
                    <span class="load-more"><a href="javascript:void(0)" onclick="tusentips.shufflePosts();">LADDA FLER</a></span>
                </div>
                <ul id="postList" class="cloud-body cloud-body-left">
                    <?php print_all_posts(); ?>
                </ul>

            </div>
        </div>

        <div class="container-cloud-right col-md-6 col-sm-6 hidden-xs">
            <div class="cloud-right">
                <div class="cloud-titlebar cloud-title-right">
                    <span class="cloud-title">Välj bland ämnen</span>
                    <span class="load-more"><a href="javascript:void(0)" onclick="tusentips.shuffleTags();">LADDA FLER</a></span>
                </div>
                <ul id="tagList" class="cloud-body cloud-body-right">
                    <?php print_most_common_tags(); ?>
                </ul>
            </div>
        </div>
    </div>

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