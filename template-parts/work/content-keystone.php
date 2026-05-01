<?php
/**
 * Content for Keystone
 */
?>

<section class="work-section element-spacing top-semi-heavy border-bottom-over-white">
	<div class="work-content-grid">
		<div class="work-description">
			<span class="section-title h5">Keystone</span>
			<p>Keystone is a paid WordPress plugin that adds an internal knowledge base directly to any WordPress site. Organize SOPs, onboard new hires, assign content to team members by role or individually, and know that your team actually received the information — all from within WordPress admin. No new platform. No monthly SaaS fee.</p>
			<p>
				<?php
				crispydiv_button(array(
					'text'        => 'Visit Keystone',
					'url'         => 'https://keystone.crispydiv.com/',
					'target_self' => false,
					'classes'     => array('button', 'purple'),
				));
				?>
			</p>
		</div>
		<div class="work-display">
			<img class="framed" src="<?php echo esc_url( THEME_IMAGES . 'work/keystone-front-page-atf.jpg' ); ?>" alt="Screenshot of Keystone hero area">
		</div>
	</div>
</section>
<section class="general-grid large">
	<?php
	// Project Objective
	get_template_part( 'template-parts/element', 'grid-item', array(
		'title'       => 'Project Objective',
		'description' => '<p class="semi-heavy">Keystone was built to solve a real pain point for small teams that already run on WordPress: fragmented knowledge. The goal was to give teams one organized, familiar place — inside their existing WordPress site — to create, assign, and track internal documentation.</p><p>The challenge wasn\'t just building a knowledge base. It was making one simple enough for any WordPress user to manage while still covering the full workflow: organizing content into a structured hierarchy, assigning it to the right people, and tracking whether team members completed it.</p>',
	) );

	// Notable Features
	ob_start();
	?>
	<ul>
		<li>Structured knowledge hierarchy: <span class="semi-heavy">Sections group Modules</span>, which contain individual Items</li>
		<li>Two module types: <span class="semi-heavy">Required</span> (tracked completion, optional due dates, sequential locking) and <span class="semi-heavy">Reference</span> (browsable policies and guides, no completion required)</li>
		<li>Three item types: <span class="semi-heavy">Reading</span> (documents/guides), <span class="semi-heavy">Checklist</span> (step-by-step processes), and <span class="semi-heavy">Knowledge Check</span> (block-based quizzes)</li>
		<li>Managers can <span class="semi-heavy">assign modules to individuals, by role, by section, or to the entire team</span> in one action</li>
		<li><span class="semi-heavy">Completion tracking</span> at the module and item level — per user or across the whole team, with reporting views</li>
		<li>Member-facing dashboard showing <span class="semi-heavy">only assigned content</span>, with search and topic filtering</li>
		<li>Sold via Freemius at <span class="semi-heavy">$99/year</span> — no WordPress.org distribution</li>
	</ul>
	<?php
	$grid_item_content = ob_get_clean();
	get_template_part( 'template-parts/element', 'grid-item', array(
		'title'       => 'Notable Features',
		'description' => $grid_item_content,
	) );
	?>
</section>
<section class="screenshots-section">
	<?php
	get_template_part('template-parts/element', 'section-heading', array(
		'title'       => 'A Closer Look',
		'description' => 'You can <a href="https://keystone.crispydiv.com/" target="_blank">visit the Keystone marketing site</a> for a full feature overview. Or view the screenshots below to see the plugin in action.',
		'classes'     => 'top-light'
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
		<li><span class="semi-heavy">Building inside WordPress admin</span> meant working within WordPress's existing UI patterns — respecting the familiar environment while adding a fully custom experience that didn't feel out of place.</li>
		<li>Designing for small teams meant <span class="semi-heavy">resisting feature creep</span>. Every addition had to earn its place without overwhelming non-technical administrators who just need things to work.</li>
		<li>The assignment and tracking system required <span class="semi-heavy">careful data modeling</span> to support multiple assignment types (individual, role, section, all) while keeping the member-facing experience clean and focused.</li>
	</ul>
	<?php
	$grid_item_content = ob_get_clean();
	get_template_part( 'template-parts/element', 'grid-item', array(
		'title'       => 'Interesting Challenges',
		'description' => $grid_item_content,
	) );

	// CTA
	get_template_part( 'template-parts/element', 'grid-item', array(
		'title'          => 'Get Keystone',
		'description'    => '<p>Keystone is available for purchase at $99/year. It installs like any WordPress plugin and works with your existing WordPress users — no new accounts or platforms required.</p>',
		'button_text'    => 'Visit keystone.crispydiv.com',
		'button_url'     => 'https://keystone.crispydiv.com/',
		'button_classes' => array('button', 'purple', 'outline'),
		'button_target_self' => false,
		'flex_basis_no_auto' => true,
	) );
	?>
</section>
