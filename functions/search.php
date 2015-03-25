<?php

function bst_search_form( $form ) {
    $form = '<form class="form-inline" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
	<input class="form-search" type="text" value="' . get_search_query() . '" placeholder="' . esc_attr__('Search', 'bst') . '..." name="s" id="s" />';
    return $form;
}
add_filter( 'get_search_form', 'bst_search_form' );
