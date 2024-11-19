<?php
$content = apply_filters('the_content', get_the_content());
$title = get_the_title();
$permalink = get_the_permalink();
$description = get_the_excerpt();
$date = get_the_date();
$dateNumbersOnly = get_the_date("Y-m-d");

$dateModified = get_the_modified_date();
$displayModified = " -- Modified: " . $dateModified;
?>

<article class='max-w-5xl mx-auto px-4 sm:px-16'>
	<header class="page-header my-10 relative z-10 p-8 -ml-8 bg-zinc-800 rounded-lg ">
		<div>
			<h1 class="page-title text-3xl font-bold text-white"><?= $title ?></h1>

			<p class=" text-white mt-2 font-medium text-lg"><?= $description ?></p>
			<p class="text-xs mt-5 text-white">Posted: <?= $date ?> <?= $displayModified ?></p>

			<?php show_edit_post(); ?>
		</div>
	</header>

	<section class="post prose flex flex-col gap-12 pb-20">
		<?php
		include(getFile("loop-module.php"));
		?>
	</section>
</article>