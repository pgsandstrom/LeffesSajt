<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package innovation1000
 */
?>

<section class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title">Inga sökresultat</h1>
    </header>
    <!-- .page-header -->

    <div class="page-content">
        <?php if (is_home() && current_user_can('publish_posts')) : ?>

            <p><?php printf(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'innovation1000'), esc_url(admin_url('post-new.php'))); ?></p>

        <?php elseif (is_search()) : ?>

            <p>Din sökning matchade inte några av våra artiklar. Försök gärna igen.</p>
            <?php get_search_form(); ?>

        <?php else : ?>

            <p>Tyvärr hittade vi inte vad du letar efter.</p>
            <?php get_search_form(); ?>

        <?php endif; ?>
    </div>
    <!-- .page-content -->
</section><!-- .no-results -->
