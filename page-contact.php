<?php
/**
 * Contact Page Template
 */

get_header();
crispydiv_page_header( array(
	'title' => get_field( 'page_header_title' ) ?: get_the_title( get_the_ID() ),
	'description' => get_field( 'page_header_description' ) ?: '',
) );
?>

	<main id="site-content" class="contact-form-section site-main">
		<div class="inner medium">
			<div class="contact-form-grid">
				<div class="contact-form-grid-content">
					<h4>Enter your project details below.</h4>
					<?php echo get_field( 'contact_form', get_the_ID() ); ?>
				</div>
				<div class="kvk-details">
					<h4>Looking for KVK details?</h4>
					<span class="semi-heavy">KVK Number:</span> <em>99162024</em><br>
					<span class="semi-heavy">Business Name:</span> <em>Crispy Div</em><br>
					<span class="semi-heavy">Phone:</span> <em>+31684698107</em><br>
					<span class="semi-heavy">Address:</span> <em>Willem Ruyslaan 225, 3063 ER Rotterdam</em>
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
