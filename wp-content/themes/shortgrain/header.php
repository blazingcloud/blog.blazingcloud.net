<!doctype html>

<?php function bz_assets() {
  echo("http://new.blazingcloud.net");
} ?>

<html>
<head>
	<meta charset="utf-8">
	<title>Blazing Cloud | Blog</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
  <link rel="stylesheet" href="<?php bz_assets() ?>/reset.css">
  <link rel="stylesheet" href="<?php bz_assets() ?>/fonts.css">
  
  <!-- default grid - expect this to get adjusted for different devices-->
  <link rel="stylesheet" href="<?php bz_assets() ?>/responsive/grid.css">
  <!-- default device-->
  <link rel="stylesheet" 
        href="<?php bz_assets() ?>/responsive/base.css">
  <!-- small devices -->
  <link rel="stylesheet" 
        href="<?php bz_assets() ?>/responsive/base-small.css"  
        media='screen and (min-width:20em) and (max-width:48em) ' />
  <!-- small landscape device -->
  <link rel="stylesheet" 
        href="<?php bz_assets() ?>/responsive/small/landscape.css"  
        media='screen and (min-width:30em) and (max-width:48em) ' />
  <!-- wide devices -->
  <link rel="stylesheet" 
        href="<?php bz_assets() ?>/responsive/base-wide.css"  
        media='screen and (min-width:48em)' />
  <!-- wide tablet device -->
  <link rel="stylesheet" 
        href="<?php bz_assets() ?>/responsive/wide/tablet.css"  
        media='screen and (min-width:48em) and (max-width:64em)' />
  <!-- wide desktop device -->
  <link rel="stylesheet" 
        href="<?php bz_assets() ?>/responsive/wide/desktop.css" 
        media='screen and (min-width:64em)' />

</head>

<body>
  <header>
    <div class='logo' alt='blazing cloud'></div>
    <nav>
      <ol>
        <li><a  href='/'>Home</a></li>
        <li><a  href='/services'>Services</a></li>
        <li><a class='active' href='/blog'>Blog</a></li>
      </ol>
    </nav>
  </header>

  <section class="main blog">
