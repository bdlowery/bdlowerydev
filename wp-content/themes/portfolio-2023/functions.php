<?php 

function getFile($path) {
	return dirname(__FILE__) . '/' . $path;
}

require_once('functions/setup.php');
require_once('functions/admin-dashboard.php');


// Get the most recent date from any post.
function get_latest_update_date(){
	global $wpdb;
	$thelatest = $wpdb->get_var("SELECT max(post_modified) FROM wp_posts WHERE post_type IN ('post', 'page', 'project');");
	//returns formatted date like 13.08.2001
	return date_i18n("F j, Y", strtotime($thelatest));
}
add_shortcode('latestupdatedate', 'get_latest_update_date');


// Get the correct formatted date.
function get_latest_update_date_datetime() {
	global $wpdb;
	$theLatestDatetime = $wpdb->get_var("SELECT max(post_modified) FROM wp_posts WHERE post_type IN ('post', 'page', 'project');");
	//returns formatted date like 13.08.2001
	return date_i18n("Y-m-d", strtotime($theLatestDatetime));
}
add_shortcode('latestupdatedateDatetime', 'get_latest_update_date_datetime');


function slugify($string) {
	$string = str_replace(' ', '-', $string);
	return strtolower($string);
}


//format code for debugging
function formatCode($code) {
	echo "<pre class='show-code'>";
		echo "<code class='debug'>";
			var_dump($code);
		echo "</code>";
	echo "</pre>";
}

// show edit post button for administrators and editors
function show_edit_post() {

	$user = wp_get_current_user();
	if (in_array('administrator', (array) $user->roles) || in_array('editor', (array) $user->roles)) {
		edit_post_link(__('Edit Post'));
	}
}
add_shortcode('adminEditorEditPost', 'show_edit_post');