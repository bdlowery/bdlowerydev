<?php
//repeater, so need to do this
while (have_rows('goal')) {
  the_row();

  $goalHeading = get_sub_field("heading");
  $goalContent = get_sub_field("text");
  $id = $id = get_sub_field("id");
}

?>

<section class="goal-module" id="<?= $id ?>">
  <div class="inner-column">
    <goal>
      <p><?= $goalContent ?></p>
    </goal>
  </div>
</section>