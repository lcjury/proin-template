<?php
/**
 * The Footer Sidebar
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div id="supplementary">
	<div id="footer-sidebar" class="footer-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- #footer-sidebar -->
</div><!-- #supplementary -->
