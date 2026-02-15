<?php
/**
 * Brand Assets Template
 */

get_header();
crispydiv_page_header(array(
		'bg-color'            => 'background-purple',
		'corner-accent-color' => 'bottom-right white-white',
		'title'               => get_field('page_header_title') ?: get_the_title(get_the_ID()),
		'description'         => get_field('page_header_description') ?: '',
));
?>

	<main id="site-content">
		<div class="small-cta-section element-spacing tiny background-purple-darker">
			<p>
				<img src="<?php echo THEME_IMAGES.'icons/circle-info-solid-full.svg'; ?>" alt="">Crispy Div builds with self-hosted WordPress (<em>wordpress.org</em>), not WordPress as a service (<em>wordpress.com</em>).
			</p>
		</div>
		<section class="why-wordpress-section">
			<div class="section-heading element-spacing top-semi-heavy background-gray">
				<h3 class="section-title">Let's Talk Benefits</h3>
				<div class="section-description">
					<p>There are several reasons why WordPress is a great choice for your project. Many of those reasons become clearer over time as you use the platform. Remember, you can scale if you have a solid foundation.</p>
					<div class="button-container">
						<p><span class="subdued-title">Explore WordPress: </span>
							<?php
							crispydiv_button(array(
									'text'        => 'See Latest Release',
									'url'         => 'https://wordpress.org/download/',
									'classes'     => array('button', 'purple'),
									'target_self' => false
							));
							?>
						</p>
					</div>
				</div>
			</div>
			<div class="how-we-work-grid general-grid large">
				<div class="grid-item">
					<div class="grid-item-content">
						<?php
						get_template_part('template-parts/element', 'grid-item-header', array(
								'title'    => 'Ownership & Responsibility',
								'img_file' => 'circle-1-light-full',
						));
						?>
						<p>When you own a website using the WordPress script from <em>wordpress.org</em>,
							<strong>everything about the website belongs to you</strong>, including the data. This stands in stark contrast to many other modern platforms. You maintain complete control.
						</p>
						<p>That also makes every aspect of the website your responsibility. This can be scary, but it's a good thing. Your organization's needs will change over time.
							<strong>When the time comes that you need to pivot, control is essential.</strong></p>
					</div>
				</div>
				<div class="grid-item">
					<div class="grid-item-content">
						<?php
						get_template_part('template-parts/element', 'grid-item-header', array(
								'title'    => 'Flexibility & Customization',
								'img_file' => 'circle-2-light-full',
						));
						?>
						<p>All WordPress websites look quite similar after installation. Where you go from there is up to you. WordPress
							<a href="https://wordpress.org/plugins/" target="_blank">Plugins</a> are snippets of code that affect the functionality of your website. WordPress
							<a href="https://wordpress.org/themes/" target="_blank">Themes</a> use the template engine to control the structure and design of your website.
						</p>
						<p>
							<strong>Together, Plugins and Themes differentiate your website from others.</strong> You can take it as far as you'd like or keep it simple. Again, you have complete control.
						</p>
					</div>
				</div>
				<div class="grid-item">
					<div class="grid-item-content">
						<?php
						get_template_part('template-parts/element', 'grid-item-header', array(
								'title'    => 'Selective Scalability',
								'img_file' => 'circle-3-light-full',
						));
						?>
						<p>The beauty of Plugins is that they
							<strong>add only the functionality that you need</strong> if you choose them wisely. It is simpler to add necessary functionality when you need it than it is to navigate around unneeded functionality that just sits in your admin dashboard.
						</p>
						<p>A WordPress website can just as easily be turned into an e-commerce platform as it can be transformed into a community forum.
							<strong>You choose the functionality with intent.</strong></p>
					</div>
				</div>
				<div class="grid-item">
					<div class="grid-item-content">
						<?php
						get_template_part('template-parts/element', 'grid-item-header', array(
								'title'    => 'Community Activity',
								'img_file' => 'circle-4-light-full',
						));
						?>
						<p>Perhaps the best part about WordPress is its
							<strong>community of enthusiastic users and developers</strong>. Everything from bustling, unofficial support forums to million-dollar businesses has been built within the WordPress ecosystem. It's a world of its own.
						</p>
						<p>WordPress is tied to the livelihoods of many individuals and families around the world. Your success as a user is often tied to the success of the community.
							<strong>If there's something you need, there's a chance someone is ready to provide it.</strong>
						</p>
					</div>
				</div>
			</div>
		</section>

		<section class="border-bottom-over-white center">
			<div class="inner small">
				<div class="other-platforms">
					<div class="description">
						<p>
							<strong>Does that mean WordPress is a Crispy Div requirement?</strong> 🤔 Absolutely not! Crispy Div is a
							<em>web development</em> agency. WordPress is an option, not a requirement.
							Take a look at a few Crispy Div websites that don't use WordPress. Whatever your preference or need, we can help you build it.
						</p>
						<div class="cd-builds">
							<?php
							crispydiv_button(array(
									'text'        => 'PageMotor',
									'url'         => 'https://pm.crispydiv.com/',
									'classes'     => array('button outline'),
									'target_self' => false
							));
							crispydiv_button(array(
									'text'        => 'Astro',
									'url'         => 'https://astro.crispydiv.com/',
									'classes'     => array('button outline'),
									'target_self' => false
							));
							crispydiv_button(array(
									'text'        => 'React (Personal)',
									'url'         => 'https://seanchdavis.com/',
									'classes'     => array('button outline'),
									'target_self' => false
							));
							?>
						</div>
					</div>
					<div class="media">
						<img class="advanced-custom-fields-logo" src="<?php echo THEME_IMAGES.'platforms.svg'; ?>" alt="Logos of some supported platforms, tools, and services - React, Angular, Shopify, Shopify, PageMotor, Firebase, Vue, Tailwind CSS, Laravel">
					</div>
				</div>
			</div>
		</section>
	</main>

<?php
get_template_part('template-parts/section', 'footer-lead', array(
		'classes'        => 'border-bottom-over-white corner-accent black-orange',
		'button_classes' => array('button', 'purple'),
));
get_footer();
