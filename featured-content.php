<?php
/**
 * The template for displaying featured content
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */
?>
<div class="border-bottom"><strong class="text-muted">Destacados</strong></div>
<br/>
<div id="featured-content" class="featured-content">
	<div class="featured-content-inner">
	<?php
		$featured_posts = twentyfourteen_get_featured_posts();
		foreach ( (array) $featured_posts as $order => $post ) :
			setup_postdata( $post );
			// Include the featured content template.
			get_template_part( 'content', 'featured-post' );
		endforeach;
		wp_reset_postdata();
	?>
	</div><!-- .featured-content-inner -->
</div><!-- #featured-content .featured-content -->
