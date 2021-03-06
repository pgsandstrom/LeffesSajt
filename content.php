<?php
/**
 * Used for example when displaying an article in the "main" view.
 *
 * @package innovation1000
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="entry-meta">

            <!-- Warning: This code exists both here and in content-single.php -->
            <?php print_categories(); ?>
            <?php innovation1000_posted_on(); ?>

            <?php
            print_tags();
            ?>
        </div>

        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
    </header>

    <?php if (is_search()) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->
    <?php else : ?>
        <div class="entry-content">
            <?php the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'innovation1000')); ?>
            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . __('Pages:', 'innovation1000'),
                'after' => '</div>',
            ));
            ?>
        </div><!-- .entry-content -->
    <?php endif; ?>
    <div class="clearfix"></div>    <!-- En clearfix behövs då t.ex. ett share-plugin buggar sidan annars -->
    <footer class="entry-meta">

        <?php if (!post_password_required() && (comments_open() || '0' != get_comments_number())) : ?>
            <span
                class="comments-link"><?php comments_popup_link(__('Leave a comment', 'innovation1000'), __('1 Comment', 'innovation1000'), __('% Comments', 'innovation1000')); ?></span>
        <?php endif; ?>

        <?php edit_post_link(__('Edit', 'innovation1000'), '<span class="edit-link">', '</span>'); ?>
    </footer>
    <!-- .entry-meta -->
</article><!-- #post-## -->
