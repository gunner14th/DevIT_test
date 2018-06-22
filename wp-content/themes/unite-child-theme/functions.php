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

  register_taxonomy(
    'year',
    'films',
    array(
      'label' => __( 'Год' ),
      'rewrite' => array( 'slug' => 'year' )
    )
  );

  register_taxonomy(
    'genres',
    'films',
    array(
      'label' => __( 'Жанры' ),
      'rewrite' => array( 'slug' => 'genres' )
    )
  );

  register_taxonomy(
    'countries',
    'films',
    array(
      'label' => __( 'Страны' ),
      'rewrite' => array( 'slug' => 'countries' )
    )
  );

  register_taxonomy(
    'acters',
    'films',
    array(
      'label' => __( 'Актеры' ),
      'rewrite' => array( 'slug' => 'acters' )
    )
  );
}
add_action( 'init', 'create_post_type' );

