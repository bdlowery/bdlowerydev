<?php get_header(); ?>

<?php
//regular page
if (is_page("home")) {
  include("templates/pages/home.php");
}


//regular pages
if (is_page("my-work")) {
  include("templates/pages/my-work.php");
}

if (is_page("writing")) {
  include("templates/pages/writing.php");
}


if (is_page("sign-in")) {
  include("templates/pages/sign-in.php");
}


if (is_page("account-info")) {
  include("templates/pages/account-info.php");
}

//detail pages....
if (is_singular("project")) {
  include("templates/pages/project-detail.php");
}

if (is_singular("post")) {
  include("templates/pages/writing-detail.php");
}

if (is_404()) {
  include("templates/pages/page-not-found.php");
}
?>

<?php get_footer(); ?>