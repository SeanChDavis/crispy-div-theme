<?php
/**
 * Work page template
 */
get_header();
crispydiv_page_header(array(
		'title'       => get_field('page_header_title') ?: get_the_title(get_the_ID()),
		'description' => get_field('page_header_description') ?: '',
));
?>

	<main id="site-content">
		<div class="small-cta-section element-spacing tiny background-purple-darker">
			<p>All projects below were built using WordPress.
				<a href="<?php echo home_url('/why-wordpress/'); ?>">Read more about why we choose WordPress.</a></p>
		</div>
		<section class="general-grid large">
			<?php
			get_template_part('template-parts/element', 'grid-item', array(
					'title'              => 'WordPress Starter Theme (WST)',
					'slug_for_img'       => 'work/wordpress-starter-theme',
					'description'        => 'WST is a WordPress theme built to provide a structured starting point for building WordPress websites.',
					'button_text'        => 'View Project Details',
					'button_url'         => home_url('/work/wordpress-starter-theme/'),
					'button_classes'     => array('button', 'purple'),
					'button_target_self' => true,
			));
			?>
		</section>
	</main>

<?php
get_template_part('template-parts/section', 'footer-lead', array(
		'classes'        => 'border-bottom-over-white corner-accent black-orange',
		'button_classes' => array('button'),
));
get_footer();
