<?php
/**
 * The Template for displaying all single posts.
 *
 * @package innovation1000
 */

get_header(); ?>
    <div id="primary" class="container content-area">
        <?php get_sidebar('left'); ?>
        <main id="main" class="site-main col-md-6 col-sm-8 col-xs-12" role="main">
            <div class="sidebar-separator">
            </div>

            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('content', 'single'); ?>
                hej
                <?php if(function_exists('the_views')) { the_views(); } ?>
                hej
                <?php innovation1000_post_nav(); ?>

                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if (comments_open() || '0' != get_comments_number()) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; // end of the loop. ?>

        </main>
        <!-- #main -->
        <?php get_sidebar('right'); ?>
    </div><!-- #primary -->

<?php get_footer(); ?>