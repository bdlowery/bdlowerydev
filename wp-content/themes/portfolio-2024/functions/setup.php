<?php 

// remove wordpress admin bar
add_filter('show_admin_bar', '__return_false');


// Are we using this for any reason? $todo
function register_site_menu() {
  register_nav_menu('Site menu',__( 'site-menu' ));
}
add_action( 'init', 'register_site_menu' );


// add stylesheet.
function site_styles() {
  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() .'/style.css' . "?ver=" . date("His")); // adding a version - to ensure that cache is busted
}
add_action( 'wp_enqueue_scripts', 'site_styles' );



//OPTIMIZE WORDPRESS ****

//Remove emoji support
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

//Remove wp-embed
add_action('wp_footer', function () {
  wp_dequeue_script('wp-embed');
});


add_action('wp_enqueue_scripts', function () {
  // // remove block library css
  wp_dequeue_style('wp-block-library');
  // // remove comment reply JS
  wp_dequeue_script('comment-reply');
});
?>