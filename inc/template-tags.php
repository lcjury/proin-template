<?php
/**
 * Custom template tags for Proin
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 */


if ( ! function_exists( 'proin_posted_on' ) ) :
/**
 * Print HTML with meta information for the current post-date/time.
 *
 * @since Proin 1.0
 */
function proin_posted_on($before = '', $after = '') {

	$dateTime = esc_attr( get_the_date( 'c' ) );
	$date = esc_html( get_the_date() );
	return "$before<small>el </small><span class='entry-date'><time class='entry-date' datetime='$dateTime'>$date</time></span>$after";
	
}
endif;

if ( ! function_exists( 'proin_post_author' ) ) :
/**
 * Print HTML with meta information for the current post author
 *
 * @since Proin 1.0
 */
function proin_post_author($before = '', $after = '') {
	return $before.'<small>por: </small>'.get_the_author().$after;
}
endif;

if ( ! function_exists( 'proin_author_avatar' ) ) :
/**
 * Print HTML with meta information for the current post author
 *
 * @since Proin 1.0
 */
//https://en.gravatar.com/userimage/4098831/d6a5b642a263e90f08fedb86c6e9436b.jpg?size=200
function proin_author_avatar($before = '', $after = '') {
	$id = get_the_author_meta("ID");
	$avatar = get_avatar_url($id);
	return "$before<img class='circle circle-avatar' src='$avatar' alt='icon'>$after";
}
endif;

