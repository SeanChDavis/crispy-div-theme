<?php
/**
 * Content for Simple Course Creator
 */
?>

<section class="work-section element-spacing top-semi-heavy border-bottom-over-white">
	<div class="work-content-grid">
		<div class="work-description">
			<span class="section-title h5">Simple Course Creator (SCC)</span>
			<p>SCC is a WordPress plugin built to group blog posts together in "course." The key feature is that every blog post in a course will display a full list of all the other posts in that course. Essentially, this makes it easy for readers to read a certain series of blog posts in a specific order.</p>
			<p>
				<?php
				crispydiv_button(array(
					'text'    => 'See SCC in Action',
					'url'     => 'https://scc.crispydiv.com/',
					'target_self' => false,
					'classes' => array('button', 'purple'),
					'alt_link_text' => 'Download from GitHub',
					'alt_link_url' => 'https://github.com/SeanChDavis/simple-course-creator',
					'alt_target_self' => false,
				));
				?>
			</p>
		</div>
		<div class="work-display">
			<img class="framed" src="<?php echo esc_url( THEME_IMAGES . 'work/scc-front-page-atf.jpg' ); ?>" alt="">
		</div>
	</div>
</section>
<section class="general-grid large">
	<?php
	// Project Objective
	get_template_part( 'template-parts/element', 'grid-item', array(
		'title' => 'Project Objective',
		'description' => '<p class="semi-heavy">Simple Course Creator was built to solve a specific problem on a past WordPress information website. The goal was to collect existing blog posts across time and taxonomy and group them for focused, chronological reading. The list of posts needed to be easily displayed inside all the included posts.</p><p>Before creating Simple Course Creator, this could be done manually. It was tedious and inefficient. This plugin was built to streamline the manual process. Options were added to allow customization without abandoning the original focus.</p>',
	) );

	// Theme Features
	ob_start();
	?>
	<ul>
		<li>Uses <span class="semi-heavy">native WordPress functionality</span> similar to categories and tags to create courses</li>
		<li>Automatically <span class="semi-heavy">displays a list of all posts in a course</span> within each post</li>
		<li>Includes options to <span class="semi-heavy">customize the course list display</span>, focusing on sort, order, and style</li>
		<li>Inherits archive template from the active theme for a <span class="semi-heavy">dedicated course page</span> and uses settings for sort and order</li>
		<li>Supports an ecosystem of <span class="semi-heavy">add-on plugins</span> that add additional functionality</li>
	</ul>
	<?php
	$grid_item_content = ob_get_clean();
	get_template_part( 'template-parts/element', 'grid-item', array(
		'title' => 'Notable Features',
		'description' => $grid_item_content,
	) );
	?>
</section>
<?php if ( get_field( 'gallery_shortcode' ) ) : ?>
<section class="screenshots-section">
	<?php
	get_template_part('template-parts/element', 'section-heading', array(
		'title' => 'A Closer Look',
		'description' => 'You can <a href="https://scc.crispydiv.com/" target="_blank">browse the Simple Course Creator live demo site</a>. Or view the screenshots below to see its configured state with add-on plugins in use.',
		'classes' => 'top-light'
	));
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
		<li><span class="semi-heavy">Why not just make use of categories?</span> This was a valid question during the development of Simple Course Creator. Using a new "course" taxonomy needed to provide functionality that was not native to the category taxonomy.</li>
		<li>The system needed to allow advanced customization without overwhelming users with options and settings. To do so, a theme override system needed to be developed.</li>
		<li>A robust feature set may have been more than the average user needed. Deciding what to put in the core plugin and what would be reserved for add-ons was challenging.</li>
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
		'description' => '<p>If you\'re interested in contributing to Simple Course Creator or discussing possible features, open an issue on GitHub. If you\'d like to fork it and make it your own, that\'s fine too.</p>',
		'button_text'    => 'SCC GitHub Repository',
		'button_url'     => 'https://github.com/SeanChDavis/simple-course-creator',
		'button_classes' => array('button', 'purple', 'outline'),
		'button_target_self' => false,
		'flex_basis_no_auto' => true,
	) );
	?>
</section>