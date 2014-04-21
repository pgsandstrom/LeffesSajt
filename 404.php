<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package innovation1000
 */

get_header();

get_template_part('content_presenter');
?>

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