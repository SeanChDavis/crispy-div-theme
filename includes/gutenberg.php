<?php
/**
 * Add editor styles
 *
 * @return void
 */
function cd_editor_styles() {
	add_editor_style();
	$editor_styles_path = get_stylesheet_directory() . '/editor-styles.css';
	wp_enqueue_style( 'cd-editor-styles', get_theme_file_uri( 'editor-styles.css' ), false, file_exists( $editor_styles_path ) ? filemtime( $editor_styles_path ) : null, 'all' );
}
add_action( 'enqueue_block_editor_assets', 'cd_editor_styles' );