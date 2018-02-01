<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <title>Rikk Ogden Creative Design</title>
  <meta name="keywords" content="">
  <meta name="description" content="I'm a website designer and frontend developer who also creates other web related creative assets">
  <link rel="apple-touch-icon" sizes="180x180" href="/wordpress/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/wordpress/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/wordpress/favicon-16x16.png">
  <link rel="manifest" href="/wordpress/manifest.json">
  <meta name="theme-color" content="#ffffff">
  <script src="/wordpress/scripts/vendor.js"></script>
  <?php wp_head();?>

</head>
<body>
<div id="page-top"></div>
<div class="wrapper">
<header class="site-header">
<div class="grid">
  <div class="row">
    <div class="col col--md__4">
      <a class="site-header__logo" href="<?php echo get_bloginfo( 'wpurl' );?>" title="Rikk Ogden Creative">
        <div class="icon icon--roc-logo">
          <?php echo get_bloginfo( 'description' ); ?>
        </div>
    </a>
  </div>
  <div class="col col--md__12">
    <nav class="nav-primary">
      <a href="<?php echo get_bloginfo( 'wpurl' );?>" title="My services">Main Site</a><a href="#featured">Featured Posts</a><a href="#allposts">All Posts</a>
    </nav>
  </div>
    <a class="site-header__menu-icon" role="button">
    <div class="site-header__menu-icon__bar"></div>
    <div class="site-header__menu-icon__bar--back"></div>
    </a>
  </div>
</div>
</header>
