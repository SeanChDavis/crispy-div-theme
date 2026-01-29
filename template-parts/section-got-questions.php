<?php // Got Questions? CTA

// Template args
$title = 'Got Questions?';
if ( ! empty( $args['title'] ) ) {
	$title = $args['title'];
}

$description = 'Don\'t be shy! Send an email with your inquiry. No obligations.';
if ( ! empty( $args['description'] ) ) {
	$description = $args['description'];
}
?>
<section class="footer-lead-cta element-spacing medium background-gray corner-accent black-orange">
	<span class="cta-title h4"><?php echo $title; ?></span>
	<p><?php echo $description; ?></p>
	<?php
	crispydiv_button(
			array(
					'text'  => 'Start the conversation',
					'url'  => home_url( '/contact' ),
					'classes' => array( 'button', 'outline' ),
			)
	);
	?>
</section>