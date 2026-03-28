<?php
/**
 * Search results
 */

get_header();

crispydiv_page_header( array(
    'corner-accent-color' => 'black-orange',
    'title-label'         => get_search_query() ? 'Search results for:' : 'Search results:',
    'title'               => get_search_query() ?: '',
) );
?>

	<main id="site-content" class="site-main">
		<?php
        if ( have_posts() ) :
            ?>
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
                <div class="posts-navigation-wrap element-spacing tiny">
			        <?php the_posts_navigation(); ?>
                </div>
	        <?php
	        endif;
        else :
            get_template_part( 'template-parts/content', 'none' );
        endif;
		?>
	</main>

<?php
get_footer();