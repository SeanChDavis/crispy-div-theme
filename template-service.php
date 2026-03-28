<?php
/**
 * Template Name: Service
 * The template for displaying a single service
 */

get_header();
crispydiv_page_header( array(
	'title-label'         => 'Service:',
	'description'         => get_field( 'service_description', get_the_ID() ),
) );
$the_slug = get_post_field( 'post_name', get_post() );
?>

	<main id="site-content">
		<div class="small-cta-section element-spacing tiny background-gray">
			<p>Can't find the service you're looking for? No worries. <a href="<?php echo esc_url( THEME_CONTACT_URL ); ?>">Send an email to ask questions.</a></p>
		</div>
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', 'service' );
			}
			wp_reset_postdata();
		}
		?>
	</main>

<?php
get_template_part( 'template-parts/section', 'footer-lead', array(
	'title' => 'But wait, there\'s more.',
	'description' => 'We offer a wide range of services to help you grow your business.',
	'classes' => 'border-y-over-white corner-accent black-orange',
	'button_text' => 'View All Services',
	'button_url' => home_url( '/services/' ),
	'button_classes' => array( 'button' ),
) );
get_footer();
