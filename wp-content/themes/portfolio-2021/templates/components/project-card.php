<?php

// ***
// *** INLCUDED IN project-section.php
// ***

//only get the field associated with the correct card ID.
$name = get_field("name", $card->ID);
$projectImage = get_field("project_image", $card->ID);
$description = get_field("description", $card->ID);
$toolsUsed = get_field("tool", $card->ID);


if(get_field('project_link', $card->ID)) {
  $permalink= get_field('project_link', $card->ID);
} else {
  $permalink = get_permalink($card->ID);
}


if ($projectImage) {
  $projectImage = $projectImage["url"];
} else {
  $projectImage = "https://peprojects.dev/alpha-2/purplebox.jpg";
}

?>
<?php

?>

<a class="project-card-link" href="<?= $permalink ?>">
  <div class="project-card my-work-project-card">
    <picture class="project-picture" style="background-image: url(<?= $projectImage ?>)">
    </picture>
    <h2 class="stern-voice"><span><?= $name ?></span></h2>

    <?php
    $terms = get_the_terms($card->ID, 'tool');
    ?>
    <div class="tools">
      <?php foreach ($terms as $term) { ?>

        <span class="quiet-voice"><?= $term->name; ?></span>

      <?php } ?>
    </div>
    <p class="description-voice"><?= $description ?></p>
  </div>
</a>