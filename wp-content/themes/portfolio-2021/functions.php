<?php

include("functions/utilities.php");

function getFile($path)
{
  return dirname(__FILE__) . "/" . $path;
}

function stickySaveWidgetStyles()
{
  echo '<style>
    .wp-admin #poststuff {
      display: flex;
      flex-direction: row;
    }

    #post-body.columns-2 #postbox-container-1 {
      min-height: 100%;
    }

    .wp-admin #poststuff #post-body.columns-2 #side-sortables {
      position: sticky;
      top: 40px;
    }
  </style>';
}
// add_action('admin_head', 'stickySaveWidgetStyles');

// Disable Wordpress Admin Bar for all users
add_filter("show_admin_bar", "__return_false");

//load css into the website's front-end
function portfolio_enqueue_style()
{
  wp_enqueue_style("portfolio-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "portfolio_enqueue_style");

//load js into the website's front-end
function portfolio_enqueue_scripts()
{
  wp_enqueue_script('portfolio-js', get_theme_file_uri('script.js'), [], null, true);
}
add_action("wp_enqueue_scripts", "portfolio_enqueue_scripts");



//post view counter
function displayPostViews($postID)
{
  $counterKey = "post_views";
  $numberOfViews = get_post_meta($postID, $counterKey, true);

  if ($numberOfViews == "") {
    delete_post_meta($postID, $counterKey);
    add_post_meta($postID, $counterKey, 0);
    return "0 views";
  }
  return $numberOfViews . " views";
}

function incrementPostViews($postID)
{
  $counterKey = "post_views";
  $numberOfViews = get_post_meta($postID, $counterKey, true);

  if ($numberOfViews == "") {
    $numberOfViews = 0;
    delete_post_meta($postID, $counterKey);
    add_post_meta($postID, $counterKey, 0);
  } else {
    $numberOfViews++;
    update_post_meta($postID, $counterKey, $numberOfViews);
  }
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


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


//enable wordpress menus under Appearance
function register_my_menu()
{
  register_nav_menu("site-menu", __("Site Menu"));
}
add_action("init", "register_my_menu");


//wp-admin login functions

function my_login_logo_url()
{
  return home_url();
}
add_filter('login_headerurl', 'my_login_logo_url');

function my_login_logo_url_title()
{
  return "Brian Lowery's Portfolio";
}
add_filter('login_headertext', 'my_login_logo_url_title');


function my_login_stylesheet()
{
  wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/wp-admin-login.css');
  wp_enqueue_script('custom-login', get_stylesheet_directory_uri() . '/wp-admin-login.js');
}
add_action('login_enqueue_scripts', 'my_login_stylesheet');


// The proper way to enqueue GSAP script
// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script()
{
  wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js', array(), false, true);
  wp_enqueue_script('gsap-js2', get_template_directory_uri() . '/js/custom-gsap-scripts.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'theme_gsap_script');


function add_prism()
{
  //do this only on the pages needed. but it doesn't work soooo yeah.
  // if (has_tag('code')) {
  //   wp_enqueue_style('prismCSS', get_stylesheet_directory_uri() . '/css/prism.css');
  //   wp_enqueue_script('prismJS', get_template_directory_uri() . '/js/prism.js', array(), false, true);
  // }

  wp_enqueue_style('prismCSS', get_stylesheet_directory_uri() . '/css/prism.css');
  wp_enqueue_script('prismJS', get_template_directory_uri() . '/js/prism.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'add_prism');
