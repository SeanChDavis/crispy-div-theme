<?php // Element customization logos template part ?>

<div class="customization-logos-wrap element-spacing small background-gray">
	<span class="customizations-title subdued-title">Experienced with your favorite plugins, themes, libraries, and services:</span>
	<?php
	$customization_logos = get_customization_logos( array(
		'easy-digital-downloads',
		'gravity-forms',
		'advanced-custom-fields',
		'searchwp',
		'facetwp',
	) );
	if ( ! empty( $customization_logos ) ) {
		?>
		<div class="customizations-grid">
			<?php foreach ( $customization_logos as $logo ) { ?>
				<div class="customization-logo">
					<?php $logo_name = $logo['alias'] ?? $logo['name']; ?>
					<img class="logo <?php echo str_replace( " ", "-", strtolower( $logo_name ) ); ?>-logo" src="<?php echo THEME_IMAGES . 'logos/' . $logo['image']; ?>" alt="<?php echo $logo['name']; ?>">
				</div>
			<?php } ?>
		</div>
		<?php
	}
	?>
</div>
