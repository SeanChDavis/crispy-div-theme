<?php
/**
 * Template part for displaying grid item
 */

// Template args
$title = '';
if ( ! empty($args['title'])) {
	$title = $args['title'];
}

$description = '';
if ( ! empty($args['description'])) {
	$description = $args['description'];
}

$icon_file = '';
if ( ! empty($args['icon_file'])) {
	$icon_file = $args['icon_file'];
}
?>

<div class="grid-item">
	<div class="grid-item-content">

		<?php if ( ! empty($title) || ! empty($description)) { ?>

			<?php if ( ! empty($title)) { ?>
				<div class="grid-item-header">
					<?php if ( ! empty($icon_file)) { ?>
						<img class="grid-item-icon" src="<?php echo THEME_IMAGES.'icons/'.$icon_file.'.svg'; ?>" alt="">
					<?php } ?>
					<?php if ( ! empty($title)) { ?>
						<span class="grid-item-title h4"><?php echo $title; ?></span>
					<?php } ?>
				</div>
			<?php } ?>

			<?php if ( ! empty($description)) { ?>
				<div class="grid-item-description">
					<?php echo wpautop($description); ?>
				</div>
			<?php } ?>

		<?php } ?>

	</div>
</div>