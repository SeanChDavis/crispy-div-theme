<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Crispy_Div
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
add_filter( 'body_class', function( $classes ) {
	global $post;

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

    // Add body class for full-width page template
    if ( is_page_template( 'template-full-width.php' ) ) {
        $classes[] = 'full-width';
    }

	// Adds a class of page-{slug} for every page.
	if ( isset( $post ) ) {
		$classes[] = 'page-' . $post->post_name;

		if ( is_front_page() ) {
			$classes[] = 'page-front';
		}
	}

	if ( get_crispydiv_logo_by_color() ) {
		$classes[] = 'has-dark-header';
	} else {
		$classes[] = 'has-light-header';
	}

    // Conditionally add header color classes
    if (
			is_front_page()
			|| is_home()
			|| is_singular( 'post' )
			|| is_page( 'about' )
			|| is_page( 'contact' )
			|| is_page( 'why-wordpress' )
			|| is_page( 'brand-assets' )
	) {
        $classes[] = 'has-purple-header';
    } else if (
			is_post_type_archive( 'service' )
			|| is_singular( 'service' )
	) {
	    $classes[] = 'has-pink-header';
    } else {
	    $classes[] = 'has-gray-header';
    }

    if ( is_singular() && has_post_thumbnail( $post->ID ) ) {
        $classes[] = 'has-post-thumbnail';
    } else {
        $classes[] = 'has-no-post-thumbnail';
    }

	return $classes;
} );

/**
 * Pre get posts
 *
 * @param $query
 *
 * @return void
 */
add_action( 'pre_get_posts', function( $query ) {
	if ( is_search() && $query->is_main_query() && ! is_admin() ) {
		$query->set( 'post_type', 'post' );
	}
} );

/**
 * Excerpt adjustments
 *
 * @param $length
 *
 * @return int
 */
add_filter( 'excerpt_length', function( $length ) {
	return 20;
}, 999 );
add_filter( 'excerpt_more', function( $more ) {
	return '...';
} );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
add_action( 'wp_head', function() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
} );

