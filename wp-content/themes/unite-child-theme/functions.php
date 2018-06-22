<?php 
function create_post_type() {
  register_post_type( 'films',
    array(
      'labels' => array(
        'name' => __( 'Фильмы' ),
        'singular_name' => __( 'Фильмы' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );