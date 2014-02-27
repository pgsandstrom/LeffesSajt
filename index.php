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


<div id="primary" class="container content-area">
    <?php get_sidebar('left'); ?>
    <main id="main" class="site-main col-md-6 col-sm-8 col-xs-12" role="main">
        <div class="sidebar-separator">
        </div>
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <?php
                $found_category = false;
                $categories = get_the_category();
                foreach ($categories as $category) {
//                        echo("kategorin som hittades: " . $category->term_id . ", " . $category->name);
                    if ($category->name == "artiklar") {
                        $found_category = true;
                    }
                }
                if (!$found_category) {
                    continue;
                }

                ?>



                <?php
                /* Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('content', get_post_format());
//					the_title();

                ?>

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
