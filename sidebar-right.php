<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package innovation1000
 */
?>
<div id="sidebar-right" class="widget-area sidebar sidebar-right col-md-3 hidden-sm hidden-xs" role="complementary">

	<aside class="twitter-follow">
		<a href="https://twitter.com/tusentips" class="twitter-follow-button" data-show-count="false" data-lang="sv" data-size="large">Följ @tusentips</a>
	</aside>

	<aside id="app-content">
		<div class="text">Nu som app</div>
		<div class="text">i din mobil!</div>
		<img src="<?php echo get_bloginfo('template_directory'); ?>/img/app_screenshot.png"/>

		<div id="appstores">
			<a href="https://itunes.apple.com/se/app/tusentips/id877286390?mt=8&uo=4" target="itunes_store">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/img/appstore.png" class="center"/>
			</a>
			<a href="https://play.google.com/store/apps/details?id=se.tusentips.app" target="_blank">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/img/playstore.png" class="center"/>
			</a>
		</div>
	</aside>

</div><!-- #sidebar-right -->
