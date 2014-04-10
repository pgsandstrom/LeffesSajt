<?php
/**
 * The template for displaying Search Results pages.
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
