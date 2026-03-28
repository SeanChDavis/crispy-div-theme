<?php // Standard button output

$args = wp_parse_args( $args ?? [], array(
	'text'             => 'Learn More',
	'url'              => '#',
	'classes'          => array( 'button' ),
	'target_self'      => true,
	'alt_link_text'    => '',
	'alt_link_url'     => '',
	'alt_link_classes' => array( 'secondary-cta' ),
	'alt_target_self'  => true,
) );
?>

<a href="<?php echo esc_url( $args['url'] ); ?>"<?php echo ! empty( $args['classes'] ) ? ' class="' . esc_attr( implode( ' ', $args['classes'] ) ) . '"' : ''; ?> target="<?php echo $args['target_self'] ? '_self' : '_blank'; ?>"><?php echo esc_html( $args['text'] ); ?></a>
<?php if ( ! empty( $args['alt_link_text'] ) && ! empty( $args['alt_link_url'] ) ) { ?>
	<br>
	<a href="<?php echo esc_url( $args['alt_link_url'] ); ?>"<?php echo ! empty( $args['alt_link_classes'] ) ? ' class="' . esc_attr( implode( ' ', $args['alt_link_classes'] ) ) . '"' : ''; ?> target="<?php echo $args['alt_target_self'] ? '_self' : '_blank'; ?>"><?php echo esc_html( $args['alt_link_text'] ); ?></a>
<?php } ?>
