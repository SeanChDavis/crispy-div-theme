<?php
/**
 * Add editor styles
 *
 * @return void
 */
function cd_editor_styles() {
	add_editor_style();
	wp_enqueue_style( 'cd-editor-styles', get_theme_file_uri( 'editor-styles.css' ), false, THEME_VERSION, 'all' );
}
add_action( 'enqueue_block_editor_assets', 'cd_editor_styles' );