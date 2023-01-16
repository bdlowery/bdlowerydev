<?php get_header(); ?>

<?php 
	//STANDARD
	if (is_page('home')) {
		include('templates/pages/home.php');
	}

	if (is_page('writing')) {
		include('templates/pages/writing.php');
	}

	if (is_page('my-work')) {
		include('templates/pages/my-work.php');
	}

	if (is_page("sign-in")) {
	  include("templates/pages/sign-in.php");
	}


	// INDEX PAGES 




	// DETAIL PAGES 
	if (is_singular("project")) {
		include("templates/pages/case-study.php");
	}
	if (is_singular("post")) {
		include("templates/pages/default-writing-page.php");
	}



?>

<?php get_footer(); ?>