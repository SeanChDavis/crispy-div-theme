<?php
/**
 * Contact Page Template
 */

get_header();
crispydiv_page_header( array(
		'bg-color' => 'background-purple',
	'corner-accent-color' => 'bottom-right white-white',
	'title' => get_field( 'page_header_title' ) ?: get_the_title( get_the_ID() ),
	'description' => get_field( 'page_header_description' ) ?: '',
) );
?>

	<main id="site-content" class="contact-form-section site-main">
		<div class="small-cta-section element-spacing tiny background-purple-darker">
			<p><img src="<?php echo THEME_IMAGES . 'icons/circle-info-solid-full.svg'; ?>" alt="">Looking for a general chat with Sean? Try reaching out on his <a href="https://seanchdavis.com">personal website</a>.</p>
		</div>
		<div class="inner smedium">
			<div class="contact-form-grid">
				<div class="contact-form-grid-content">
					<?php echo get_field( 'contact_form', get_the_ID() ); ?>
				</div>
				<div class="kvk-details">
					<span class="subdued-title"><abbr title="Kamer van Koophandel">KVK</abbr> Details</span>
					<span class="semi-heavy">Number:</span> <em>99162024</em><br>
					<span class="semi-heavy">Business Name:</span> <em>Crispy Div</em><br>
					<span class="semi-heavy">Phone:</span> <em>+31684698107</em><br>
					<span class="semi-heavy">Email:</span> <em>mail@crispydiv.com</em><br>
					<span class="semi-heavy">Address:</span> <em>Willem Ruyslaan 225,<br>3063 ER Rotterdam</em>
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
