<?php
/**
 * WST template
 */
get_header();
crispydiv_page_header(array(
	'title'       => get_field('page_header_title') ?: get_the_title(get_the_ID()),
	'title-label' => 'Completed Work:',
	'description' => get_field('page_header_description') ?: '',
));
?>

	<main id="site-content">
		<div class="small-cta-section element-spacing tiny background-purple-darker">
			<p><a href="<?php echo home_url('/work/'); ?>">All Completed Work</a> &rarr; <?php the_title( '<span class="semi-heavy">', '</span>' ); ?></p>
		</div>
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
							'classes' => array('button', 'purple'),
							'alt_link_text' => 'Download from GitHub',
							'alt_link_url' => 'https://github.com/SeanChDavis/wordpress-starter-theme',
							'alt_link_target_self' => false,
						));
						?>
					</p>
				</div>
				<div class="work-display">
					<img class="advanced-custom-fields-graphic framed" src="<?php echo THEME_IMAGES.'wst-front-page-atf.jpg'; ?>" alt="Screenshot of ACF example fields for a page hero">
				</div>
			</div>
		</section>
		<section class="general-grid large">
			<?php

			// Project Objectives
			ob_start();
			?>
			<p>WST was born out of necessity. Freelance developers in the WordPress community often struggle to find a good starting point for each project, leading to inconsistencies in their work and frustrations in their experiences as developers.</p>
			<p>WST aimed to address these challenges by providing a comprehensive, well-documented, and developer-friendly starter theme that includes best practices, documentation, and a focus on developer experience.</p>
			<p>Nothing in WST will feel foreign to developers who are familiar with WordPress core functionality, the Block Editor, and Bootstrap. Simplicity is paramount.</p>
			<?php
			$grid_item_content = ob_get_clean();
			get_template_part( 'template-parts/element', 'grid-item', array(
					'title' => 'Project Objectives',
					'description' => $grid_item_content,
					'icon_file' => 'bullseye-arrow-light-full'
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
					'title' => 'Notable Theme Features',
					'description' => $grid_item_content,
					'icon_file' => 'gear-complex-code-light-full',
			) );
			?>
		</section>
		<section class="screenshots-section">
			<?php
			get_template_part('template-parts/element', 'section-heading', array(
					'title' => 'Have A Closer Look',
					'description' => 'You can <a href="https://wst.crispydiv.com/" target="_blank">browse the WordPress Starter Theme live demo site here</a>. Or view the screenshots below to see WST in its minimally-configured state.',
			))
			?>
			<div class="screenshots-gallery element-spacing no-vertical-spacing">
				<?php echo do_shortcode('[rl_gallery id="325"]'); ?>
			</div>
		</section>
		<section class="general-grid large">
			<?php

			// Challenges
			ob_start();
			?>
			<ul>
				<li>WST needed to provide useful features without being opinionated. Not every theme needs the same features, and developers should be able to customize the theme to their needs without hassle.</li>
				<li>The WordPress Block Editor <em>is</em> opinionated. WST needed to be flexible enough to encourage developers to use the Block Editor without being forced into a specific design or layout.</li>
				<li>WST needed to look "crispy" right out of the box without presenting itself as a finished design. If needed, WST could stand on its own with limited customization.</li>
			</ul>
			<?php
			$grid_item_content = ob_get_clean();
			get_template_part( 'template-parts/element', 'grid-item', array(
				'title' => 'Interesting Challenges',
				'description' => $grid_item_content,
				'icon_file' => 'face-thinking-light-full',
			) );

			// CTA
			ob_start();
			?>
			<p>If you're interested in building your own WordPress theme, or if you're looking for a solid starting point for your next project, WST is a perfect option. If you'd like to contribute to the project or discuss possible features, let's chat on GitHub.</p>
			<?php
			$grid_item_content = ob_get_clean();
			get_template_part( 'template-parts/element', 'grid-item', array(
				'title' => 'Collaborate',
				'description' => $grid_item_content,
				'icon_file' => 'handshake-angle-light-full',
				'button_text'    => 'WST GitHub Repository',
				'button_url'     => 'https://github.com/SeanChDavis/wordpress-starter-theme',
				'button_classes' => array('button', 'purple'),
				'button_target_self' => false,
				'alt_link_text' => 'Open an Issue on GitHub',
				'alt_link_url' => 'https://github.com/SeanChDavis/wordpress-starter-theme/issues',
				'alt_link_target_self' => false,
				'flex_basis_no_auto' => true,
			) );
			?>
		</section>
	</main>

<?php
get_template_part('template-parts/section', 'footer-lead', array(
	'classes'        => 'border-bottom-over-white top-semi-heavy corner-accent black-orange',
	'button_classes' => array('button', 'purple'),
));
get_footer();
