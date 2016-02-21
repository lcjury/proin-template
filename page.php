<?php
/**
 * The template for displaying all pages
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */

get_header(); ?>

<div id="primary" class="container content-area">
  <div id="content" class="row site-content" role="main">
    <br>
    <div class="row">
      <div class="col-lg-8">
      <?php
	while ( have_posts() ) : the_post();
	// Include the page content template.
	get_template_part( 'content', 'page' );
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
	endwhile;
	?>
      </div> <!-- col-lg-8 -->
    </div> <!-- row -->
  </div> <!-- content-->
</div> <!-- primary -->
<?php
get_footer();
