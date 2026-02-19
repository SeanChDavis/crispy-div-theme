<?php
/**
 * Template Name: Work
 * The template for displaying a single work page
 */
get_header();
crispydiv_page_header(array(
	'title'       => get_field('page_header_title') ?: get_the_title(get_the_ID()),
	'title-label' => 'Completed Work:',
	'description' => get_field('page_header_description') ?: '',
));

// Get the slug of the current page
$the_slug = get_post_field( 'post_name', get_post() );
?>

	<main id="site-content">
		<?php
		get_template_part('template-parts/element', 'work-breadcrumbs');
		get_template_part('template-parts/work/content', $the_slug);
		?>
	</main>

<?php
get_template_part( 'template-parts/section', 'footer-lead', array(
	'title' => 'Let\'s Have a Conversation',
	'description' => 'If you like what you see, let\'s work together. Just reach out.',
	'classes' => 'border-bottom-over-white medium center',
) );
get_footer();