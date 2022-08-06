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



// $todo -- remove jquery. copy / paste most code from -- https://support.advancedcustomfields.com/forums/topic/collapse-flexible-content-fields/#post-144624
function acf_toggle_flexible_content_fields() { ?>
      <script type="text/javascript">
          (function($) {
              acf.add_action('load', function($el) {
  
                  let $field = $el.find('.acf-field-flexible-content'); // Get flexabile fields
                  $field = Array.prototype.slice.call($field); // Convert to array

                  // Create button
                  let btnClose = document.createElement("a");
                  let btnOpen = document.createElement("a");
                  btnClose.classList.add('toggle-flex-fields');
                  btnClose.style.position = 'absolute';
                  btnClose.style.top = '10px';
                  btnClose.style.right = '70px';
                  btnClose.style.cursor = 'pointer';
                  btnClose.style.zIndex= '10';
                  btnClose.style.padding= '5px';
                  btnClose.style.userSelect = 'none';
                  btnClose.style.fontFamily = 'monospace';
                  btnClose.style.border = '1px solid #2271b1';
                  btnClose.innerText = 'Close';

                  btnOpen.classList.add('toggle-flex-fields');
                  btnOpen.style.position = 'absolute';
                  btnOpen.style.top = '10px';
                  btnOpen.style.right = '20px';
                  btnOpen.style.cursor = 'pointer';
                  btnOpen.style.zIndex= '10';
                  btnOpen.style.padding= '5px';
                  btnOpen.style.userSelect = 'none';
                  btnOpen.style.fontFamily = 'monospace';
                  btnOpen.style.border = '1px solid #2271b1';
                  btnOpen.innerText = 'Open';
  
                  $field.forEach(function(container) { // Loop through all fields on the page

                      // Prepend button on top of the container
                      container.prepend(btnClose);
                      container.prepend(btnOpen);
  
                      // Get toggleable fields
                      const item = container.querySelectorAll(".layout");
  
                      // Add click event to button
                      btnClose.addEventListener('click', function(event) {
                          event.preventDefault();
                          item.forEach(function(item) {
                              item.classList.add('-collapsed');
                          });
                      });

                      btnOpen.addEventListener('click', function(event) {
                          event.preventDefault();
                          item.forEach(function(item) {
                              item.classList.remove('-collapsed');
                          });
                      });
  
                  });


              });
  
          })(jQuery);
      </script>
  <?php
  
  }
  add_action('acf/input/admin_footer', 'acf_toggle_flexible_content_fields');