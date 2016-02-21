<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and the navigation menu
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */
?><!DOCTYPE html>

<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="edge=IE">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- Mobile:e support -->
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img style="width: 80px; position: relative; bottom: 5px;" src="http://www.programadores.cl/img/logo/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
    </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        	'container_id'      => 'bs-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker(),
		'menu_id' => 'primary-menu' )
            );
        ?>
    </div>
</nav>
