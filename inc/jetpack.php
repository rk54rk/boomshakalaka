<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Boom Shakalaka
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function boom_shakalaka_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'boom_shakalaka_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function boom_shakalaka_jetpack_setup
add_action( 'after_setup_theme', 'boom_shakalaka_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function boom_shakalaka_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function boom_shakalaka_infinite_scroll_render
