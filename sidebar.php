<?php
/**
 * Sidebar of the main widget area
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */
?>

<div id="secondary">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div><!-- #secondary -->
