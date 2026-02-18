<?php
/**
 * Front page of the site
 */

get_header();
?>

    <section id="page-header" class="page-header background-purple" role="region" aria-labelledby="page-header-title">
		<div class="inner corner-accent bottom-right white-white">
			<div class="content-wrap">
				<h1 class="page-header-title"><?php echo get_bloginfo( 'description' ); ?></h1>
				<div class="page-header-description">
					<?php echo crispydiv_site_description(); ?>
				</div>
				<p class="page-header-cta">
					<?php
					crispydiv_button( array(
							'text' => 'Work with Crispy Div',
							'url' => home_url( '/contact/' ),
							'classes' => array( 'button', 'outline', 'orange' )
					) );
					?>
				</p>
			</div>
		</div>
        <?php echo get_crispydiv_services_grid( true, true, array( 'three-col', 'background-purple' ) ); ?>
    </section>

	<main id="site-content">
		<section class="plugin-integration-section">
			<?php
			get_template_part( 'template-parts/element', 'customization-logos' );
			get_template_part( 'template-parts/element', 'section-heading', array(
					'title' => 'Plugin Functionality <br class="disappearing-br">Tweaked to Perfection',
					'title_size' => 'h2',
					'description' => 'The goal is to transform your WordPress site into an intentionally built tool with seamless plugin integrations. WordPress plugins are not always "one size fits all," or "plug & play." Sometimes you need a bit of customization.',
					'classes' => 'top-semi-heavy corner-accent black-orange'
			) );
			?>
			<div class="advanced-custom-fields-highlight element-spacing smedium">
				<div class="acf-grid">
					<div class="acf-highlight-content">
						<img class="advanced-custom-fields-logo" src="<?php echo THEME_IMAGES . 'logos/advanced-custom-fields-logo.png'; ?>" alt="Advanced Custom Fields Logomark">
						<span class="h5 acf-highlight-title semi-heavy">Tweak settings, not code.</span>
						<p><a href="<?php echo home_url( '/advanced-custom-fields/' ); ?>" target="_blank">Advanced Custom Fields</a> (ACF) is a powerful plugin that allows you to create custom fields for your WordPress site. We use it to create custom post types, taxonomies, fields, and more.</p>
						<p>With ACF's features, <span class="color-black semi-heavy">we make important elements of your site editable from the WordPress dashboard</span>. This allows you to control your site's content, regardless of type or structure, without having to deal with code or theme customizations.</p>
					</div>
					<div class="acf-graphic">
						<img class="advanced-custom-fields-graphic framed" src="<?php echo THEME_IMAGES . 'advanced-custom-fields-hero-area-fields.png'; ?>" alt="Screenshot of ACF example fields for a page hero">
					</div>
				</div>
			</div>
			<div class="facetwp-gravity-forms-grid">
				<div class="facetwp-grid-item element-spacing">
					<img class="logo facetwp-logo" src="<?php echo THEME_IMAGES . 'logos/facetwp-logo.png'; ?>" alt="">
					<p><a href="<?php echo home_url( '/facetwp/' ); ?>" target="_blank">FacetWP</a> introduces advanced filtering for WordPress. The smart functionality allows site visitors to control what content they see and find what they are looking for much faster.</p>
					<p>We use FacetWP in a number of ways, including blog post filtering. Let your readers <span class="color-black semi-heavy">filter blog posts by category, tag, or custom field</span> (including fields created by Advanced Custom Fields). It's intelligent, fast, lightweight, and incredibly useful.</p>
				</div>
				<div class="gravity-forms-grid-item element-spacing">
					<img class="logo gravity-forms-logo" src="<?php echo THEME_IMAGES . 'logos/gravity-forms-logo.svg'; ?>" alt="">
					<p><a href="<?php echo home_url( '/gravity-forms/' ); ?>" target="_blank">Gravity Forms</a> is more than just a custom form builder. Its functionality can handle everything from collecting payments via Stripe to routing detailed support requests to Help Scout.</p>
					<p>We use Gravity Forms to streamline interactions with users and maintain detailed records. With <span class="color-black semi-heavy">over 30 form fields to choose from</span> and integration capabilities through its API & webhook functionality, the possibilities are endless and exciting.</p>
				</div>
			</div>
			<div class="small-cta-section element-spacing tiny background-pink">
				<p>Curious about a specific plugin or service? <a href="<?php echo home_url( '/contact/' ); ?>">Send an email to ask questions.</a> No obligations.</p>
			</div>
		</section>

		<section class="theme-development-section background-purple">
			<?php
			get_template_part( 'template-parts/element', 'section-heading', array(
					'title' => 'Theme Building <br class="disappearing-br">Based on Real Data',
					'title_size' => 'h2',
					'description' => 'According to studies conducted by <a href="https://www.nngroup.com" target="_blank">Nielsen Norman Group</a>:',
					'classes' => 'subdued-links attribution top-semi-heavy corner-accent top-right white-white'
			) );
			?>
			<div class="nng-stats-grid general-grid three-col">
				<?php
				get_template_part( 'template-parts/element', 'grid-item', array(
						'title' => 'Above the Fold',
						'description' => 'Users spend 80% of their time on a website viewing information presented above the fold.',
						'icon_file' => 'browser-light-full',
				) );
				get_template_part( 'template-parts/element', 'grid-item', array(
						'title' => 'The "F" Pattern',
						'description' => 'Users scan content in an "F" pattern: horizontally from the top left, down the left side, and across the middle.',
						'icon_file' => 'eye-sharp-light-full',
				) );
				get_template_part( 'template-parts/element', 'grid-item', array(
						'title' => 'Skimmable Content',
						'description' => 'Users are more likely to engage with content presented as short paragraphs and clear headings.',
						'icon_file' => 'align-left-light-full',
				) );
				?>
			</div>
			<div class="corner-accent bottom-right white-white">
				<div class="mock-browser-grid element-spacing smedium">
					<?php get_template_part( 'template-parts/mock-browser' ); ?>
					<div class="design-description">
						<p>There's a reason why so many website designs follow the same content structure. It's proven, and it works.</p>
						<p>You've probably seen dozens of websites like this example.</p>
						<ul>
							<li>Logo top left, navigation top right</li>
							<li>Informative hero area above the fold</li>
							<li>3-column features highlight</li>
							<li>Logo pond for social proof</li>
							<li>Action buttons with high contrast</li>
						</ul>
						<p>There's a time and place for shock and awe, and that's when your ability to shock and awe holds value to your typical site visitor.</p>
						<p>In most other cases, it's a distraction. We won't reinvent the wheel with our designs. We'll convert your visitors instead.</p>
					</div>
				</div>
				<div class="the-standard-title element-spacing small">
					<span class="h4">Every <?php echo THEME_NAME; ?> website meets the <br class="disappearing-br">following standards. <span class="highlight-text">No exceptions.</span></span>
				</div>
			</div>
			<div class="standards-grid general-grid three-col">
				<?php
				get_template_part( 'template-parts/element', 'grid-item', array(
						'title' => 'Mobile-friendly',
						'description' => 'Both desktop and mobile designs are standard. More than 50% of all web traffic is mobile (<a href="https://gs.statcounter.com/platform-market-share/desktop-mobile/worldwide/#yearly-2015-2025" target="_blank">source</a>).',
						'icon_file' => 'mobile-light-full',
				) );
				get_template_part( 'template-parts/element', 'grid-item', array(
						'title' => 'Purpose-driven',
						'description' => 'Pages are designed to guide visitors towards an action, like clicking a link or reading specific text.',
						'icon_file' => 'bullseye-arrow-light-full',
				) );
				get_template_part( 'template-parts/element', 'grid-item', array(
						'title' => 'Accessible',
						'description' => 'Clarity, contrast, and usability are paramount, providing the best user experience for visitors.',
						'icon_file' => 'handshake-angle-light-full',
				) );
				get_template_part( 'template-parts/element', 'grid-item', array(
						'title' => 'Fast-loading',
						'description' => '47% of users expect a page to load in two seconds or less. 40% will leave after three seconds (<a href="https://www.thinkwithgoogle.com/consumer-insights/consumer-trends/mobile-page-speed-new-industry-benchmarks/" target="_blank">source</a>).',
						'icon_file' => 'timer-light-full',
				) );
				get_template_part( 'template-parts/element', 'grid-item', array(
						'title' => 'Carefully-designed',
						'description' => 'Even the tiny details matter. When viewed as a whole, you can feel if a design is <em>crisp</em> or sloppy.',
						'icon_file' => 'pen-ruler-light-full',
				) );
				get_template_part( 'template-parts/element', 'grid-item', array(
						'title' => 'Well-secured',
						'description' => 'Only trusted and maintained scripts and resources are used. Site owners and visitors are protected.',
						'icon_file' => 'shield-check-light-full',
				) );
				?>
			</div>
		</section>
		<div class="small-cta-section element-spacing tiny background-gray">
			<p><a href="<?php echo home_url( '/contact/' ); ?>">Reach out to start the conversation.</a> Let's see if we're a good fit. No obligations.</p>
		</div>
	</main>
    <?php

get_template_part( 'template-parts/section', 'footer-lead', array(
		'description' => 'Don\'t be shy! Send an email with your inquiry.',
		'classes' => 'border-bottom-over-white corner-accent black-orange',
) );
get_footer();
