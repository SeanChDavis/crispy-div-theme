<?php
/**
 * Single service template content
 */
$the_slug = get_post_field( 'post_name', get_post() );
?>

<section id="<?php echo esc_attr( $the_slug ); ?>"
		 class="<?php echo esc_attr( $the_slug ); ?>-section service-section element-spacing medium">
	<div class="service-content-grid">
		<div class="service-description">
			<h2 class="section-title"><span class="wp-title-prefix">WordPress</span><?php echo esc_html( get_the_title() ); ?></h2>
			<?php
			// Service content description
			$content = get_the_content();
			if ( ! empty( $content ) ) {
				echo wp_kses_post( $content );
			}

			// CTA defaults
			$button_text    = 'Let\'s Work Together';
			$button_url     = THEME_CONTACT_URL;
			$button_classes = array( 'button', 'purple' );

			// Service type CTA overrides
			if ( 'theme-development' === $the_slug ) {
				$button_text = 'Start the Conversation';
			} elseif ( 'custom-development' === $the_slug ) {
				$button_text = 'Let\'s Talk Details';
			}

			// The shared CTA
			crispydiv_button( array(
				'text'    => $button_text,
				'url'     => $button_url,
				'classes' => $button_classes,
			) );
			?>
		</div>
		<div class="service-aside">
			<?php
			/**
			 * Content by section
			 */
			if ( 'plugin-integration' === $the_slug ) {
				?>
				<h3 class="subdued-title">Some of our favorite plugins and services</h3>
				<?php
				$customization_logos = get_customization_logos();
				if ( ! empty( $customization_logos ) ) {
					?>
					<div class="customizations-service-grid">
						<?php foreach ( $customization_logos as $logo ) { ?>
							<div class="customization-brand">
								<div class="customization-brand-inner">
									<?php $logo_name = $logo['alias'] ?? $logo['name']; ?>
									<a class="brand-logo-link" href="<?php echo esc_url( home_url( '/' . $logo['id'] ) ); ?>" target="_blank"><img
												class="logo <?php echo esc_attr( str_replace( ' ', '-', strtolower( $logo_name ) ) ); ?>-logo"
												src="<?php echo esc_url( THEME_IMAGES . 'logos/' . $logo['image'] ); ?>"
												alt="<?php echo esc_attr( $logo['name'] ); ?>"></a>
									<div class="brand-description"
										 id="brand-<?php echo esc_attr( $logo['id'] ); ?>"><?php echo esc_html( $logo['description'] ); ?></div>
								</div>
							</div>
						<?php } ?>
					</div>
					<?php
				}
			} elseif ( 'theme-development' === $the_slug ) {
				?>
				<h3 class="subdued-title" aria-hidden="true">Proven Design Practices</h3>
				<?php
				get_template_part( 'template-parts/mock-browser' );
			} elseif ( 'custom-development' === $the_slug ) {
				?>
				<div class="custom-development-accordion">
					<span class="subdued-title">Custom Development Examples</span>
					<div class="custom-development-example-accordion-items">
						<?php get_crispydiv_custom_dev_accordion(); ?>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>
