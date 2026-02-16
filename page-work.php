<?php
/**
 * Work page template
 */
get_header();
crispydiv_page_header( array(
	'bg-color' => 'background-pink',
	'corner-accent-color' => 'bottom-right white-white',
	'title' => get_field( 'page_header_title' ) ?: get_the_title( get_the_ID() ),
	'description' => get_field( 'page_header_description' ) ?: '',
) );
?>

	<main id="site-content">
		<div class="small-cta-section element-spacing tiny background-gray">
			<p>All projects below were built using WordPress. <a href="<?php echo home_url( '/why-wordpress/' ); ?>">Read more about why we choose WordPress.</a></p>
		</div>
		<section class="work-section element-spacing medium border-bottom-over-white">
			<div class="work-content-grid">
				<div class="work-description">
					<span class="section-title h5">WordPress Starter Theme (WST)</span>
					<p>WST is a WordPress theme built to provide developers with a structured starting point for building WordPress websites.</p>
					<p><a class="button purple outline" href="https://wst.crispydiv.com/" target="_blank">View Project</a></p>
				</div>
				<div class="work-display">
					<img class="advanced-custom-fields-graphic framed" src="<?php echo THEME_IMAGES . 'advanced-custom-fields-hero-area-fields.png'; ?>" alt="Screenshot of ACF example fields for a page hero">
				</div>
			</div>
		</section>
	</main>

<?php
get_template_part('template-parts/section', 'footer-lead', array(
	'classes'        => 'border-bottom-over-white corner-accent black-orange',
	'button_classes' => array('button', 'purple'),
));
get_footer();
