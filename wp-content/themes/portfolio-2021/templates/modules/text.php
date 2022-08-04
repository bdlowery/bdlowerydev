<?php
$text = get_sub_field('content');
$id = get_sub_field("id");
?>
<section class="text-module" id="<?= $id ?>">
  <div class="inner-column">
    <div class="text-content">
      <?= $text ?>
    </div>
  </div>
</section>