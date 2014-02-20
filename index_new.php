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
 * @package test123123
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /*while ( have_posts() ) : the_post(); 
					get_template_part( 'content', get_post_format() );
			endwhile;*/ ?>
			
			<?php
			$customposts = get_posts('category_name=tips' ); // note: you assign your query to a custom post object ($customposts)
			foreach( $customposts as $post ) :  // start you custom loop
				setup_postdata($post); ?>
				<h2 class="entry-title"><?php the_title(); ?></h2>
				<?php the_content() ?>
			<?php endforeach; ?> // end the custom loop

			<?php test123123_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
