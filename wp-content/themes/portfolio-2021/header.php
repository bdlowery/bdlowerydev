<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo wp_get_document_title(); ?></title>
  <!-- Meta Tags -->
  <meta name="description" content="Brian Lowery, Web Developer and Designer in California" />
  <meta property=" og:image" content="[[meta image source]]" />


  <link rel="icon" href="/favicon.ico" type="image/x-icon" />

  <meta name="theme-color" content="#333333">

  <!-- Styles -->
  <link rel="stylesheet" href="style.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class("site"); ?>>
  <header class="site-header">
    <div class="inner-column">
      <div class="masthead">
        <a href="/">
          <my-logo>

            <svg viewBox="0 0 401 151">
              <text x="-8.588" y="146.642" font-family="'HelveticaNeue-Bold','Helvetica Neue'" font-weight="700" font-size="200" fill="var(--black)">BDL</text>
            </svg>
          </my-logo>
        </a>
        <nav id="site-menu" class="site-menu">
          <a href="/" class="site-link"><span>Home</span></a>
          <a href="/my-work" class="site-link"><span>My Work</span></a>
          <a href="/writing" class="site-link"><span>Writing</span></a>
          <?php if ( current_user_can('administrator') ) { ?>
            <?php edit_post_link("EDIT", null, null, null, "site-link"); ?>
          <?php } ?>
          </nav>
      </div>
    </div>
  </header>
  <main class="site-content">