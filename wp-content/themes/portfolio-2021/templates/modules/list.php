<?php

$listHeading = get_sub_field("heading");
$listIntro = get_sub_field("intro");
$listType = get_sub_field("type");
$listDescription = get_sub_field("description");
$id = get_sub_field("id");

?>

<section class="list-module" id="<?= $id ?>">
  <div class="inner-column">
    <h2><?= $listHeading; ?></h2>
    <?= $listIntro; ?>
    <ul>
      <?php
      while (have_rows('items')) {
        the_row();

        $listItems = get_sub_field("item"); ?>

        <li> <?= $listItems; ?></li>
      <?php } ?>
    </ul>
    <?= $listDescription; ?>
  </div>
</section>