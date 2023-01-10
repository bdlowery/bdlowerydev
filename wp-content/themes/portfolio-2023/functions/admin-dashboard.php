<?php 

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


?>