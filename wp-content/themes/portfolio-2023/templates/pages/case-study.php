<?php
$name = get_field("name");
$projectImage = get_field("project_image");
$description = get_field("description");

if(get_field("header_background_image")) {
  $projectHeaderImage = get_field("header_background_image")["url"];
}

if ($projectImage) {
  $projectImage = get_field("project_image");
} else {
  $projectImage = "https://peprojects.dev/alpha-2/purplebox.jpg";
}
?>

<article>
	<header class="page-header">
		<div class="inner-column">
			<h1 class="page-title"><?= $name ?></h1>
			<?php show_edit_post(); ?>
		</div>
		<div aria-hidden='true' class="bg"></div>
	</header>

	<section class="intro">
		<div class="inner-column">
			<p class="description"><?= $description ?></p>
		</div>
	</section>


	<section class="post">

		<?php
			// this file builds the entire page based on the flexible content fields
			include(getFile("loop-module.php"));
		?>
	</section>

</article>