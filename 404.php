<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package innovation1000
 */

get_header(); ?>

    <div class="container">

        <div class="container-cloud-left col-md-6">
            <div class="cloud-left">
                <div class="cloud-title cloud-title-left">
                    Rubriker
                </div>
                <ul class="cloud-body cloud-body-left">
                    <?php latest_published_articles(); ?>
                </ul>
            </div>
        </div>

        <div class="container-cloud-right col-md-6">
            <div class="cloud-right">
                <div class="cloud-title cloud-title-right">
                    Ämnen
                </div>
                <ul class="cloud-body cloud-body-right">
                    <?php most_common_tags(); ?>
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

                    <p>Om du tror att felet beror på ett misstag från vår sida, kontakta oss på TODO@TODO.com</p>

                </div>
                <!-- .page-content -->
            </section>
            <!-- .error-404 -->

        </main>
        <!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>