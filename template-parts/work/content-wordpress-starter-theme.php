<?php
/**
 * Content for WordPress Starter Theme
 */
?>

<section class="work-section element-spacing top-semi-heavy border-bottom-over-white">
	<div class="work-content-grid">
		<div class="work-description">
			<span class="section-title h5">WordPress Starter Theme (WST)</span>
			<p>WST is a WordPress theme built to provide a structured starting point for building WordPress websites. With intelligent color options and Bootstrap's utility, grid, and reboot styles built-in, WST is designed for building unique layouts with minimal heavy lifting. Spend more time customizing existing features.</p>
			<p>
				<?php
				crispydiv_button(array(
					'text'    => 'Browse Theme Demo',
					'url'     => 'https://wst.crispydiv.com/',
					'target_self' => false,
					'classes' => array('button', 'purple'),
					'alt_link_text' => 'Download from GitHub',
					'alt_link_url' => 'https://github.com/SeanChDavis/wordpress-starter-theme',
					'alt_target_self' => false,
				));
				?>
			</p>
		</div>
		<div class="work-display">
			<img class="framed" src="<?php echo esc_url( THEME_IMAGES . 'wst-front-page-atf.jpg' ); ?>" alt="Screenshot of WordPress Starter Theme hero area">
		</div>
	</div>
</section>
<section class="general-grid large">
	<?php
	// Project Objective
	get_template_part( 'template-parts/element', 'grid-item', array(
		'title' => 'Project Objective',
		'description' => '<p class="semi-heavy">WordPress Starter Theme was born out of necessity. The goal was simple: give WordPress theme developers a starting point that handled heavy architecture and provided a solid foundation for building custom WordPress themes.</p><p>The theme needed to include common page templates, such as wide and narrow. It needed to give breathing room to build layouts within the WordPress Block Editor. And it needed to initiate common features like building page headers, supporting robust navigation, and having a design system that makes building systematic.</p>',
	) );

	// Theme Features
	ob_start();
	?>
	<ul>
		<li>Includes <span class="semi-heavy">Bootstrap (CSS) utilities, grid, and reboot</span></li>
		<li>Includes <span class="semi-heavy">Page Sections page template (CSS optimized to use the Group block as a full-width page section with constrained content inside)</span></li>
		<li><span class="semi-heavy">Customizable page headers</span> via core functionality (title and excerpt), individual templates via function parameters, or through Advanced Custom Fields page settings</li>
		<li>Desktop <span class="semi-heavy">menu with drop-down support and mobile menu with expandable submenus</span> on click</li>
		<li><span class="semi-heavy">Color scheme options in the Customizer, available for use in the Block Editor</span></li>
	</ul>
	<?php
	$grid_item_content = ob_get_clean();
	get_template_part( 'template-parts/element', 'grid-item', array(
		'title' => 'Notable Features',
		'description' => $grid_item_content,
	) );
	?>
</section>
<section class="screenshots-section">
	<?php
	get_template_part('template-parts/element', 'section-heading', array(
		'title' => 'A Closer Look',
		'description' => 'You can <a href="https://wst.crispydiv.com/" target="_blank">browse the WordPress Starter Theme live demo site</a>. Or view the screenshots below to see its minimally configured state.',
		'classes' => 'top-light'
	));

	if ( get_field( 'gallery_shortcode' ) ) {
		?>
		<div class="screenshots-gallery element-spacing no-vertical-spacing">
			<?php echo do_shortcode( get_field( 'gallery_shortcode' ) ); ?>
		</div>
		<?php
	}
	?>
</section>
<section class="general-grid large">
	<?php

	// Challenges
	ob_start();
	?>
	<ul>
		<li><span class="semi-heavy">How do you provide useful features without being opinionated?</span> Not every theme needs the same features, and developers should be able to customize the theme to their needs without hassle.</li>
		<li>The WordPress Block Editor <em>is</em> opinionated. Therefore, WST required the flexibility to encourage use of the Block Editor without enforcing a specific design or layout.</li>
		<li>Of course, WST needed to look "crispy" out of the box without presenting itself as a completed design. If needed, WST can stand on its own with limited customization.</li>
	</ul>
	<?php
	$grid_item_content = ob_get_clean();
	get_template_part( 'template-parts/element', 'grid-item', array(
		'title' => 'Interesting Challenges',
		'description' => $grid_item_content,
	) );

	// CTA
	get_template_part( 'template-parts/element', 'grid-item', array(
		'title' => 'Collaborate',
		'description' => '<p>If you\'re interested in building your own WordPress theme, or you\'re looking for a solid starting point for your next project, WST is a perfect option. To contribute to the project or discuss possible features, open an issue on GitHub.</p>',
		'button_text'    => 'WST GitHub Repository',
		'button_url'     => 'https://github.com/SeanChDavis/wordpress-starter-theme',
		'button_classes' => array('button', 'purple', 'outline'),
		'button_target_self' => false,
		'flex_basis_no_auto' => true,
	) );
	?>
</section>