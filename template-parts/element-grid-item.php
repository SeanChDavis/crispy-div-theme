<?php
/**
 * Template part for displaying grid item
 */

// Template args
if (isset($args)) {

	$args = wp_parse_args($args, array(
			'the_id'               => '',
			'title'                => '',
			'description'          => '',
			'icon_file'            => '',
			'button_text'          => 'Learn More',
			'button_url'           => '',
			'button_classes'       => array('button'),
			'button_target_self'   => true,
			'alt_link_text'        => 'Learn More',
			'alt_link_url'         => '',
			'alt_link_classes'     => array('secondary-cta'),
			'alt_link_target_self' => true,
			'flex_basis_no_auto'   => false,
			'classes'              => ''
	));
}
?>

<div class="grid-item <?php echo $args['classes']; ?>">
	<div class="grid-item-content">
		<?php
		if ( ! empty($args['title']) || ! empty($args['description'])) {

			// Get the featured image if it exists
			if ( ! empty($args['the_id']) && has_post_thumbnail($args['the_id'])) {
				crispydiv_post_thumbnail($args['the_id']);
			}

			// Display the title if it exists
			if ( ! empty($args['title'])) {
				?>
				<div class="grid-item-header">
					<?php if ( ! empty($args['icon_file'])) { ?>
						<img class="grid-item-icon" src="<?php echo THEME_IMAGES.'icons/'.$args['icon_file'].'.svg'; ?>" alt="">
					<?php } ?>
					<span class="grid-item-title h4"><?php echo $args['title']; ?></span>
				</div>
				<?php
			}

			// Display the description if it exists
			if ( ! empty($args['description'])) {
				?>
				<div class="grid-item-description <?php echo $args['flex_basis_no_auto'] ? 'flex-basis-no-auto' : ''; ?>">
					<?php echo wpautop($args['description']); ?>
				</div>
				<?php
			}

			// Display the button if values exist
			if ( ! empty($args['button_url'])) {
				?>
				<div class="cta">
					<?php
					crispydiv_button(array(
							'text'                 => $args['button_text'],
							'url'                  => $args['button_url'],
							'classes'              => $args['button_classes'],
							'target_self'          => $args['button_target_self'],
							'alt_link_text'        => $args['alt_link_text'],
							'alt_link_url'         => $args['alt_link_url'],
							'alt_link_classes'     => $args['alt_link_classes'],
							'alt_link_target_self' => $args['alt_link_target_self'],
					));
					?>
				</div>
				<?php
			}
		}
		?>
	</div>
</div>