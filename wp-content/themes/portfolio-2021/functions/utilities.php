<?php

//remove default WYSIWYG classes
function remove_p($text)
{
  // removes <p> from wysiwyg field when we don't want them
  return str_replace(array('<p>', '</p>'), '', $text);
}


//format code for debugging
function formatCode($code)
{
  echo "<pre>";
  var_dump($code);
  echo "</pre>";
}

/* this takes the CMS slug field for a given module and makes it visible in the CMS to act as a title so that we can tell what module is what back there. */
add_filter('acf/fields/flexible_content/layout_title', function ($title) {
  $ret = $title; // $ret ?
  if ($custom_title = get_sub_field('id')) {
    $ret = sprintf($title . ': ' . '<strong>' . $custom_title . '</strong>');
  }
  return $ret;
});


// Get the most recent date from any post.
function get_latest_update_date()
{
  global $wpdb;
  $thelatest = $wpdb->get_var("SELECT max(post_modified) FROM wp_posts WHERE post_type IN ('post', 'page', 'project');");
  //returns formatted date like 13.08.2001
  return date_i18n("F j, Y", strtotime($thelatest));
}
add_shortcode('latestupdatedate', 'get_latest_update_date');

// Get the most recent date from any post.
function get_latest_update_date_datetime()
{
  global $wpdb;
  $theLatestDatetime = $wpdb->get_var("SELECT max(post_modified) FROM wp_posts WHERE post_type IN ('post', 'page', 'project');");
  //returns formatted date like 13.08.2001
  return date_i18n("Y-m-d", strtotime($theLatestDatetime));
}
add_shortcode('latestupdatedateDatetime', 'get_latest_update_date_datetime');

// show edit post button for administrators and editors
function show_edit_post()
{

  $user = wp_get_current_user();
  if (in_array('administrator', (array) $user->roles) || in_array('editor', (array) $user->roles)) {
    edit_post_link(__('Edit Post'));
  }
}
add_shortcode('adminEditorEditPost', 'show_edit_post');
