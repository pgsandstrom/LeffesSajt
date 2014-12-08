<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package innovation1000
 */
?>
<div id="sidebar-left" class="widget-area sidebar sidebar-left col-md-3 col-sm-4 hidden-xs" role="complementary">

	<aside id="search" class="widget widget_search">
		<?php get_search_form(); ?>
	</aside>

	<aside id="archive" class="widget widget_archive">
		<a class="sidebar-title" href="<?php echo get_page_link( get_page_by_title( 'Arkiv' )->ID ); ?>">BLÄDDRA I ARKIVET</a>
	</aside>

	<aside class="widget">
		<h2 class="sidebar-title">MEST LÄSTA</h2>
		<?php
		if (function_exists('wpp_get_mostpopular')) {
			wpp_get_mostpopular("limit=5&post_type=post&stats_views=0&range=weekly");
		}
		?>
	</aside>

	<!--    <aside id="recent" class="widget">-->
	<!--        <h2 class="sidebar-title">MEST KOMMENTERADE</h2>-->
	<!---->
	<!--        <ul class="sidebar-body">-->
	<!--            --><?php
	//            print_most_commented_articles();
	//
	?>
	<!--        </ul>-->
	<!--    </aside>-->

	<aside class="widget">
		<h2 class="sidebar-title">ORDLISTOR</h2>

		<ul class="sidebar-body">
			<?php
			//            Only print these hardcoded articles if they exist:
			if (get_permalink(37)) : ?>
				<li><a href="<?php echo get_permalink(37); ?>"><?php echo get_the_title(37); ?></a></li>
			<?php endif ?>
			<?php if (get_permalink(41)) : ?>
				<li><a href="<?php echo get_permalink(41); ?>"><?php echo get_the_title(41); ?></a></li>
			<?php endif ?>
		</ul>
	</aside>

	<aside class="widget">
		<h2 class="sidebar-title">MARTINS FEM FAVORITER</h2>

		<ul class="sidebar-body">
			<?php
			//            Only print these hardcoded articles if they exist:
			if (get_permalink(134)) : ?>
				<li><a href="<?php echo get_permalink(134); ?>"><?php echo get_the_title(134); ?></a></li>
			<?php endif ?>
			<?php if (get_permalink(115)) : ?>
				<li><a href="<?php echo get_permalink(115); ?>"><?php echo get_the_title(115); ?></a></li>
			<?php endif ?>
			<?php if (get_permalink(99)) : ?>
				<li><a href="<?php echo get_permalink(99); ?>"><?php echo get_the_title(99); ?></a></li>
			<?php endif ?>
			<?php if (get_permalink(78)) : ?>
				<li><a href="<?php echo get_permalink(78); ?>"><?php echo get_the_title(78); ?></a></li>
			<?php endif ?>
			<?php if (get_permalink(138)) : ?>
				<li><a href="<?php echo get_permalink(138); ?>"><?php echo get_the_title(138); ?></a></li>
			<?php endif ?>
		</ul>
	</aside>

	<aside class="widget">
		<h2 class="sidebar-title">LEIFS FEM FAVORITER</h2>

		<ul class="sidebar-body">
			<?php
			//            Only print these hardcoded articles if they exist:
			if (get_permalink(88)) : ?>
				<li><a href="<?php echo get_permalink(88); ?>"><?php echo get_the_title(88); ?></a></li>
			<?php endif ?>
			<?php if (get_permalink(12)) : ?>
				<li><a href="<?php echo get_permalink(12); ?>"><?php echo get_the_title(12); ?></a></li>
			<?php endif ?>
			<?php if (get_permalink(102)) : ?>
				<li><a href="<?php echo get_permalink(102); ?>"><?php echo get_the_title(102); ?></a></li>
			<?php endif ?>
			<?php if (get_permalink(76)) : ?>
				<li><a href="<?php echo get_permalink(76); ?>"><?php echo get_the_title(76); ?></a></li>
			<?php endif ?>
			<?php if (get_permalink(144)) : ?>
				<li><a href="<?php echo get_permalink(144); ?>"><?php echo get_the_title(144); ?></a></li>
			<?php endif ?>
		</ul>
	</aside>

	<aside class="sponsors">
		<div>
			<span>TUSENTIPS FINANSIERAS AV</span>
			<a target="_blank">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/img/vinnova_logo.jpg"/>
			</a>
		</div>

		<div>
			<span>VI SAMARBETAR MED</span>
			<a id="personalledarskap" href="http://www.personalledarskap.se/" target="_blank">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/img/personalledarskap.jpg"/>
			</a>
			<a id="snitts" href="http://www.snitts.se/" target="_blank">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/img/snitts.png"/>
			</a>
		</div>
	</aside>


	<!--    <aside id="meta" class="widget">-->
	<!--        <h2 class="sidebar-title">META</h2>-->
	<!--        <ul class="sidebar-body">-->
	<!--            --><?php //wp_register(); ?>
	<!--    <li>--><?php //wp_loginout(); ?><!--</li>-->
	<!--    --><?php //wp_meta(); ?>
	<!--        </ul>-->
	<!--    </aside>-->

</div><!-- #sidebar-left -->
