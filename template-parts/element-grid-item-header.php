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
	<h3 class="grid-item-title"><?php echo $title; ?></h3>
</div>
