<?php
/**
 * Brand Assets Template
 */

get_header();
crispydiv_page_header(array(
		'bg-color'            => 'background-pink',
		'corner-accent-color' => 'bottom-right white-white',
		'title'       => get_field('page_header_title') ?: get_the_title(get_the_ID()),
		'title-class' => 'h2',
		'description' => get_field('page_header_description') ?: '',
));
?>

	<main class="background-gray">
		<div class="inner medium">
			<h5>First, is WordPress a Crispy Div requirement? 🤔</h5>
			<div class="section-description">
				<div>
					<p><span class="semi-heavy">Absolutely not!</span> Crispy Div is a
						<em>web development</em> agency. WordPress is an option, not a requirement.
						<span class="semi-heavy">Take a look at a few Crispy Div websites that don't use WordPress.</span> Whatever your preference or need, we can help you build it.
					</p>
				</div>
			</div>
			<div class="cd-builds">
				<?php
				crispydiv_button(
						array(
								'text'    => 'PageMotor',
								'url'     => 'https://pm.crispydiv.com/',
								'classes' => array('button outline'),
						)
				);
				crispydiv_button(
						array(
								'text'    => 'Astro',
								'url'     => 'https://astro.crispydiv.com/',
								'classes' => array('button outline'),
						)
				);
				crispydiv_button(
						array(
								'text'    => 'React (Personal)',
								'url'     => 'https://seanchdavis.com/',
								'classes' => array('button outline'),
						)
				);
				?>
			</div>
		</div>
	</main>

	<section class="why-wordpress-section">
		<div class="section-heading element-spacing small">
			<h2 class="section-title h3">Now, let's talk benefits<small class="highlight-text">.</small></h2>
			<div class="section-description">
				<p>There are several reasons why WordPress is a great choice for your project.</p>
			</div>
		</div>
		<div class="how-we-work-grid general-grid large border-top-over-white">
			<div class="grid-item">
				<div class="grid-item-content">
                <span class="grid-item-icon">
					<img src="<?php echo THEME_IMAGES . 'icons/circle-1-light-full.svg'; ?>" alt="Number 1 Icon">
				</span>
					<h3 class="grid-item-title">Ownership & Responsibility</h3>
					<p>When you own a website using the WordPress script from <em>wordpress.org</em>, <strong>everything about the website belongs to you</strong>, including the data. This stands in stark contrast to many other modern platforms. You maintain complete control.</p>
					<p>That also makes every aspect of the website your responsibility. This can be scary, but it's a good thing. Your organization's needs will change over time. <strong>When the time comes that you need to pivot, control is essential.</strong></p>
				</div>
			</div>
			<div class="grid-item">
				<div class="grid-item-content">
                <span class="grid-item-icon">
					<img src="<?php echo THEME_IMAGES . 'icons/circle-2-light-full.svg'; ?>" alt="Number 2 Icon">
				</span>
					<h3 class="grid-item-title">Flexibility & Customization</h3>
					<p>All WordPress websites look quite similar after installation. Where you go from there is up to you. WordPress <a href="https://wordpress.org/plugins/" target="_blank">Plugins</a> are snippets of code that affect the functionality of your website. WordPress <a href="https://wordpress.org/themes/" target="_blank">Themes</a> use the template engine to control the structure and design of your website.</p>
					<p><strong>Together, Plugins and Themes differentiate your website from others.</strong> You can take it as far as you'd like or keep it simple. Again, you have complete control.</p>
				</div>
			</div>
			<div class="grid-item">
				<div class="grid-item-content">
                <span class="grid-item-icon">
					<img src="<?php echo THEME_IMAGES . 'icons/circle-3-light-full.svg'; ?>" alt="Number 3 Icon">
				</span>
					<h3 class="grid-item-title">Selective Scalability</h3>
					<p>The beauty of Plugins is that they <strong>add only the functionality that you need</strong> if you choose them wisely. It is simpler to add necessary functionality when you need it than it is to navigate around unneeded functionality that just sits in your admin dashboard.</p>
					<p>A WordPress website can just as easily be turned into an e-commerce platform as it can be transformed into a community forum. <strong>You choose the functionality with intent.</strong></p>
				</div>
			</div>
			<div class="grid-item">
				<div class="grid-item-content">
                <span class="grid-item-icon">
					<img src="<?php echo THEME_IMAGES . 'icons/circle-4-light-full.svg'; ?>" alt="Number 4 Icon">
				</span>
					<h3 class="grid-item-title">Community Activity</h3>
					<p>Perhaps the best part about WordPress is its <strong>community of enthusiastic users and developers</strong>. Everything from bustling, unofficial support forums to million-dollar businesses have been built within the WordPress ecosystem. It's a world of its own.</p>
					<p>WordPress is tied to the livelihoods of many individuals and families around the world. Your success as a user is often tied to the success of the community. <strong>If there's something you need, there's a chance someone is ready to provide it.</strong></p>
				</div>
			</div>
		</div>
	</section>

<?php
get_template_part( 'template-parts/section', 'got-questions' );
get_footer();
