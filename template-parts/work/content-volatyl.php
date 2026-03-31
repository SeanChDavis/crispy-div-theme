<?php
/**
 * Content for Volatyl WordPress Theme
 */
?>

<section class="work-section element-spacing top-semi-heavy border-bottom-over-white">
	<div class="work-content-grid">
		<div class="work-description">
			<span class="section-title h5">Volatyl WordPress Theme</span>
			<p>Volatyl is a WordPress theme built around a single principle: a small amount of input should do a lot of work. Pick one hue on a color wheel and Volatyl generates a complete, mathematically balanced color palette using the OKLCH color space. The layout adapts to your content. The block editor reflects the front end. No page builder, no demo content to clean up, no required plugins.</p>
			<p>
				<?php
				crispydiv_button( array(
					'text'           => 'Browse Volatyl Demo',
					'url'            => 'https://volatyl.crispydiv.com/',
					'target_self'    => false,
					'classes'        => array( 'button', 'purple' ),
					'alt_link_text'  => 'Download from GitHub',
					'alt_link_url'   => 'https://github.com/SeanChDavis/volatyl-wordpress-theme',
					'alt_target_self' => false,
				) );
				?>
			</p>
		</div>
		<div class="work-display">
			<img class="framed" src="<?php echo esc_url( THEME_IMAGES . 'work/volatyl-front-page-atf.jpg' ); ?>" alt="Screenshot of Volatyl WordPress Theme hero area">
		</div>
	</div>
</section>
<section class="general-grid large">
	<?php
	// Project Objective
	get_template_part( 'template-parts/element', 'grid-item', array(
		'title'       => 'Project Objective',
		'description' => '<p class="semi-heavy">Volatyl is built around one idea: a small amount of input should do a lot of work.</p><p>Pick a single hue and Volatyl generates a complete, coherent color palette — across multiple harmony schemes with fine-tuned controls for vibrancy, depth, and tint. One decision cascades into an entire visual system.</p><p>The same principle applies everywhere else. Layout responds to what\'s actually there. The block editor reflects the front end. Content uses standard WordPress blocks with no lock-in to proprietary formats or plugins. The goal is a theme that makes meaningful choices for you, so you can focus on what\'s unique about your site.</p>',
	) );

	// Notable Features
	ob_start();
	?>
	<ul>
		<li><span class="semi-heavy">OKLCH-based color system</span> — pick one hue and Volatyl generates a complete, perceptually uniform palette across six harmony schemes (monochromatic, complementary, analogous, triadic, split-complementary, tetradic)</li>
		<li>Three independent palette controls: <span class="semi-heavy">Palette Vibrancy, Background &amp; Text Tint, and Dark Section Depth</span></li>
		<li><span class="semi-heavy">Adaptive layout</span> — sidebars show when they have widgets and collapse when they don't; footer columns assemble based on content, not configuration</li>
		<li><span class="semi-heavy">Block native</span> — no page builder, no proprietary content formats; design tools carry directly into the block editor with WYSIWYG fidelity</li>
		<li><span class="semi-heavy">Canvas templates</span> strip the default wrapper so Group blocks can stack as independent full-page sections</li>
		<li>Per-page layout overrides for <span class="semi-heavy">dark header, jumbo title, hidden sidebar, and minimal footer</span> — every page can be completely unique</li>
	</ul>
	<?php
	$grid_item_content = ob_get_clean();
	get_template_part( 'template-parts/element', 'grid-item', array(
		'title'       => 'Notable Features',
		'description' => $grid_item_content,
	) );
	?>
</section>
<?php if ( get_field( 'gallery_shortcode' ) ) : ?>
<section class="screenshots-section">
	<?php
	get_template_part( 'template-parts/element', 'section-heading', array(
		'title'       => 'A Closer Look',
		'description' => 'You can <a href="https://volatyl.crispydiv.com/" target="_blank">browse the Volatyl live demo site</a>. Or view the screenshots below to see it in action.',
		'classes'     => 'top-light',
	) );
	?>
	<div class="screenshots-gallery element-spacing no-vertical-spacing">
		<?php echo do_shortcode( get_field( 'gallery_shortcode' ) ); ?>
	</div>
</section>
<?php endif; ?>
<section class="general-grid large">
	<?php

	// Challenges
	ob_start();
	?>
	<ul>
		<li>Generating a coherent palette from a single hue meant defining <span class="semi-heavy">rules for chroma, lightness, and harmony that hold up across any hue</span> — a hue of 0° (red) and a hue of 200° (blue) should both produce palettes that feel intentional, not accidental.</li>
		<li>Making layout "adaptive" without being opinionated required distinguishing between <span class="semi-heavy">what the theme should decide automatically and what the user should control</span> — sidebar collapse and footer assembly are automatic; per-page overrides are explicit.</li>
		<li>Achieving true <span class="semi-heavy">block editor fidelity</span> — where dark blocks trigger the same text and button adaptations on the back end as on the front — required careful coordination between theme.json, editor styles, and the generated CSS custom properties.</li>
	</ul>
	<?php
	$grid_item_content = ob_get_clean();
	get_template_part( 'template-parts/element', 'grid-item', array(
		'title'       => 'Interesting Challenges',
		'description' => $grid_item_content,
	) );

	// CTA
	get_template_part( 'template-parts/element', 'grid-item', array(
		'title'           => 'Use It or Contribute',
		'description'     => '<p>Volatyl is free, open source, and licensed under GPL-2.0. Download it from GitHub for your next WordPress project and have your site up and running in minutes. To contribute or discuss possible features, open an issue on GitHub.</p>',
		'button_text'     => 'Volatyl GitHub Repository',
		'button_url'      => 'https://github.com/SeanChDavis/volatyl-wordpress-theme',
		'button_classes'  => array( 'button', 'purple', 'outline' ),
		'button_target_self' => false,
		'flex_basis_no_auto' => true,
	) );
	?>
</section>
