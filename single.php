<?php
/**
 * The Template for displaying all single posts. Uses "content-single" for actually displaying the post.
 *
 * @package innovation1000
 */

get_header(); ?>
    <div class="container cloud-container">

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
    <div id="primary" class="container content-area">
        <?php get_sidebar('left'); ?>
        <main id="main" class="site-main col-md-6 col-sm-8 col-xs-12" role="main">

            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('content', 'single'); ?>
                <?php if(function_exists('the_views')) { the_views(); } ?>
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