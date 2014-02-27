<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package innovation1000
 */

get_header(); ?>

<div id="primary" class="container content-area">
    <?php get_sidebar('left'); ?>
    <main id="main" class="site-main col-md-6 col-sm-8 col-xs-12" role="main">
        <div class="sidebar-separator">
        </div>

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
