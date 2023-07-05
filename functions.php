<?php 

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Menu xe' ));
}

function remove_block_css() {
    wp_dequeue_style( 'wp-block-library' ); // WordPress core
    wp_dequeue_style( 'wp-block-library-theme' ); // WordPress core
    wp_dequeue_style( 'wc-block-style' ); // WooCommerce
}
add_action( 'init', 'register_my_menu' );


//Tạo post type Sản phẩm
function tao_custom_post_type(){
  $label = array(
      'name' => 'Sản phẩm',
      'singular_name' => 'Sản phẩm'
  );
  $args = array(
      'labels' => $label,
      'description' => 'Post type đăng sản phẩm',
      'supports' => array(
          'title',
          'editor',
          'excerpt',
          'author',
          'thumbnail',
          'comments',
          'trackbacks',
          'revisions',
          'custom-fields'
      ),
      'taxonomies' => array( 'category', 'post_tag' ),
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'show_in_admin_bar' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-cart',
      'can_export' => true,
      'has_archive' => true,
      'exclude_from_search' => false,
      'publicly_queryable' => true,
      'capability_type' => 'post'
  );
  register_post_type('san-pham', $args);
}
add_action('init', 'tao_custom_post_type');




// Hooking up our function to theme setup
add_theme_support( 'post-thumbnails' ); 
/* xoa css block wordpress khong su dung */
// Fully Disable Gutenberg editor.
add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Don't load Gutenberg-related stylesheets.
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );

?>