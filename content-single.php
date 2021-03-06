<?php
/**
 * Used for example when viewing a single post.
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

        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'innovation1000'),
            'after' => '</div>',
        ));
        ?>
    </div>
    <!-- .entry-content -->

    <footer class="entry-meta">
        <?php
        /* translators: used between list items, there is a space after the comma */
        $category_list = get_the_category_list(__(', ', 'innovation1000'));

        /* translators: used between list items, there is a space after the comma */
        $tag_list = get_the_tag_list('', __(', ', 'innovation1000'));

        if (!innovation1000_categorized_blog()) {
            // This blog only has 1 category so we just need to worry about tags in the meta text
            if ('' != $tag_list) {
                $meta_text = __('This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'innovation1000');
            } else {
                $meta_text = __('Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'innovation1000');
            }

        } else {
            // But this blog has loads of categories so we should probably display them here
            if ('' != $tag_list) {
                $meta_text = __('This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'innovation1000');
            } else {
                $meta_text = __('This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'innovation1000');
            }

        } // end check for categories on this blog

        //        printf(
        //            $meta_text,
        //            $category_list,
        //            $tag_list,
        //            get_permalink()
        //        );
        ?>

        <?php edit_post_link(__('Edit', 'innovation1000'), '<span class="edit-link">', '</span>'); ?>
    </footer>
    <!-- .entry-meta -->
</article><!-- #post-## -->
