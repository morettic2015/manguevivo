<?php
/**
 * Part Name: Default Footer
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">

	<?php if( ! siteorigin_page_setting( 'hide_footer_widgets', false ) ) : ?>
		<div id="footer-widgets" class="full-container">
			<?php dynamic_sidebar( 'sidebar-footer' ) ?>
		</div><!-- #footer-widgets -->
	<?php endif; ?>

	<?php $site_info_text = apply_filters('vantage_site_info', siteorigin_setting('general_site_info_text') ); if( !empty($site_info_text) ) : ?>
		<div id="site-info">
			<?php echo wp_kses_post($site_info_text) ?>
		</div><!-- #site-info -->
	<?php endif; ?>

	<?php echo apply_filters( 'vantage_footer_attribution', '<div id="theme-attribution">Copyright:<br><a href="http://morettic.com.br" target="_blank"><img src="http://padariaconfeitariablumenau.com.br/wp-content/uploads/2016/10/morettic3.png"  width="108" height="32">
</a></div>' ) ?>

</footer><!-- #colophon .site-footer -->
