<?php
/**
 * The default template for displaying content
 *
 * Used for single content.
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */
?>
<div class="row">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-lg-5">
	  <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-responsive')); ?>
        </div>
	
	<div class="col-lg-7">    
		<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title article-header"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	<?php if(is_search() || !is_single()) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		 the_content();
	</div><!-- .entry-content -->
	<?php endif; ?>
	</div>
</article><!-- #post-## -->
</div>
<br>
