<?php // Footer Lead CTA

// Template args
$title = 'Got questions?';
if ( ! empty( $args['title'] ) ) {
	$title = $args['title'];
}

$description = 'Don\'t be shy! Send an email with your inquiry. No obligations.';
if ( ! empty( $args['description'] ) ) {
	$description = $args['description'];
}

$classes = 'footer-lead-cta element-spacing small';
if ( ! empty( $args['classes'] ) ) {
	$classes = $classes . ' ' . $args['classes'];
}

$button_text = 'Start the conversation';
if ( ! empty( $args['button_text'] ) ) {
	$button_text = $args['button_text'];
}

$button_url = home_url( '/contact' );
if ( ! empty( $args['button_url'] ) ) {
	$button_url = $args['button_url'];
}

$button_classes = array( 'button' );
if ( ! empty( $args['button_classes'] ) ) {
	$button_classes = $args['button_classes'];
}
?>

<section class="<?php echo $classes; ?>" role="region" aria-labelledby="footer-lead-title">
	<span id="footer-lead-title" class="cta-title h5"><?php echo $title; ?></span>
	<p><?php echo $description; ?></p>
	<?php
	crispydiv_button(
			array(
					'text'  => $button_text,
					'url'  => $button_url,
					'classes' => $button_classes,
			)
	);
	?>
</section>