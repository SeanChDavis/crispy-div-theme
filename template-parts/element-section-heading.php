<?php // Section Heading

// Template args
$title = '';
if ( ! empty( $args['title'] ) ) {
	$title = $args['title'];
}

$allowed_title_sizes = array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6' );
$title_size = 'h3';
if ( ! empty( $args['title_size'] ) && in_array( $args['title_size'], $allowed_title_sizes, true ) ) {
	$title_size = $args['title_size'];
}

$description = '';
if ( ! empty( $args['description'] ) ) {
	$description = $args['description'];
}

$description_secondary_element = '';
if ( ! empty( $args['description_secondary'] ) ) {
	$description_secondary_element = $args['description_secondary'];
}

$classes = 'section-heading element-spacing';
if ( ! empty( $args['classes'] ) ) {
	$classes = $classes . ' ' . $args['classes'];
}
?>

<div class="<?php echo esc_attr( $classes ); ?>">
	<<?php echo $title_size; ?> class="section-title"><?php echo esc_html( $title ); ?></<?php echo $title_size; ?>>
	<div class="section-description">
		<p><?php echo wp_kses_post( $description ); ?></p>
		<?php
		if ( $description_secondary_element ) :
			echo wp_kses_post( $description_secondary_element );
		endif;
		?>
	</div>
</div>
