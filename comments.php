<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package innovation1000
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php // You can start editing here -- including this comment! ?>

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            printf(_nx('En kommentar på &ldquo;%2$s&rdquo;', '%1$s kommentarer på &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'innovation1000'),
                number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>');
            ?>
        </h2>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through ?>
            <nav id="comment-nav-above" class="comment-navigation" role="navigation">
                <h1 class="screen-reader-text"><?php _e('Comment navigation', 'innovation1000'); ?></h1>

                <div
                    class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'innovation1000')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'innovation1000')); ?></div>
            </nav><!-- #comment-nav-above -->
        <?php endif; // check for comment navigation ?>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style' => 'ol',
                'short_ping' => true,
            ));
            ?>
        </ol><!-- .comment-list -->

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through ?>
            <nav id="comment-nav-below" class="comment-navigation" role="navigation">
                <h1 class="screen-reader-text"><?php _e('Comment navigation', 'innovation1000'); ?></h1>

                <div
                    class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'innovation1000')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'innovation1000')); ?></div>
            </nav><!-- #comment-nav-below -->
        <?php endif; // check for comment navigation ?>

    <?php endif; // have_comments() ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && '0' != get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
        ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'innovation1000'); ?></p>
    <?php endif; ?>

    <?php
    // "comment_notes_after" för att inte få massa info om vilka html-taggar man kan använda
    comment_form(array(
        'comment_notes_after' => ' ',
    )); ?>

</div><!-- #comments -->
