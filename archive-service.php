<?php
/**
 * Services archive page
 */

get_header();
crispydiv_page_header( array(
	'bg-color'            => 'background-pink',
	'corner-accent-color' => 'bottom-right white-white',
	'title'               => ucfirst(get_queried_object()->name . 's'),
	'description'         => 'Looking for a WordPress plugin or theme? Or perhaps you need to integrate a WordPress plugin into your existing site? We can help. Check out our offered services and reach out for more information.',
) );
?>

    <div class="services-wrap">
		<?php
		$services = new WP_Query( array(
			'post_type'      => 'service',
			'post_status'    => 'publish',
			'posts_per_page' => - 1,
		) );

		if ( $services->have_posts() ) {
			while ( $services->have_posts() ) {
				$services->the_post();

				$the_slug  = get_post_field( 'post_name', get_post() );
				$the_title = get_the_title( get_the_ID() );

				$wp_services = array(
					'plugin-integration',
					'theme-development',
					'custom-development'
				);

				if ( in_array( $the_slug, $wp_services ) ) {
					$the_title = '<span class="wp-title-prefix">WordPress</span>' . $the_title;
				}

				get_template_part( 'template-parts/content', 'service', array(
					'the-slug'  => $the_slug,
					'the-title' => $the_title,
				) );
			}
		}
		?>
    </div>

<?php
get_template_part( 'template-parts/section', 'footer-lead', array(
		'title' => 'Still have questions?',
		'description' => 'No problem! Send a general message and we\'ll chat. No obligations.',
		'classes' => 'border-y-over-white corner-accent black-orange',
) );
get_footer();