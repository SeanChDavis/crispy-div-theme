<?php
/**
 * The template for displaying all single services
 */

get_header();
crispydiv_page_header( array(
	'bg-color'            => 'background-pink',
	'corner-accent-color' => 'bottom-right white-white',
	'title-label'         => 'Service:',
	'description'         => get_field( 'service_description', get_the_ID() ),
) );
$the_slug = get_post_field( 'post_name', get_post() );

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		$the_slug    = get_post_field( 'post_name', get_post() );
		$the_title   = get_the_title( get_the_ID() );
		$wp_services = array( 'plugin-integration', 'theme-development', 'custom-development' );

		if ( in_array( $the_slug, $wp_services ) ) {
			$the_title = '<span class="wp-title-prefix">WordPress</span>' . $the_title;
		}

		get_template_part( 'template-parts/content', 'service', array(
			'the-slug'  => $the_slug,
			'the-title' => $the_title,
		) );
	}
}

get_template_part( 'template-parts/section', 'footer-lead', array(
		'title' => 'But wait, there\'s more.',
		'description' => 'We offer a wide range of services to help you grow your business.',
		'classes' => 'background-gray corner-accent black-orange',
		'button_text' => 'View All Services',
		'button_url' => get_post_type_archive_link( 'service' ),
		'button_classes' => array( 'button', 'outline' ),
) );
get_footer();
