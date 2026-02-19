<?php

/**
 * Services grid output
 *
 * @return false|string
 */
function get_crispydiv_services_grid( $full = false, $with_cta = false, $classes = array() ) {
	$services = crispydiv_get_child_pages_of_page( 'services' );

	ob_start();

	if ( $services->have_posts() ) :
		?>
		<div class="services-grid general-grid <?php echo implode( ' ', $classes ); ?>">
			<?php
            while ( $services->have_posts() ) :
                $services->the_post();
                get_template_part( 'template-parts/element', 'grid-item-article', array(
                    'is-services' => true,
                    'services-full' => $full,
                    'services-with-cta' => $with_cta,
                ) );
            endwhile;
            wp_reset_postdata();
            ?>
		</div>
		<?php
	endif;

	return ob_get_clean();
}