<?php
function taxonomy_order ( $query ) {

  if( $query->is_main_query() && $query->is_tax()) {

    $query->set( 'order', 'asc' );

  }
}
add_action('pre_get_posts', 'taxonomy_order');
?>