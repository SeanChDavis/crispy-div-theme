<?php

/**
 * Custom Dev accordion output
 */
function get_crispydiv_custom_dev_accordion(): void
{

	$custom_dev = new WP_Query( array(
		'post_type' => 'custom_development',
		'post_status' => 'publish',
		'posts_per_page' => -1,
		'order' => 'ASC',
	) );

	if ($custom_dev->have_posts()) :
		while ($custom_dev->have_posts()) :
			$custom_dev->the_post();
			?>
			<div class="custom-development-example-accordion-item">
				<div class="custom-development-example-accordion-item-header">
					<span class="custom-development-example-accordion-item-title">Custom <?php echo get_the_title(); ?></span>
					<span class="custom-development-example-accordion-item-icon"><img src="<?php echo THEME_IMAGES.'icons/plus-sharp-solid-full.svg'; ?>" alt=""></span>
				</div>
				<div class="custom-development-example-accordion-item-content">
					<?php echo get_the_content(); ?>
				</div>
			</div>
		<?php
		endwhile;
		wp_reset_postdata();
	endif;
}