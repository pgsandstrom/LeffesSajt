<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package innovation1000
 */
?>
<div id="sidebar-right" class="widget-area sidebar sidebar-right col-md-3 hidden-sm hidden-xs" role="complementary">

	<aside id="app-content">
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

	<aside class="twitter-follow">
		<div class="center-block" style="width: 130px">
			<a href="https://twitter.com/tusentips" class="twitter-follow-button" data-show-count="false" data-lang="sv" data-size="large">Följ @tusentips</a>
		</div>
	</aside>

	<aside class="gplus-follow">
		<div class="center-block" style="width: 87px">
			<script src="https://apis.google.com/js/platform.js" async defer>
				{lang: 'sv'}
			</script>
			<div class="g-follow" data-annotation="none" data-height="24" data-href="//plus.google.com/u/0/110461382714372253708" data-rel="publisher"></div>
		</div>
	</aside>





</div><!-- #sidebar-right -->
