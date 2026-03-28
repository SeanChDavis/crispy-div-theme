<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Crispy_Div
 */

get_header();
crispydiv_page_header( array(
    'title' => get_the_archive_title(),
    'description' => get_the_archive_description(),
	'size' => 'small',
) );

get_template_part( 'template-parts/loop', 'posts' );

get_footer();
