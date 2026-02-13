<?php
/**
 * Brand Assets Template
 */

get_header();
crispydiv_page_header(array(
		'bg-color'    => 'background-purple',
		'corner-accent-color' => 'bottom-right white-white',
		'title'       => get_field('page_header_title') ?: get_the_title(get_the_ID()),
		'description' => get_field('page_header_description') ?: '',
));
?>

	<main id="site-content" class="site-main border-bottom-over-white">
		<div class="small-cta-section element-spacing tiny background-gray">
			<p>Read more about why this page exists: <a href="<?php echo home_url( '/boost-your-brands-identity-with-a-brand-assets-page-on-your-website/' ); ?>">Boost Your Brand’s Identity with a Brand Assets Page</a></p>
		</div>
		<section class="all-assets-section">
			<div class="inner small">
				<span class="h2">Brand Colors</span>
				<div class="section-description">
					<p>Please use these colors responsibly for a cohesive look and feel. If you'd like to keep it simple, our two primary colors are purple <strong>(#341671)</strong> and orange <strong>(#F54952)</strong>.</p>
				</div>
				<div class="colors-grid">
					<div class="color-1">
						<span class="hex">#422680</span>
					</div>
					<div class="color-2">
						<span class="hex">#341671</span>
					</div>
					<div class="color-3">
						<span class="hex">#280659</span>
					</div>
					<div class="color-4">
						<span class="hex">#660f56</span>
					</div>
					<div class="color-5">
						<span class="hex">#ae2d68</span>
					</div>
					<div class="color-6">
						<span class="hex">#f54952</span>
					</div>
					<div class="color-7">
						<span class="hex">#161616</span>
					</div>
					<div class="color-8 light-color">
						<span class="hex">#f8f5fc</span>
					</div>
				</div>
				<span class="h2">Logos & Logomark</span>
				<div class="section-description">
					<p>Try to keep the contrast in mind when implementing the logo so that the text is legible. Also, be sure to give the logo room to breathe. Do not allow it to touch or overlap any other elements (subtle background design elements are okay).</p>
				</div>
				<div class="logos-grid">
					<div class="logo-white background-purple">
						<img src="<?php echo THEME_ASSETS . 'brand/crispy-div-logo-white.svg'; ?>" alt="Crispy Div Logo for dark backgrounds">
					</div>
					<div class="logomark background-pink">
						<img src="<?php echo THEME_ASSETS . 'brand/crispy-div-logo-mark.svg'; ?>" alt="Crispy Div Logomark for dark backgrounds">
					</div>
					<div class="logo-color background-gray">
						<img src="<?php echo THEME_ASSETS . 'brand/crispy-div-logo-color.svg'; ?>" alt="Crispy Div Logo for light backgrounds">
					</div>
					<div class="logomark background-white">
						<img src="<?php echo THEME_ASSETS . 'brand/crispy-div-logo-mark.svg'; ?>" alt="Crispy Div Logomark for light backgrounds">
					</div>
				</div>
				<span class="h2">Typography & Text</span>
				<div class="section-description">
					<p>You have no obligation to use our preferred font when referencing our brand. If you choose to do so, we use <a href="https://fonts.google.com/specimen/Raleway?query=ralew" target="_blank" rel="nofollow">Raleway</a> for both body (weight 500) and heading (weight 700 or 800) text. Our Brand name is <strong>Crispy Div</strong>. That's capital C and D with a space between the two words.</p>
				</div>
				<div class="brand-name-grid">
					<div class="brand-name-example background-gray correct">
						<span class="brand-name">Crispy&nbsp;Div</span>
						<span class="example-status">Correct</span>
					</div>
					<div class="brand-name-example background-gray incorrect">
						<span class="brand-name">CrispyDiv</span>
						<span class="example-status">Incorrect</span>
					</div>
					<div class="brand-name-example background-gray incorrect">
						<span class="brand-name">crispydiv</span>
						<span class="example-status">Incorrect</span>
					</div>
					<div class="brand-name-example background-gray incorrect">
						<span class="brand-name">crispy&nbsp;div</span>
						<span class="example-status">Incorrect</span>
					</div>
				</div>
				<span class="h2">Downloads</span>
				<div class="section-description">
					<p>Logo and logomark variations can be downloaded in a single .zip file.</p>
				</div>
				<div class="download-logos">
					<a href="<?php echo THEME_ASSETS . 'brand/crispy-div-brand-assets.zip'; ?>" download="crispy-div-brand-assets.zip" class="button purple">Download All Assets</a>
				</div>
			</div>
		</section>
	</main>

<?php
get_footer();
