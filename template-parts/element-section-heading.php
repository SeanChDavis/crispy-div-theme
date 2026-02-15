<?php // Section Heading

// Template args
$title = '';
if ( ! empty( $args['title'] ) ) {
	$title = $args['title'];
}

$title_size = 'h3';
if ( ! empty( $args['title_size'] ) ) {
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

<div class="<?php echo $classes; ?>">
	<<?php echo $title_size; ?> class="section-title"><?php echo $title; ?></<?php echo $title_size; ?>>
	<div class="section-description">
		<p><?php echo $description; ?></p>
		<?php
		if ( $description_secondary_element ) :
			echo $description_secondary_element;
		endif;
		?>
	</div>
</div>
