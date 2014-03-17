<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package innovation1000
 */

get_header(); ?>

<div class="container">

    <div class="col-md-6">
        <div class="cloud-yellow">
            <div class="cloud-title cloud-title-yellow">
                TÄNK SÅ HÄR
            </div>
            <ul class="cloud-body cloud-body-yellow">
                <?php latest_published_articles(); ?>
            </ul>
        </div>
    </div>

    <div class="col-md-6">
        <div class="cloud-green">
            <div class="cloud-title cloud-title-green">
                TÄNK SÅ HÄR
            </div>
            <ul class="cloud-body cloud-body-green">
                <?php most_common_tags_in_last_days(); ?>
            </ul>
        </div>
    </div>
</div>

<div id="primary" class="container">

    <?php get_sidebar('left'); ?>

    <main id="main" class="site-main col-md-6 col-sm-8 col-xs-12" role="main">

        <?php
        //        $args = array(
        //            'category_name' => 'artiklar',
        //            'paged' => $paged
        //        ,
        //            'posts_per_page' => 5     <- denna sak inte användas
        //        );
        //        $wp_query = new WP_Query($args);
        if (have_posts()) :
            while (have_posts()) : the_post();
                /* Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('content', get_post_format());
//					the_title();

            endwhile;
            innovation1000_paging_nav(); //
        else :
            get_template_part('content', 'none');
        endif; ?>
    </main>
    <!-- #main -->
    <?php get_sidebar('right'); ?>
</div><!-- #primary -->


<?php get_footer(); ?>
