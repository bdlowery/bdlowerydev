<head>
	<meta charset='utf-8' />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
		$pageTitle = get_field('page_title');
		$pageDescription = get_field('page_description');

		if (!$pageTitle) {
			$pageTitle = wp_get_document_title();
		}

		if (!$pageDescription) {
      	$pageDescription = "Thinking of a page description is hard! Send me one on twitter @bdlowery2 :)";
   	}

		if (get_field('page_share_image') ) {
			$metaImage = get_field('page_share_image')['url'];
		} else {
			$metaImage = 'https://bdlowery.dev/wp-content/uploads/meta-image.jpg';
		}
		// default meta image.
		// $metaImage = "https://perpetual.education/default-meta-image.png";
		// $metaTitle = 'title';
		// $metaDescription = 'description';
	?>

	<title><?=$pageTitle?></title>
	<meta name="description" content="<?=$pageDescription?>>">
	<meta property="og:image" content="<?=$metaImage?>">

	<meta property="og:type" content="website">
	<meta property="og:site_name" content="bdlowery">
	<meta property="og:title" content="<?=$pageTitle?>">
	<meta property="og:description" content="<?=$pageDescription?>">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="theme-color" content="#279cde">


	<?php wp_head(); // $todo - what order this this best ?>
</head>