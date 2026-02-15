<?php
/**
 * Blog home
 */

get_header();

crispydiv_page_header( array(
    'bg-color' => 'background-purple',
    'corner-accent-color' => 'bottom-right white-white',
    'title' => 'Crispy Reads',
    'description' => 'Learn more about WordPress, web design, web development, and our favorite WordPress plugins and themes. Try searching for something specific.'
) );
?>

	<main id="site-content" class="site-main">
		<?php if ( have_posts() ) : ?>
            <div class="blog-grid general-grid large">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/element', 'grid-item-article' );
				endwhile;
				?>
            </div>
			<?php
			if ( $wp_query->max_num_pages > 1 ) :
				?>
                <div class="posts-navigation-wrap element-spacing tiny border-bottom-over-white">
					<?php the_posts_navigation(); ?>
                </div>
			<?php
			endif;
		endif;
		?>
	</main>

<?php
get_footer();
