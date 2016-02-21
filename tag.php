<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
				<h1 class="archive-title"><?php printf( __( 'Archivo de etiquetas: %s' ), single_tag_title( '', false ) ); ?></h1>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description"><p class="lead">%s</p></div>', $term_description );
						
					endif;
				?>
			</header><!-- .archive-header -->
			<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'content', get_post_format() );

					endwhile;
					proin_paging_nav();

				else :
					get_template_part( 'content', 'none' );

				endif;
			?>
		</div><!-- col-lg-8 -->
	</div><!-- row -->
</div><!-- primary -->
<?php
get_footer();
