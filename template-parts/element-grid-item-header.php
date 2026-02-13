<?php // Element Grid Item Header

// Template args
$title = '';
if ( ! empty( $args['title'] ) ) {
	$title = $args['title'];
}

$img_file = '';
if ( ! empty( $args['img_file'] ) ) {
	$img_file = $args['img_file'];
}
?>

<div class="grid-item-header">
	<img class="grid-item-icon" src="<?php echo THEME_IMAGES . 'icons/' . $img_file . '.svg'; ?>" alt="">
	<span class="grid-item-title h4"><?php echo $title; ?></span>
</div>
