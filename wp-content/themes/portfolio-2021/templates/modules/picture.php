<?php
$imageHeading = get_sub_field("heading");
$image = get_sub_field("image")["url"];
$imageDescription = get_sub_field("description");

$hasIntro = get_sub_field("has_intro");
$intro = get_sub_field("intro");

$hasSecondImage = get_sub_field("has_second_image");
$secondImage = get_sub_field("second_image")["url"];
$secondDescription = get_sub_field("second_description");

$hasThirdImage = get_sub_field("has_third_image");
$thirdImage = get_sub_field("third_image")["url"];
$thirdDescription = get_sub_field("third_description");

$hasFourthImage = get_sub_field("has_fourth_image");
$fourthImage = get_sub_field("fourth_image")["url"];
$fourthDescription = get_sub_field("fourth_description");

$id = get_sub_field("id");
?>

<section class="picture-module" id="<?= $id ?>">
  <div class="inner-column">
    <?php if ($imageHeading) { ?>
      <h2><?= $imageHeading; ?></h2>
    <?php } ?>

    <?php if ($hasIntro) { ?>
      <?= $intro ?>
    <?php } ?>
    <picture>
      <img src="<?= $image; ?>" alt="">
    </picture>
    <?= $imageDescription; ?>

    <?php if ($hasSecondImage) { ?>
      <picture>
        <img src="<?= $secondImage; ?>" alt="">
      </picture>
      <?= $secondDescription ?>
    <?php } ?>

    <?php if ($hasThirdImage) { ?>
      <picture>
        <img src="<?= $thirdImage; ?>" alt="">
      </picture>
      <?= $thirdDescription ?>
    <?php } ?>

    <?php if ($hasFourthImage) { ?>
      <picture>
        <img src="<?= $fourthImage; ?>" alt="">
      </picture>
      <?= $fourthDescription ?>
    <?php } ?>
  </div>
</section>