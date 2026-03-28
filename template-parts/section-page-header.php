<?php
/**
 * Page header section
 */

$page_header_theme = 'background-gray';
$corner_accent_color = 'black-orange';
if ( ! empty( $args['bg-color'] ) && ! empty( $args['corner-accent-color'] ) ) {
	$page_header_theme = $args['bg-color'];
	$corner_accent_color = $args['corner-accent-color'];
} else {

	$page_id = get_the_ID();
	if ( is_home() ) {
		$page_id = get_option( 'page_for_posts' );
	}

	if ( get_field( 'page_header_theme', $page_id ) === 'purple' ) {
		$page_header_theme = 'background-purple';
		$corner_accent_color = 'bottom-right white-white';
	} else if ( get_field( 'page_header_theme', $page_id ) === 'pink' ) {
		$page_header_theme = 'background-pink';
		$corner_accent_color = 'bottom-right white-white';
	}
}

// Get the page header args and set defaults
$args = wp_parse_args( $args ?? [], array(
	'bg-color'            => $page_header_theme,
	'corner-accent-color' => $corner_accent_color,
	'title'               => get_the_title( get_the_ID() ),
	'title-class'         => 'h3',
	'title-label'         => '',
	'description'         => '',
) );

// Build the full class name for the corner accent
$corner_accent_classes = '';
if ( ! empty( $args['corner-accent-color'] ) ) {
	$corner_accent_classes = ' corner-accent ' . $args['corner-accent-color'];
}

$size = 'small';
if ( ! empty( $args['size'] ) ) {
	$size = $args['size'];
}
?>

<section id="page-header" class="page-header <?php echo esc_attr( $args['bg-color'] ) . esc_attr( $corner_accent_classes ); ?>" role="region" aria-labelledby="page-header-title">
	<div class="inner <?php echo esc_attr( $size ); ?>">
		<h1 id="page-header-title" class="page-header-title <?php echo esc_attr( $args['title-class'] ); ?>">
            <?php if ( ! empty( $args['title-label'] ) ) { ?>
                <span class="page-header-title-label"><?php echo esc_html( $args['title-label'] ); ?></span>
            <?php } ?>
            <?php echo wp_kses( $args['title'], array( 'span' => array( 'class' => array() ) ) ); ?>
        </h1>
		<?php if ( is_singular( 'post' ) ) { ?>
            <div class="entry-meta">
                <?php crispydiv_posted_on(); ?>
            </div>
		<?php } ?>
		<?php
            if ( ! empty( $args['description'] ) ) {
                ?>
                <div class="page-header-description">
                    <div class="page-header-description-inner">
                        <?php
						echo wp_kses_post( $args['description'] );
						if ( is_home() ) {
							echo get_search_form();
						}
						?>
                    </div>
                    <?php if ( is_page( 'services' ) ) { ?>
                        <div class="jump-to-section">
							<label class="screen-reader-text" for="jump-menu">Service Selector</label>
							<select id="jump-menu" onchange="location = this.options[this.selectedIndex].value;">
                                <option value="#">Select a Service</option>
                                <?php
								$services = crispydiv_get_child_pages_of_page( 'services' );
                                foreach ( $services->posts as $service ) {
                                    $service_title = $service->post_title;
                                    $service_slug = $service->post_name;
                                    ?>
                                    <option value="#<?php echo esc_attr( $service_slug ); ?>"><?php echo esc_html( $service_title ); ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    <?php } ?>
                </div>
                <?php
            }

            if ( is_search() ) {
                ?>
                <div class="page-header-description">
                    <?php
                    if ( have_posts() ) {
                        ?>
                        <p>Success! Explore the content below or search again.</p>
                        <?php
                    } else {
                        ?>
                        <p>Nothing matched your search terms. Try again with different keywords.</p>
                        <?php
                    }
                    ?>
                </div>
                <?php get_search_form(); ?>
                <?php
            }

            if ( is_404() ) {
                ?>
                <div class="page-header-description">
                    <p>The page you are looking for does not exist. Try search.</p>
                </div>
                <?php
                get_search_form();
            }
        ?>
	</div>
</section>
