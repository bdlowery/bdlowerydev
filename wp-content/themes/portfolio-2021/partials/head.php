<head>

<?php 
  $pageTitle = get_field('page_title');

  if(!$pageTitle) {
    $pageTitle = wp_get_document_title();
  }

  $pageDescription = get_field('page_description');

   if(!$pageDescription) {
      $pageDescription = "Thinking of a page description is hard! Send me on twitter @bdlowery2 :D";
    }


  if( get_field('page_share_image') ) {
    $metaImage = get_field('page_share_image')['url'];
  } else {
    $metaImage = 'https://bdlowery.dev/wp-content/uploads/meta-image.jpg';
  }

?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?=$pageTitle?></title>
  <meta name="description" content="<?=$pageDescription?>>">
  <meta property="og:image" content="<?=$metaImage?>">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Brian Lowery">
  <meta property="og:title" content="<?=$pageTitle?>">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="theme-color" content="#279cde">


  <!-- Styles -->
  <link rel="stylesheet" href="style.css" />
  <?php wp_head(); ?>
</head>