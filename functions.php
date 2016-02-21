<?php
/**
 * Proin functions and definitions
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */


// Hides the admin bar, it shows over the navbar 
show_admin_bar( false );

// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');
// require instagram plugin
require_once('inc/wp-instagram-widget.php');
add_filter( 'wp_generate_tag_cloud_data', 'proin_tag_cloud_data');

function proin_tag_cloud_data( $tags_data ) {
    foreach ( $tags_data as $key => $tag ) {
        // get tag count
        $count = $tag [ 'real_count' ];
        // adjust the class based on the size
        $tags_data[$key]['class'] .= ' label label-big label-default';
	$tags_data[$key]['font_size'] = '';

    }
    // return adjusted data
    return $tags_data;
}

if ( ! function_exists( 'proin_setup' ) ) :

/**
 * Proin setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * @since Proin 1.0
 */
function proin_setup() {

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 360, 192, true );
//	add_image_size( 'twentyfourteen-full-width', 1038, 576, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => 'Top primary menu'
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside'
	) );

	// Add support for featured content.
	add_theme_support( 'featured-content', array(
		'featured_content_filter' => 'twentyfourteen_get_featured_posts',
		'max_posts' => 3,
	) );
}
endif; // proin setup

add_action( 'after_setup_theme', 'proin_setup' );



/**
 * Getter function for Featured Content Plugin.
 *
 * @since Proin 1.0
 *
 * @return array An array of WP_Post objects.
 */
function twentyfourteen_get_featured_posts() {
	/**
	 * Filter the featured posts to return in Twenty Fourteen.
	 *
	 * @since Twenty Fourteen 1.0
	 *
	 * @param array|bool $posts Array of featured posts, otherwise false.
	 */
	return apply_filters( 'twentyfourteen_get_featured_posts', array() );
}

/**
 * A helper conditional function that returns a boolean value.
 *
 * @since Proin 1.0
 *
 * @return bool Whether there are featured posts.
 */
function twentyfourteen_has_featured_posts() {
	return ! is_paged() && (bool) twentyfourteen_get_featured_posts();
}

/**
 * Register widget areas and register widgets.
 * @since Proin 1.0
 */
