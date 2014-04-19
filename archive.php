<?php
/**
 * The template for displaying Archive pages. Used for example when the user clicks on a tag.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package innovation1000
 */

get_header(); ?>

<div class="container">
    <div class="container-cloud-left col-md-6 col-sm-6 col-xs-6">
        <div class="cloud-left">
            <div class="cloud-titlebar cloud-title-left">
                <span class="cloud-title hidden-xs">Välj bland rubriker</span>
                <span class="cloud-title visible-xs">Rubriker</span>
                <span class="load-more load-more-pos hidden-sm hidden-xs">
                    <a href="javascript:void(0)" onclick="tusentips.shufflePosts();"> LADDA FLER</a>
                </span>
                <a class="load-more-pos hidden-md hidden-lg" href="javascript:void(0)"
                   onclick="tusentips.shufflePosts();">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/refresh.png"/>
                </a>
                <a class="menu-pos visible-xs" href="javascript:void(0)" onclick="tusentips.activatePostMenu();">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/menu.png"/>
                </a>
            </div>
            <div id="postList" class="cloud-body">
                <ul>
                    <?php print_all_posts(); ?>
                </ul>
                <a class="load-more-pos-below visible-xs" href="javascript:void(0)"
                   onclick="tusentips.shufflePosts();">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/refresh.png"/>
                </a>
            </div>
        </div>
    </div>

    <div class="container-cloud-right col-md-6 col-sm-6 col-xs-6">
        <div class="cloud-right">
            <div class="cloud-titlebar cloud-title-right">
                <span class="cloud-title hidden-xs">Välj bland ämnen</span>
                <span class="cloud-title visible-xs">Ämnen</span>
                <span class="load-more load-more-pos hidden-sm hidden-xs">
                    <a href="javascript:void(0)" onclick="tusentips.shuffleTags();">LADDA FLER</a>
                </span>
                <a class="load-more-pos hidden-md hidden-lg" href="javascript:void(0)"
                   onclick="tusentips.shuffleTags();">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/refresh.png"/>
                </a>
                <a class="menu-pos visible-xs" href="javascript:void(0)" onclick="tusentips.activateTagMenu();">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/menu.png"/>
                </a>
            </div>
            <div id="tagList" class="cloud-body">
                <ul>
                    <?php print_most_common_tags(); ?>
                </ul>
                <a class="load-more-pos-below visible-xs" href="javascript:void(0)"
                   onclick="tusentips.shuffleTags();">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/refresh.png"/>
                </a>
            </div>
        </div>
    </div>
</div>

<hr class="mobile-separator visible-xs">

<section id="primary" class="container">

    <?php get_sidebar('left'); ?>

    <main id="main" class="site-main col-md-6 col-sm-8 col-xs-12" role="main">

        <?php if (have_posts()) : ?>

            <header class="page-header">
                <!--                <h1 class="page-title">-->
                <!--                </h1>-->
                <?php
                if (is_category()) :
                    echo '<span class="category-item">';
                    echo 'Alla ';
                    single_cat_title(); //
                    echo '</span>'; //
                elseif (is_tag()) :
                    echo '<span class="tag-item">';
                    echo 'Allt om ';
                    single_tag_title(); //
                    echo '</span>'; //
                elseif (is_author()) :
                    printf(__('Author: %s', 'innovation1000'), '<span class="vcard">' . get_the_author() . '</span>'); //
                elseif (is_day()) :
                    printf(__('Day: %s', 'innovation1000'), '<span>' . get_the_date() . '</span>'); //
                elseif (is_month()) :
                    printf(__('Month: %s', 'innovation1000'), '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'innovation1000')) . '</span>'); elseif (is_year()) :
                    printf(__('Year: %s', 'innovation1000'), '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'innovation1000')) . '</span>'); elseif (is_tax('post_format', 'post-format-aside')) :
                    _e('Asides', 'innovation1000'); elseif (is_tax('post_format', 'post-format-gallery')) :
                    _e('Galleries', 'innovation1000'); elseif (is_tax('post_format', 'post-format-image')) :
                    _e('Images', 'innovation1000'); elseif (is_tax('post_format', 'post-format-video')) :
                    _e('Videos', 'innovation1000'); elseif (is_tax('post_format', 'post-format-quote')) :
                    _e('Quotes', 'innovation1000'); elseif (is_tax('post_format', 'post-format-link')) :
                    _e('Links', 'innovation1000'); elseif (is_tax('post_format', 'post-format-status')) :
                    _e('Statuses', 'innovation1000'); elseif (is_tax('post_format', 'post-format-audio')) :
                    _e('Audios', 'innovation1000'); elseif (is_tax('post_format', 'post-format-chat')) :
                    _e('Chats', 'innovation1000'); else :
                    _e('Archives', 'innovation1000');

                endif;
                ?>
                <?php
                // Show an optional term description.
                $term_description = term_description();
                if (!empty($term_description)) :
                    printf('<div class="taxonomy-description">%s</div>', $term_description);
                endif;
                ?>
            </header><!-- .page-header -->

            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php
                /* Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part('content', get_post_format());
                ?>

            <?php endwhile; ?>

            <?php innovation1000_paging_nav(); ?>

        <?php else : ?>

            <?php get_template_part('content', 'none'); ?>

        <?php endif; ?>

    </main>
    <!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
