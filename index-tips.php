<?php
/*
Template Name: Tips template
*/

get_header(); ?>


<div id="primary" class="container content-area">
    <?php get_sidebar('left'); ?>
    <main id="main" class="site-main col-md-6 col-sm-8 col-xs-12" role="main">


        <?php
        $args = array(
            'category_name' => 'tips',
            'paged' => 1,
            'posts_per_page' => 5
        );
        ?>

<!--        'category_name=tips'-->
        <?php $my_query = new WP_Query($args); ?>
        <?php if ($my_query->have_posts()) : ?>

            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <?php
                /* Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('content', get_post_format());
//					the_title();

                ?>

            <?php endwhile; ?>

            <?php test123123_paging_nav(); ?>

        <?php else : ?>

            <?php get_template_part('content', 'none'); ?>

        <?php endif; ?>

    </main>
    <!-- #main -->
    <?php get_sidebar('right'); ?>
</div><!-- #primary -->


<?php get_footer(); ?>
