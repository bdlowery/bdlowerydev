<?php
$name = get_field("name");
$projectImage = get_field("project_image");
$description = get_field("description");

if (get_field("header_background_image")) {
	$projectHeaderImage = get_field("header_background_image")["url"];
}

if ($projectImage) {
	$projectImage = get_field("project_image");
} else {
	$projectImage = "https://peprojects.dev/alpha-2/purplebox.jpg";
}


?>

<article class="max-w-5xl mx-auto px-4 sm:px-16">
	<header class="page-header my-10 relative z-10 p-8 -ml-8 bg-cover bg-center rounded-lg overflow-hidden" style="background-image: url('<?= $projectHeaderImage ?>');">
		<div class="bg-zinc-950 w-full h-full absolute inset-0 opacity-80 -z-10"></div>
		<div>
			<h1 class="page-title text-3xl font-bold text-white"><?= $name ?></h1>
			<?php //show_edit_post(); 
			?>
			<p class=" text-white mt-2 font-medium text-lg"><?= $description ?></p>
		</div>
	</header>




	<section class="post prose flex flex-col gap-12 pb-20">
		<?php
		// this file builds the entire page based on the flexible content fields
		include(getFile("loop-module.php"));
		?>
	</section>

</article>