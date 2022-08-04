<header class="page-header">
  <div class="inner-column">
    <h1 class="title-voice">Writing</h1>
  </div>
</header>

<section>
  <div class="inner-column">
    <?php
    $parameters = array(
      "post_type" => "post",
      "post__not_in" => array(85),
    );

    $query = new WP_Query($parameters);

    while ($query->have_posts()) : $query->the_post();
      include(getFile("templates/components/writing-card.php"));

    endwhile;

    ?>
  </div>
</section>