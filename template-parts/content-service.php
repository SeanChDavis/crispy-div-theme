<?php
/**
 * Single service template content
 */

if (isset($args)) {

	// Set default values for the arguments
	$args = wp_parse_args($args, array(
			'the-slug'  => get_post_field('post_name', get_post()),
			'the-title' => get_the_title(get_the_ID()),
	));
}
?>

<section id="<?php echo $args['the-slug']; ?>"
		 class="<?php echo $args['the-slug']; ?>-section service-section element-spacing medium">
	<div class="service-content-grid">
		<div class="service-description">
			<span class="section-title"><?php echo $args['the-title']; ?></span>
			<?php
			// Service content description
			$content = get_the_content(get_the_ID());
			if ( ! empty($content)) {
				echo $content;
			}

			// CTA defaults
			$button_text      = 'Let\'s Work Together';
			$button_url       = home_url('/contact/');
			$button_classes   = array('button', 'purple');

			// Service type CTA overrides
			if ('theme-development' === $args['the-slug']) {
				$button_text = 'Start the Conversation';
			} elseif ('custom-development' === $args['the-slug']) {
				$button_text = 'Let\'s Talk Details';
			}

			// The shared CTA
			crispydiv_button(array(
					'text'             => $button_text,
					'url'              => $button_url,
					'classes'          => $button_classes
			));
			?>
		</div>
		<div class="service-aside">
			<?php
			/**
			 * Content by section
			 */
			if ('plugin-integration' === $args['the-slug']) {
				?>
				<h3 class="subdued-title">Some our favorite plugins and services</h3>
				<?php
				$customization_logos = get_customization_logos();
				if ( ! empty($customization_logos)) {
					?>
					<div class="customizations-service-grid">
						<?php foreach ($customization_logos as $logo) { ?>
							<div class="customization-brand">
								<div class="customization-brand-inner">
									<?php $logo_name = $logo['alias'] ?? $logo['name']; ?>
									<a class="brand-logo-link" href="<?php echo THEME_URI.'/'.$logo['id']; ?>" target="_blank"><img
												class="logo <?php echo str_replace(" ", "-",
														strtolower($logo_name)); ?>-logo"
												src="<?php echo THEME_IMAGES.'logos/'.$logo['image']; ?>"
												alt="<?php echo $logo['name']; ?>"></a>
									<div class="brand-description"
										 id="<?php echo $logo['description']; ?>"><?php echo $logo['description']; ?></div>
								</div>
							</div>
						<?php } ?>
					</div>
					<?php
				}
			} elseif ('theme-development' === $args['the-slug']) {
				?>
				<h3 class="subdued-title" aria-hidden="true">Proven Design Practices</h3>
				<?php
				get_template_part('template-parts/mock-browser');
			} elseif ('custom-development' === $args['the-slug']) {
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