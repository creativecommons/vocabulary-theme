<!DOCTYPE html>
<html lang="en-US">
<head>

<title><?php wp_title('-',true,'right'); //this requires YOAST SEO plugin to be active to output ?></title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/favicon.ico" sizes="any" />
<link rel="icon" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/favicon.svg" type="image/svg+xml" />
<link rel="manifest" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/manifest.webmanifest" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo( 'template_directory' ); ?>/vocabulary/favicon/apple-touch-icon.png" />

<link rel="stylesheet" media="all" href="<?php echo get_bloginfo( 'template_directory' ); ?>/style.css" />

<?php wp_head(); ?>
</head>

<body class="<?php echo $args['body-classes']; ?>">
<a class="skip-to-content" href="#main-content-marker">Skip to content</a>

<!-- <header>

<h1>CC Thing</h1>

</header> -->

<span id="main-content-marker"></span>
