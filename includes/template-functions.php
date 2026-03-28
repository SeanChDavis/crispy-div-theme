<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Crispy_Div
 */

/**
 * Get the effective page ID for the current request,
 * accounting for the blog posts page.
 *
 * @return int|null
 */
function crispydiv_get_current_page_id() {
	if ( is_home() ) {
		return (int) get_option( 'page_for_posts' );
	}
	global $post;
	return isset( $post ) ? $post->ID : null;
}


/**
 * Adds custom classes to the array of body classes.
 *
 * @param  array  $classes  Classes for the body element.
 *
 * @return array
 */
add_filter('body_class', function ($classes) {
	global $post;

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular()) {
		$classes[] = 'hfeed';
	}

	// Add body class for full-width page template
	if (is_page_template('template-full-width.php')) {
		$classes[] = 'full-width';
	}

	// Adds a class of page-{slug} for every page.
	if (isset($post)) {
		$classes[] = 'page-'.$post->post_name;

		if (is_front_page()) {
			$classes[] = 'page-front';
		}
	}

	if (get_crispydiv_logo_by_color()) {
		$classes[] = 'has-dark-header';
	} else {
		$classes[] = 'has-light-header';
	}

	$page_id = crispydiv_get_current_page_id();

	// Conditionally add header color classes
	if (
		is_singular('post')
		|| (get_field('page_header_theme', $page_id) == 'purple') && ! is_archive()
	) {
		$classes[] = 'has-purple-header';
	} elseif (
		(get_field('page_header_theme', $page_id) == 'pink')
	) {
		$classes[] = 'has-pink-header';
	} else {
		$classes[] = 'has-gray-header';
	}

	if (is_singular() && has_post_thumbnail($page_id)) {
		$classes[] = 'has-post-thumbnail';
	} else {
		$classes[] = 'has-no-post-thumbnail';
	}

	return $classes;
});

/**
 * Custom page header
 *
 * @return bool
 */
function get_crispydiv_logo_by_color() {
	$page_id = crispydiv_get_current_page_id();

	if (
		( get_field( 'page_header_theme', $page_id ) == 'purple' )
		|| ( get_field( 'page_header_theme', $page_id ) == 'pink' )
		|| is_singular( 'post' )
	) {
		return true;
	}

	return false;
}

/**
 * Pre get posts
 *
 * @param $query
 *
 * @return void
 */
add_action('pre_get_posts', function ($query) {
	if (is_search() && $query->is_main_query() && ! is_admin()) {
		$query->set('post_type', 'post');
	}
});

/**
 * Add excerpts to pages.
 *
 * @return void
 */
function crispy_div_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'crispy_div_add_excerpts_to_pages' );

/**
 * Excerpt adjustments
 *
 * @param $length
 *
 * @return int
 */
add_filter('excerpt_length', function ($length) {
	return 20;
}, 999);
add_filter('excerpt_more', function ($more) {
	return '...';
});

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
add_action('wp_head', function () {
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
});

