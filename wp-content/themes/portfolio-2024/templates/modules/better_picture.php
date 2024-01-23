
<?php

	$header = get_sub_field('header');

?>


<section class="better-picture">
	<div class="inner-column">
		<h2><?=$header?></h2>
		<?php 
		// access the fields within the repeater.
		while (have_rows('picture_group')) {
			the_row();

			$hasSubHeading = get_sub_field('has_subheading'); // true or false
			$subHeading = get_sub_field('sub_heading'); // heading inside of the module (h3)
			$hasIntro = get_sub_field('has_intro'); // true or false
			$introduction = get_sub_field('introduction'); // text underneath h2 heading
			$image = get_sub_field('image')['url']; // image url. bdlowery.dev/wp-content/image.jpg
			$description = get_sub_field('description'); // text underneath image.

			?>
			<div class="picture-module">

				<?php if($hasSubHeading) { ?>
					<h3><?=$subHeading?></h3>
				<?php } ?>

				<?php if($hasIntro) { ?>
					<div class="module-intro">
						<?=$introduction?>
					</div>
				<?php } ?>

				<picture>
					<img src="<?=$image?>" alt="">
				</picture>

				<div class="description">
					<?=$description?>
				</div>

			</div>
		<?php } ?>

	</div>
</section>