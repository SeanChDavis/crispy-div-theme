<?php
/**
 * Template part for displaying posts
 */

// Check for args
$args = wp_parse_args( $args ?? [], array(
	'is-services'       => false,
	'services-full'     => false,
	'services-with-cta' => false,
) );
?>

<div class="grid-item">
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'grid-item-content' ); ?>>
	    <?php crispydiv_post_thumbnail( get_the_ID() ); ?>
        <header class="entry-header grid-item-header">
			<?php
            if ( $args['is-services'] ) {
				?>
				<img class="grid-item-icon" src="<?php echo esc_url( THEME_IMAGES . 'icons/' . get_field( 'service_icon', get_the_ID() ) . '.svg' ); ?>" alt="">
				<?php
	            the_title( '<h2 class="entry-title grid-item-title h4">', '</h2>' );
            } else {
	            the_title( '<h2 class="entry-title grid-item-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            }
            ?>
        </header>
        <div class="entry-content grid-item-description">
			<?php
            if ( $args['is-services'] ) {
                ?>
                <p><?php echo wp_kses_post( get_field( 'service_description', get_the_ID() ) ); ?></p>
                <?php
                if ( $args['services-full'] ) {
                    ?>
                    <ul>
						<li><?php echo esc_html( get_field( 'service_features_list_feature_1', get_the_ID() ) ); ?></li>
						<li><?php echo esc_html( get_field( 'service_features_list_feature_2', get_the_ID() ) ); ?></li>
						<li><?php echo esc_html( get_field( 'service_features_list_feature_3', get_the_ID() ) ); ?></li>
                    </ul>
                    <?php
                }
            } else {
                the_excerpt();
            }
            ?>
        </div>
        <?php
        if ( $args['is-services'] ) {
	        if ( $args['services-with-cta'] ) {
		        $the_slug = get_post_field( 'post_name', get_the_ID() );
		        ?>
                <div class="cta">
			        <?php
			        crispydiv_button( array(
				        'text'    => get_field( 'service_cta_text' ) ?: 'Learn More',
				        'url'     => home_url( '/services/' ) . $the_slug,
				        'classes' => array( 'button', 'small', 'outline', 'orange' ),
			        ) );
			        ?>
                </div>
	            <?php
            }
        } else {
            ?>
            <div class="cta">
		        <?php
		        crispydiv_button( array(
			        'text'    => 'Keep Reading',
			        'url'     => get_permalink(),
			        'classes' => array( 'button', 'purple', 'small', 'outline' ),
		        ) );
		        ?>
            </div>
            <?php
        }
        ?>
    </article>
</div>
