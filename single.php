<?php
/**
 * The Template for displaying all single posts
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */
get_header();

while ( have_posts() ) : the_post();
	
	$format = get_post_format();
	if(!$format) $format = "full";
	get_template_part( 'content', $format );

	echo '<div class="container"><div class="row"><div class="col-lg-10 col-lg-offset-1">';
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	echo '</div></div></div>';
endwhile;
 ?>
<?php
get_footer();
