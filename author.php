<?php
/**
 * The template for displaying Author posts
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */

get_header(); ?>
<div id="primary" class="container content-area">
<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title">
					<?php
						/*
						 * Queue the first post, that way we know what author
						 * we're dealing with (if that is the case).
						 *
						 * We reset this later so we can run the loop properly
						 * with a call to rewind_posts().
						 */
						the_post();
						
						printf( __( 'Publicaciónes por %s ' ), get_the_author() );
						echo "<span class='pull-right'>".proin_author_avatar()."</span>";
						echo "<div style='clear:both'></div>";
					?>
				</h1>
				<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<div class="author-description"><?php the_author_meta( 'description' ); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

			<?php
					rewind_posts();
					while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
					endwhile;
					proin_paging_nav();
				else :
					// No post found template
					get_template_part( 'content', 'none' );
				endif;
			?>
		</div><!-- #col -->
	</div><!-- #row -->
</div><!-- primary -->
<?php
get_footer();
