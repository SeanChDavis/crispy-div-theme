<?php
/**
 * Contact Page Template
 */

get_header();
crispydiv_page_header( array(
	'title' => get_field( 'page_header_title' ) ?: get_the_title( get_the_ID() ),
	'title-class' => 'h2',
	'description' => get_field( 'page_header_description' ) ?: '',
) );
?>

	<main id="site-content" class="contact-form-section site-main">
		<div class="inner medium">
			<div class="contact-form-grid">
				<div class="contact-form-grid-content">
					<?php echo get_field( 'contact_form', get_the_ID() ); ?>
				</div>
			</div>
		</div>
	</main>

<?php
get_template_part( 'template-parts/section', 'footer-lead', array(
		'title' => 'Unsure what you\'re looking for?',
		'description' => 'Take a look at our wide range of services before reaching out.',
		'classes' => 'border-y-over-white corner-accent black-orange',
		'button_text' => 'View All Services',
		'button_url' => get_post_type_archive_link( 'service' ),
		'button_classes' => array( 'button', 'outline' ),
) );
get_footer();
