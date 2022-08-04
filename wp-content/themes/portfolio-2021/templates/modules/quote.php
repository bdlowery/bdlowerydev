<?php
$quote = get_sub_field('quote');
$source = get_sub_field('source');
$link = get_sub_field('link');
$id = get_sub_field("id");
?>

<div class="quote-content">
  <?= $quote ?>
  <?= $source ?>
  <?= $link ?>
</div>