<?php
function featured_products_cpt() {
  register_post_type( 'featured-products',
    array(
      'labels' => array(
          'name' => __( 'Featured Products' ),
          'singular_name' => __( 'Featued Product' ),
          'add_new_item' => __( 'Add Featured Product'),
          'edit_item' => __( 'Edit Featured Product'),
          'new_item' => __( 'New Featured Product'),
        ),
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'public' => true,
        'has_archive' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-id',
    )
  );
}
add_action('init', 'featured_products_cpt');
?>
