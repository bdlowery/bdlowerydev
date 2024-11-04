<?php
$figureHeading = get_sub_field("heading");
$figureImage = get_sub_field("image")["url"];

if (get_sub_field("attribution")) {
	$figureAttributionUrl = get_sub_field("attribution")["url"];
	$figureAttributionTitle = get_sub_field("attribution")["title"];
}

$figureCaption = get_sub_field("caption");
$id = get_sub_field("id");




?>
<div class="figure-module" id="<?= $id ?>">
	<div class="inner-column">
		<h2><?= $figureHeading; ?></h2>
		<figure>
			<picture>
				<img src="<?= $figureImage; ?>" alt="">
			</picture>
			<figcaption>
				<?= $figureCaption ?>

				<?php
				if (!empty($figureAttributionUrl) && !empty($figureAttributionTitle)) { ?>
					<a href="<?= esc_url($figureAttributionUrl); ?>"><?= esc_html($figureAttributionTitle) ?></a>
				<?php }; ?>
			</figcaption>
		</figure>
	</div>
</div>