<?php
/**
 * The template for displaying featured posts on the front page
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */
?>
     
<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4 featured'); ?>>
	<a class="post-thumbnail" href="<?php the_permalink(); ?>">
	<?php
		// Output the featured image.
		if ( has_post_thumbnail() ) :
			the_post_thumbnail( 'post-thumbnails', array('class' => 'img-responsive') );
		endif;
	?>
	</a>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h2>' ); ?>
	</header><!-- .entry-header -->
</article><!-- #post-## -->
