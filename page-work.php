<?php
/**
 * Work page template
 */
get_header();
crispydiv_page_header();
?>

	<main id="site-content">
		<div class="small-cta-section element-spacing tiny background-purple-darker">
			<p>All projects below were built using WordPress.
				<a href="<?php echo esc_url( home_url( '/why-wordpress/' ) ); ?>">Read more about why we choose WordPress.</a></p>
		</div>
		<section class="general-grid large">
			<?php
			$work = crispydiv_get_child_pages_of_page( 'work' );
			if ( $work->have_posts() ) {
				while ( $work->have_posts() ) {
					$work->the_post();
					get_template_part( 'template-parts/element', 'grid-item', array(
						'the_id'         => get_the_ID(),
						'title'          => get_the_title(),
						'description'    => get_field( 'page_header_description' ),
						'button_text'    => 'View Project Details',
						'button_url'     => get_the_permalink(),
						'button_classes' => array( 'button', 'purple' ),
					) );
				}
				wp_reset_postdata();
			}
			?>
		</section>
	</main>

<?php
get_template_part('template-parts/section', 'footer-lead', array(
		'classes'        => 'border-bottom-over-white corner-accent black-orange',
		'button_classes' => array('button'),
));
get_footer();
