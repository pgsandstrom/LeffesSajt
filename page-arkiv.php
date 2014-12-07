<?php
/**
 * The template for displaying Archive pages. Used for example when the user clicks on a tag.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package innovation1000
 */

get_header();

get_template_part('content_presenter');
?>

<hr class="mobile-separator visible-xs">

<section id="primary" class="container">

	<?php get_sidebar('left'); ?>

	<main id="main" class="site-main col-md-6 col-sm-8 col-xs-12" role="main">
		<?php
		//		$args = array( 'posts_per_page' => 5, 'offset'=> 1, 'category' => 1 );
		//				$args = array( 'posts_per_page' => 3 );
		$args = array('posts_per_page' => 9999);

		$myposts = get_posts($args);
		$lastmonth = 'foo';
		$lastyear = 'bar';
		foreach ($myposts as $post) : setup_postdata($post);
			$dayInMonth = date("j", strtotime($post->post_date));
			$month = date("m", strtotime($post->post_date));
			$monthTextShort = date("M", strtotime($post->post_date));
			$year = date("Y", strtotime($post->post_date));
			if ($month !== $lastmonth || $year !== $lastyear) {
				$lastmonth = $month;
				$lastyear = $year;
				$monthtext = date("F", strtotime($post->post_date));
				?>
				<div class="archive-date-title">
					<?= $monthtext ?> <?= $year ?>
				</div>

			<?php

			}

			?>
			<div class="archive-link">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a> <span class="archive-date"> <?= $dayInMonth?> <?= $monthTextShort?> <?= $year ?></span>
			</div>
		<?php endforeach;
		wp_reset_postdata(); ?>

	</main>
	<!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
