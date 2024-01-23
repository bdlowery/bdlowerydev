<?php
$title = get_the_title();
$permalink = get_the_permalink();
$description = get_the_excerpt();
$date = get_the_date();
$dateNumbersOnly = get_the_date("Y-m-d")
?>




<a href="<?= $permalink ?>" class="writing-card-link">
  <div class="article-details">
    <time datetime="<?= $dateNumbersOnly  ?>" class="quiet-voice"><?= $date; ?></time>
    <h2 class="article-title"><span><?= $title; ?></span></h2>
    <p class="article-description"><?= $description ?></p>
  </div>
  <span class="read-more">read more →</span>
</a>