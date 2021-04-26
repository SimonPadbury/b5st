<?php
/*
 * Search form in widget
 */

if ( ! function_exists('b5st_search_form') ) {

  function b5st_search_form( $form ) {
    $form = '<form class="d-flex mb-3" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
      <div class="input-group">
        <input class="form-control border-secondary" type="text" value="' . get_search_query() . '" placeholder="' . esc_attr_x('Search', 'b5st') . '..." name="s" id="s" />
        <button type="submit" id="searchsubmit" value="'. esc_attr_x('Search', 'b5st') .'" class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
      </div>
    </form>';
    return $form;
  }
}
add_filter( 'get_search_form', 'b5st_search_form' );