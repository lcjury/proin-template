<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */

get_header(); ?>

<div id="primary" class="container content-area">
  <div id="content" class="row site-content" role="main">
    <div class="page-header">
  	<h1 class="page-title"><?php _e( 'Not Found' ); ?></h1>
	<div class="page-content">
		<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfourteen' ); ?></p>
	</div><!-- .page-content -->
    </div>
  </div><!-- #content -->
</div><!-- #primary -->

<?php
get_footer();
