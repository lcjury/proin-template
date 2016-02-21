<?php
/**
 * The main template file
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */

get_header(); ?>

<div id="primary" class="container content-area">
  <div id="content" class="row site-content" role="main">
    <div class="page-header">
      <h1><?php echo bloginfo('name'); ?></h1>
    </div>
    <p class="lead"><?php echo bloginfo('description'); ?></p>
    <?php
    if(is_home() && twentyfourteen_has_featured_posts())
	get_template_part('featured-content');
    ?>

    <div class="row">
    	<div class="col-lg-8">
      		<div class="border-bottom"><strong class="text-muted">Ultimas noticias</strong></div>
		<br/>

	<?php
	if ( have_posts() ) :
	// Start the Loop.
		while ( have_posts() ) : the_post();
			get_template_part( 'content' );
		endwhile;
		// Previous/next post navigation.
		proin_paging_nav();
	else :
		// If no content, include the "No posts found" template.
		get_template_part( 'content', 'none' );
	endif;
	?>
    	</div> <!-- col-lg-8 -->
	
	<div class="col-lg-4">
      		<?php get_sidebar(''); ?>
    	</div><!-- col-lg-4 --->
    </div>
</div>
</div><!-- #primary -->


<?php
get_footer();
