<?php
/**
 * About page template
 */
get_header();
crispydiv_page_header( array(
	'bg-color' => 'background-purple',
	'corner-accent-color' => 'bottom-right white-white',
	'title' => get_field( 'page_header_title' ) ?: get_the_title( get_the_ID() ),
	'description' => get_field( 'page_header_description' ) ?: '',
) );
?>

	<main id="site-content">
		<div class="small-cta-section element-spacing tiny background-pink">
			<p><span class="semi-heavy color-white">Note:</span> Crispy Div is a registered business in the Netherlands but can accept clients from anywhere in the world.</p>
		</div>
		<section class="history-section background-gray">
			<div class="inner smedium">
				<div class="history-grid">
					<div class="history-grid-content">
						<p>Crispy Div is the brainchild of <a class="homepage-icon" href="https://seanchdavis.com/" title="Sean Davis Homepage" target="_blank">Sean Davis</a>, a web developer and designer from St. Louis, Missouri now living in Rotterdam, Netherlands. Sean started building websites in 2007 with a heavy focus on WordPress beginning in 2008 (<a href="https://profiles.wordpress.org/sdavis2702/" target="_blank">Sean's WordPress profile</a>).</p>
						<p>As the first employee and eventual Partner at <a href="https://sandhillsdev.com/about/" target="_blank">Sandhills Development</a>, Sean co-owned and helped design, develop, and maintain several popular WordPress plugins such as <span class="semi-heavy">Easy Digital Downloads</span>, <span class="semi-heavy">AffiliateWP</span>, and <span class="semi-heavy">Restrict Content Pro</span> before acquisition.</p>
						<p>Before his 7+ years at Sandhills, Sean developed a WordPress theme framework called <span class="semi-heavy">Volatyl</span> along with many other WordPress themes and plugins. Sean has also contributed to the <span class="semi-heavy">Twenty Sixteen</span> core WordPress theme, the popular WordPress starter theme <span class="semi-heavy">Underscores (_s)</span>, and <span class="semi-heavy">WordPress core</span> itself.</p>
					</div>
					<div class="history-grid-media">
						<div class="history-grid-media-inner">
							<div class="history-image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sean-davis-headshot.png" alt="Sean Davis" />
							</div>
							<p class="sean-label"><span class="name" aria-hidden="true">Sean Davis</span><span class="title">Web Developer & Designer</span><span class="education"><abbr title="Bachelor of Science">BSc</abbr> Information Systems</span></p>
							<div class="link-grid">
								<a class="homepage-icon" href="https://seanchdavis.com/" target="_blank"><img src="<?php echo THEME_IMAGES . 'icons/circle-user-sharp-solid-full.svg'; ?>" alt="Sean's Homepage"></a><a class="github-icon" href="https://github.com/SeanChDavis" target="_blank"><img src="<?php echo THEME_IMAGES . 'icons/github-brands-solid-full.svg'; ?>" alt="Sean's GitHub"></a><a class="wordpress-icon" href="https://profiles.wordpress.org/sdavis2702/" target="_blank"><img src="<?php echo THEME_IMAGES . 'icons/wordpress-brands-solid-full.svg'; ?>" alt="Sean's WordPress"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="who-works">
			<div class="section-heading element-spacing top-semi-heavy corner-accent black-orange">
				<h3 class="section-title h3">Working Together</h3>
				<div class="section-description">
					<p>Sean is the sole developer and designer behind Crispy Div. However, a network of talented individuals (curated by Sean) may come together to work on any given project. <strong>It all depends on the scope and needed resources.</strong> If we're a good fit for each other, here's generally how things go:</p>
				</div>
			</div>
			<div class="general-grid large border-top-over-white">
				<div class="grid-item">
					<div class="grid-item-content">
						<?php
						get_template_part( 'template-parts/element', 'grid-item-header', array(
								'title' => '1. Consult',
								'img_file' => 'comment-light-full',
						) );
						?>
						<p>Meet to discuss project goals and gather information about your target audience, brand, and any specific functionality that you want to include on the website.</p>
					</div>
				</div>
				<div class="grid-item">
					<div class="grid-item-content">
						<?php
						get_template_part( 'template-parts/element', 'grid-item-header', array(
								'title' => '2. Propose',
								'img_file' => 'presentation-screen-light-full',
						) );
						?>
						<p>Based on information gathered during consultation, you will be presented with a proposal outlining the scope of work, timeline, and cost for the project.</p>
					</div>
				</div>
				<div class="grid-item">
					<div class="grid-item-content">
						<?php
						get_template_part( 'template-parts/element', 'grid-item-header', array(
								'title' => '3. Design',
								'img_file' => 'palette-light-full',
						) );
						?>
						<p>Upon agreement, Crispy Div will start designing. This may include wireframes and mockups to give you an idea of how the website will look and function.</p>
					</div>
				</div>
				<div class="grid-item">
					<div class="grid-item-content">
						<?php
						get_template_part( 'template-parts/element', 'grid-item-header', array(
								'title' => '4. Develop',
								'img_file' => 'code-light-full',
						) );
						?>
						<p>With an approved design, the development phase will begin. This includes technical implementation and testing the website to ensure it is fully functional.</p>
					</div>
				</div>
				<div class="grid-item">
					<div class="grid-item-content">
						<?php
						get_template_part( 'template-parts/element', 'grid-item-header', array(
								'title' => '5. Launch',
								'img_file' => 'rocket-launch-light-full',
						) );
						?>
						<p>After successful design, development, and configuration, we are clear to launch your newly designed website and make it live for the public to enjoy.</p>
					</div>
				</div>
				<div class="grid-item">
					<div class="grid-item-content">
						<?php
						get_template_part( 'template-parts/element', 'grid-item-header', array(
								'title' => '6. Maintain',
								'img_file' => 'screwdriver-wrench-light-full',
						) );
						?>
						<p>If it makes sense for your business, Crispy Div will provide ongoing maintenance and support to ensure that the website stays up to date and is functioning properly.</p>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php
get_template_part( 'template-parts/section', 'footer-lead', array(
		'title' => 'Let\'s Have a Conversation',
		'description' => 'If you believe we\'re a good fit, let\'s work together. Just reach out.',
		'classes' => 'border-bottom-over-white medium center',
		'button_classes' => array( 'button', 'purple' ),
) );
get_footer();