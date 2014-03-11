<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package innovation1000
 */
?>
<div id="secondary" class="widget-area sidebar-left col-md-3 col-sm-4 hidden-xs" role="complementary">

    <aside id="search" class="widget widget_search">
        <?php get_search_form(); ?>
    </aside>

    <aside id="recent" class="widget">
        <h2 class="sidebar-title">MEST LÄSTA</h2>

        <div class="title-underline"></div>
        <ul class="sidebar-list">
            <?php if (function_exists('get_most_viewed')): ?>
                <?php get_most_viewed(); ?>
            <?php endif; ?>
        </ul>
    </aside>

    <aside id="recent" class="widget">
        <h2 class="sidebar-title">MEST KOMMENTERADE</h2>

        <div class="title-underline"></div>
        <ul class="sidebar-list">
            <?php
            $popular = new WP_Query( array(
                'post_type'             => array( 'post' ),
                'showposts'             => 5,
                'cat'                   => 'MyCategory',
                'ignore_sticky_posts'   => true,
                'orderby'               => 'comment_count',
                'order'                 => 'dsc',
//                'date_query' => array(
//                    array(
//                        'after' => '1 week ago',
//                    ),
//                ),
            ) );
            ?>
            <?php while ( $popular->have_posts() ): $popular->the_post(); ?>
                <div><a href="<?php echo get_permalink( $popular->id ); ?>"> <?php the_title() ?></a></div>
            <?php endwhile; ?>
        </ul>
    </aside>

    <aside id="authors-comments" class="widget">
        <div id="authors-comments-title">FÖRFATTARNA KOMMENTERAR</div>
        <div id="authors-comments-body">Lite statisk text som ligger här under tiden, du vet.</div>
        <img src="<?php bloginfo('template_directory'); ?>/img/authors.png" alt=""/>
    </aside>

    <aside id="meta" class="widget">
        <h2 class="sidebar-title">META</h2>
        <ul>
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <?php wp_meta(); ?>
        </ul>
    </aside>

</div><!-- #secondary -->