function proin_widgets_init() {
	require_once('inc/widget-proin-recent-posts.php');
	register_widget('Widget_Proin_Recent_Posts');

	register_sidebar( array(
		'name'          => 'Primary Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Main sidebar that appears on the left.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="border-bottom widget-title"><strong class="text-muted">',
		'after_title'   => '</strong></div>',
	));
	register_sidebar( array(
		'name'          => 'Footer Sidebar',
		'id'            => 'sidebar-2',
		'description'   => 'Appears in the footer section of the site, don\'t put more than 3 widgets here!.',
		'before_widget' => '<div class="col-lg-4">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	));
}
add_action( 'widgets_init', 'proin_widgets_init' );

/**
 * Register Lato Google font for Twenty Fourteen.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return string
 */
function twentyfourteen_font_url() {
	$font_url = '';
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Lato, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Lato font: on or off', 'twentyfourteen' ) ) {
		$query_args = array(
			'family' => urlencode( 'Lato:300,400,700,900,300italic,400italic,700italic' ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $font_url;
}

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Proin 1.0
 */
function proin_scripts() {

	
	// Add Material Design fonts.
	wp_enqueue_style( 'material-design', 'http://fonts.googleapis.com/css?family=Roboto:300,400,500,700');
	wp_enqueue_style( 'material-design-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');

	// Add Bootstrap
	wp_enqueue_style( 'Bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');

	// Add Bootstrap Material Design
	wp_enqueue_style( 'Bootstrap-Material', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.7/css/bootstrap-material-design.min.css');
	wp_enqueue_style( 'Bootstrap-Material-Ripples', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.7/css/ripples.min.css' );
	
	// Add Font awesome 
	wp_enqueue_style( 'Font-Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	
	// Add Owl carrousel
	wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri().'/css/owl.carousel.css');
	wp_enqueue_style( 'Owl-Carrousel-theme', get_template_directory_uri().'/css/owl.theme.css');

	// Load our main stylesheet.
	wp_enqueue_style( 'proin-style', get_stylesheet_uri() );

	if( is_front_page() )
	{
		wp_enqueue_script( 'chart-js', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'  );
		wp_enqueue_script( 'front-page', get_template_directory_uri() . '/js/front-page.js', array(), false, true  );
		wp_enqueue_style( 'front-page-css', get_template_directory_uri().'/css/front-page.css' );
	}
/*
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}*/
/*
	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentyfourteen-keyboard-image-navigation',wp_enqueue_script( 'comment-reply' );, array( 'jquery' ), '20130402' );
	}*/
/*
	if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
		wp_enqueue_script( 'twentyfourteen-slider', get_template_directory_uri() . '/js/slider.js', array( 'jquery' ), '20131205', true );
		wp_localize_script( 'twentyfourteen-slider', 'featuredSliderDefaults', array(
			'prevText' => __( 'Previous', 'twentyfourteen' ),
			'nextText' => __( 'Next', 'twentyfourteen' )
		) );
	}*/

	//wp_enqueue_script( 'proin-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150315', true );
}
add_action( 'wp_enqueue_scripts', 'proin_scripts' );


if ( ! function_exists( 'twentyfourteen_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_the_attached_image() {
	$post                = get_post();
	/**
	 * Filter the default Twenty Fourteen attachment size.
	 *
	 * @since Twenty Fourteen 1.0
	 *
	 * @param array $dimensions {
	 *     An array of height and width dimensions.
	 *
	 *     @type int $height Height of the image in pixels. Default 810.
	 *     @type int $width  Width of the image in pixels. Default 810.
	 * }
	 */
	$attachment_size     = apply_filters( 'twentyfourteen_attachment_size', array( 810, 810 ) );
	$next_attachment_url = wp_get_attachment_url();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id ) {
			$next_attachment_url = get_attachment_link( $next_id );
		}

		// or get the URL of the first image attachment.
		else {
			$next_attachment_url = get_attachment_link( reset( $attachment_ids ) );
		}
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

if ( ! function_exists( 'twentyfourteen_list_authors' ) ) :
/**
 * Print a list of all site contributors who published at least one post.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_list_authors() {
	$contributor_ids = get_users( array(
		'fields'  => 'ID',
		'orderby' => 'post_count',
		'order'   => 'DESC',
		'who'     => 'authors',
	));

	foreach ( $contributor_ids as $contributor_id ) :
		$post_count = count_user_posts( $contributor_id );

		// Move on if user has not published a post (yet).
		if ( ! $post_count ) {
			continue;
		}
	?>

	<div class="contributor">
		<div class="contributor-info">
			<div class="contributor-avatar"><?php echo get_avatar( $contributor_id, 132 ); ?></div>
			<div class="contributor-summary">
				<h2 class="contributor-name"><?php echo get_the_author_meta( 'display_name', $contributor_id ); ?></h2>
				<p class="contributor-bio">
					<?php echo get_the_author_meta( 'description', $contributor_id ); ?>
				</p>
				<a class="button contributor-posts-link" href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>">
					<?php printf( _n( '%d Article', '%d Articles', $post_count, 'twentyfourteen' ), $post_count ); ?>
				</a>
			</div><!-- .contributor-summary -->
		</div><!-- .contributor-info -->
	</div><!-- .contributor -->

	<?php
	endforeach;
}
endif;


// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Add Customizer functionality.
require get_template_directory() . '/inc/customizer.php';

/*
 * Add Featured Content functionality.
 *
 * To overwrite in a plugin, define your own Featured_Content class on or
 * before the 'setup_theme' hook.
 */
if ( ! class_exists( 'Featured_Content' ) && 'plugins.php' !== $GLOBALS['pagenow'] ) {
	require get_template_directory() . '/inc/featured-content.php';
}


// Bootstrap pagination function
if ( ! function_exists( 'proin_paging_nav' ) ) :
/**
 * Display pagination using bootstrap navigation
 *
 * @since Proin 1.0
 *

 */
function proin_paging_nav() {
	global $wp_query, $wp_rewrite;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 ) {
		//return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	//$query_args   = array();
	//$url_parts    = explode( '?', $pagenum_link );

	//if ( isset( $url_parts[1] ) ) {
	//	wp_parse_str( $url_parts[1], $query_args );
	//}
	

	$format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'format'   => $format,
		'total'    => $wp_query->max_num_pages+8,
		'current'  => $paged,
		'mid_size' => 4,
		//'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => '&larr; Previous',
		'next_text' => 'Next &rarr;',
		'type' => 'array'
	) );

	if ( $links ) :
	?>
	<div class="text-center" role="navigation">
		<ul class="pagination">
			<?php foreach($links as $link): ?>
			<?php echo "<li>".$link."</li>";?>
			<?php endforeach; ?>
        	</ul>
      	</div>

	<?php
	endif;
}
endif;

/*
 * Twitter widget filter for overriding date and format
 */
add_filter('latest_tweets_render_date', function( $created_at ){
    $date = DateTime::createFromFormat('D M d H:i:s O Y', $created_at );
    return 'Hace '.human_time_diff($date->getTimestamp());
}, 10 , 1 );
add_filter('latest_tweets_render_tweet', function( $html, $date, $link, array $tweet ){
    return "$html<p class='light'><i class='material-icons'>schedule</i>$date</p>";
}, 10, 4 );

add_filter('widget_title_pages', function(){ return "asd"; });


/*
 * Instagram widget filter for overriding behaviour
 */
add_filter('null_instagram_cache_time', 'my_cache_time');

function my_cache_time() {
    return 0;
}
//add_filter( 'wpiw_item_class', 'my_instagram_class' );
add_filter( 'wpiw_a_class', 'my_instagram_class' );
add_filter( 'wpiw_img_class', 'my_instagram_class' );

function my_instagram_class( $classes ) {
    $classes = "instagram-image";
    return $classes;
}
