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
            'category_name' => 'dagens tips',
            'paged' => $paged
//        ,
//            'posts_per_page' => 5
        );
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) :
            while ($wp_query->have_posts()) : $wp_query->the_post();
                /* Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('content', get_post_format());
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
