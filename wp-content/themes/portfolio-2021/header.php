<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo wp_get_document_title(); ?></title>
  <!-- Meta Tags -->
  <meta name="description" content="Brian Lowery, Web Developer and Designer in California" />
  <meta property=" og:image" content="[[meta image source]]" />

  <!-- Styles -->
  <link rel="stylesheet" href="style.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class("site"); ?>>
  <header class="site-header">
    <div class="inner-column">
      <div class="masthead">
        <a href="
        <?php
        $url = home_url($path = '/', $scheme = 'https');
        echo $url;
        ?>
        ">
          <my-logo>

            <svg viewBox="0 0 401 151">
              <text x="-8.588" y="146.642" font-family="'HelveticaNeue-Bold','Helvetica Neue'" font-weight="700" font-size="200" fill="var(--black)">BDL</text>
            </svg>
          </my-logo>
        </a>
        <?php include("templates/components/site-menu.php") ?>
      </div>
    </div>
  </header>
  <main class="site-content">