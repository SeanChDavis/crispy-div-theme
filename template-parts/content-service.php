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

$custom_dev_examples = array(
		array(
				'title' => 'Custom Post Types',
				'desc'  => 'Enhance your WordPress site with custom post types, tailored to your specific needs. Whether you need to manage custom products, services, or any other type of content, we can build custom post types that fit your requirements.',
		),
		array(
				'title' => 'Custom API Integrations',
				'desc'  => 'Use custom API integrations to integrate your WordPress site with third-party services like Stripe, Mailchimp, and more. We can also create custom API integrations for specific needs.',
		),
		array(
				'title' => 'Custom User Roles',
				'desc'  => 'Use custom user roles to manage access to specific sections of your WordPress site. This works for both front-end and back-end users. We can also create custom user roles for specific needs.',
		),
		array(
				'title' => 'Custom Taxonomies',
				'desc'  => 'Fine tune your WordPress site with custom taxonomies. This allows you to create custom categories and tags that fit your specific needs. We can also create custom taxonomies for custom post types.',
		),
		array(
				'title' => 'Custom Shortcodes',
				'desc'  => 'Shortcodes make it easy to add custom functionality to your WordPress site without writing a single line of code. We can create custom shortcodes that fit your specific needs.',
		),
		array(
				'title' => 'Custom Widgets',
				'desc'  => 'Widgets are a time-tested way to display custom content on your WordPress site. We can create custom widgets that fit your specific needs.',
		),
		array(
				'title' => 'Custom Theme Options',
				'desc'  => 'Theme customization options allow you to customize the look and feel of your WordPress site without writing a single line of code. We can create custom theme customization options that fit your specific needs.',
		),
		array(
				'title' => 'Custom Login & Registration',
				'desc'  => 'Secure your WordPress site with custom login and registration pages. Branded logins and registration forms are a great way to increase user engagement and increase conversion rates.',
		),
);
?>

<section id="<?php echo $args['the-slug']; ?>"
		 class="<?php echo $args['the-slug']; ?>-section service-section element-spacing large">
	<div class="service-content-grid">
		<div class="service-description">
			<h2 class="section-title h3"><?php echo $args['the-title']; ?></h2>
			<?php
			// Service content description
			$content = get_the_content(get_the_ID());
			if ( ! empty($content)) {
				echo $content;
			} else {
				echo '<p>'.get_field('service_description', get_the_ID()).'</p>';
			}

			// CTA defaults
			$button_text      = 'Let\'s Work Together';
			$button_url       = home_url('/contact/');
			$button_classes   = array('button', 'purple');
			$alt_link_text    = '';
			$alt_link_url     = '';
			$alt_link_classes = array('secondary-cta');

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
					'classes'          => $button_classes,
					'alt_link_text'    => $alt_link_text,
					'alt_link_url'     => $alt_link_url,
					'alt_link_classes' => $alt_link_classes,
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
												alt="<?php echo $logo['name'].' - '.$logo['description']; ?>"
												aria-describedby="<?php echo $logo['description']; ?>"></a>
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
				<h3 class="subdued-title">Proven Design Practices</h3>
				<?php
				get_template_part('template-parts/mock-browser');
			} elseif ('custom-development' === $args['the-slug']) {
				?>
				<div class="custom-development-accordion">
					<span class="subdued-title">Custom Development Examples</span>
					<div class="custom-development-example-accordion-items">

						<?php
						foreach ($custom_dev_examples as $example) {
							?>
							<div class="custom-development-example-accordion-item">
								<div class="custom-development-example-accordion-item-header">
									<span class="custom-development-example-accordion-item-title"><?php echo $example['title'] ?></span>
									<span class="custom-development-example-accordion-item-icon">
									<img src="<?php echo THEME_IMAGES.'icons/plus-sharp-solid-full.svg'; ?>" alt="Plus Icon">
								</span>
								</div>
								<div class="custom-development-example-accordion-item-content">
									<p><?php echo $example['desc'] ?></p>
								</div>
							</div>
							<?php
						}
						//						$custom_functionality = get_field( 'custom_development_example', get_the_ID() );
						//						if ( ! empty( $custom_functionality ) ) {
						//							foreach ( $custom_functionality as $functionality ) {
						//								?>
						<!--                                <div class="custom-development-example-accordion-item">-->
						<!--                                    <div class="custom-development-example-accordion-item-header">-->
						<!--                                        <span class="custom-development-example-accordion-item-title">--><?php //echo $functionality['title']; ?><!--</span>-->
						<!--                                        <span class="custom-development-example-accordion-item-icon"><i-->
						<!--                                                    class="fa-solid fa-plus"></i></span>-->
						<!--                                    </div>-->
						<!--                                    <div class="custom-development-example-accordion-item-content">-->
						<!--										--><?php //echo $functionality['description']; ?>
						<!--                                    </div>-->
						<!--                                </div>-->
						<!--								--><?php
						//							}
						//						}
						?>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>