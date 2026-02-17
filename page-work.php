<?php
/**
 * Work page template
 */
get_header();
crispydiv_page_header(array(
		'title'       => get_field('page_header_title') ?: get_the_title(get_the_ID()),
		'description' => get_field('page_header_description') ?: '',
));
?>

	<main id="site-content">
		<div class="small-cta-section element-spacing tiny background-purple-darker">
			<p>All projects below were built using WordPress.
				<a href="<?php echo home_url('/why-wordpress/'); ?>">Read more about why we choose WordPress.</a></p>
		</div>
		<section class="work-section element-spacing medium border-bottom-over-white">
			<div class="work-content-grid">
				<div class="work-description">
					<span class="section-title h5">WordPress Starter Theme (WST)</span>
					<p>WST is a WordPress theme built to provide a structured starting point for building WordPress websites. With intelligent color options and Bootstrap's utility, grid, and reboot styles built-in, WST is designed for building unique layouts.</p>
					<p>
						<?php
						crispydiv_button(array(
								'text'    => 'View Project Details',
								'url'     => home_url('/work/wordpress-starter-theme/'),
								'classes' => array('button', 'purple'),
							'alt_link_text' => 'Download from GitHub',
								'alt_link_url' => 'https://github.com/SeanChDavis/wordpress-starter-theme',
							'alt_target_self' => false,
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
			get_template_part( 'template-parts/element', 'grid-item', array(
					'title' => 'Simple Course Creator',
					'description' => 'Simple Course Creator is designed to easily link WordPress posts together in a series and output that series list in the content of each included post.',
			) );
			get_template_part( 'template-parts/element', 'grid-item', array(
					'title' => '2. Propose',
					'description' => 'Based on information gathered during consultation, you will be presented with a proposal outlining the scope of work, timeline, and cost for the project.',
			) );
			?>
		</section>
	</main>

<?php
get_template_part('template-parts/section', 'footer-lead', array(
		'classes'        => 'border-bottom-over-white corner-accent black-orange',
		'button_classes' => array('button', 'purple'),
));
get_footer();
