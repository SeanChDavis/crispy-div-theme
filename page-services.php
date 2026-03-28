<?php
/**
 * Template for Services page
 */
get_header();
crispydiv_page_header( array(
	'bg-color'            => 'background-pink',
	'corner-accent-color' => 'bottom-right white-white',
	'title'               => 'Our ' . ucfirst(get_the_title()),
	'description'         => 'Looking for a WordPress plugin or theme? Or perhaps you need to integrate a WordPress plugin into your existing site? We can help. Check out our offered services and reach out for more information.',
) );
?>

	<main id="site-content">
		<div class="small-cta-section element-spacing tiny background-gray">
			<p>Curious about a service not listed below? <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Send an email to ask questions.</a> No obligations.</p>
		</div>
		<div class="services-wrap">
			<?php
			$services = crispydiv_get_child_pages_of_page( 'services' );
			if ( $services->have_posts() ) {
				while ( $services->have_posts() ) {
					$services->the_post();
					get_template_part( 'template-parts/content', 'service' );
				}
				wp_reset_postdata();
			}
			?>
		</div>
	</main>

<?php
get_template_part( 'template-parts/section', 'footer-lead', array(
	'title' => 'Still have questions?',
	'description' => 'No problem! Send a general message and we\'ll chat. No obligations.',
	'classes' => 'border-y-over-white corner-accent black-orange',
) );
get_footer();
