<?php
/**
 * Template part for displaying grid item
 */

// Template args
$title = '';
if ( ! empty( $args['title'] ) ) {
	$title = $args['title'];
}

$description = '';
if ( ! empty( $args['description'] ) ) {
	$description = $args['description'];
}

$img_file = '';
if ( ! empty( $args['img_file'] ) ) {
	$img_file = $args['img_file'];
}
?>

<div class="grid-item">
	<div class="grid-item-content">
		<div class="grid-item-header">
			<?php if ( ! empty( $img_file ) ) { ?>
				<img class="grid-item-icon" src="<?php echo THEME_IMAGES . 'icons/' . $img_file . '.svg'; ?>" alt="">
			<?php } ?>
			<span class="grid-item-title h4"><?php echo $title; ?></span>
		</div>
		<div class="grid-item-description">
			<?php echo wpautop( $description ); ?>
		</div>
	</div>
</div>