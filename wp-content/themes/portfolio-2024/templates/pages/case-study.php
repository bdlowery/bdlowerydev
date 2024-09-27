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

<article class="max-w-3xl mx-auto">
	<header class="page-header">

		<div aria-hidden='true' class="bg"></div>
		<div class='case-study-bg' style='background-image: url("<?=$projectHeaderImage?>")'></div>
		<div class="container">
			<h1 class="page-title"><?= $name ?></h1>
			<?php show_edit_post(); ?>
		</div>

	</header>

	<section class="intro">
		<div class="container">
			<p class="description prose"><?= $description ?></p>
		</div>
	</section>


	<section class="post prose">

		<?php
			// this file builds the entire page based on the flexible content fields
			include(getFile("loop-module.php"));
		?>
	</section>

</article>