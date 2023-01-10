<head>
  <meta charset='utf-8' />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
  // default meta image.
  $metaImage = "https://perpetual.education/default-meta-image.png";
  $metaTitle = 'title';
  $metaDescription = 'description';
  ?>

  <title><?=$metaTitle?></title>
  <meta name='description' content='description'>
  <meta property="og:image" content="<?=$metaImage?>">

  <meta property="og:type" content="website">
  <meta property="og:site_name" content="bdlowery">
  <meta property="og:title" content='<?=$metaTitle?>'>
  <meta property="og:description" content="<?=$metaDescription?>">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="theme-color" content="hsla(207, 67%, 78%, 1.00)">
  

  <?php wp_head(); // $todo - what order this this best ?>
</head>