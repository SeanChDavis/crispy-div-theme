<?php // Element Grid Item Header

// Template args
$title = '';
if ( ! empty( $args['title'] ) ) {
	$title = $args['title'];
}

$icon_file = '';
if ( ! empty( $args['icon_file'] ) ) {
	$icon_file = $args['icon_file'];
}
?>

<div class="grid-item-header">
	<img class="grid-item-icon" src="<?php echo esc_url( THEME_IMAGES . 'icons/' . $icon_file . '.svg' ); ?>" alt="">
	<span class="grid-item-title h4"><?php echo esc_html( $title ); ?></span>
</div>
