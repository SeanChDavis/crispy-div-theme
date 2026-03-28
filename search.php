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

get_template_part( 'template-parts/loop', 'posts' );

get_footer();