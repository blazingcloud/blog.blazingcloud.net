<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta name="google-site-verification" content="ZaAMis_-Ko3ZGTciJvbTeioaGsLkowQTR1SSkeMYJuE" />
  <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
  
  <link href="<?php bloginfo('stylesheet_directory') ?>/reset.css" rel="stylesheet" type="text/css" /> 

 <!-- default grid - expect this to get adjusted for different devices-->
    <link rel="stylesheet" 
          href="<?php bloginfo('stylesheet_directory') ?>/responsive/grid.css">
    <!-- default device-->
    <link rel="stylesheet" 
          href="<?php bloginfo('stylesheet_directory') ?>/responsive/base.css">
    <!-- small devices -->
    <link rel="stylesheet" 
          href="<?php bloginfo('stylesheet_directory') ?>/responsive/320px_to_767px.css"  
          media='screen and (min-width:320px) and (max-width:767px) ' />
    <!-- small landscape device -->
    <link rel="stylesheet" 
          href="<?php bloginfo('stylesheet_directory') ?>/responsive/small/320px_to_480px.css"  
          media='screen and (min-width:320px) and (max-width:480px) ' />
    <!-- wide devices -->
    <link rel="stylesheet" 
          href="<?php bloginfo('stylesheet_directory') ?>/responsive/768px_or_wider.css"  
          media='screen and (min-width:768px)' />
    <!-- wide tablet device -->
    <link rel="stylesheet" 
          href="<?php bloginfo('stylesheet_directory') ?>/responsive/wide/768px_to_1024px.css"  
          media='screen and (min-width:768px) and (max-width:1024px)' />




	<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet" type="text/css" /> 
  <link href="<?php bloginfo('stylesheet_directory') ?>/blog.css" rel="stylesheet" type="text/css" /> 
  <link href="<?php bloginfo('stylesheet_directory') ?>/fonts.css" rel="stylesheet" type="text/css" /> 


<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />


  <script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-18707466-1']);
    _gaq.push(['_setDomainName', '.blazingcloud.net']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
  </script>
</head>

<body>

<div id="wrapper">
    <div id="header">
       <a href="http://blazingcloud.net">
           <img src="<?php bloginfo('stylesheet_directory')?>/assets/header/blazing_cloud_logo.png" alt="Blazing Cloud Logo"/>
       </a>
       <div class="nav">
         <ul>
          <li><a href="http://blazingcloud.net/">Home</a></li>
          <li><a href="http://blazingcloud.net/services">Services</a></li>
          <li><a class= "active" href='http://blog.blazingcloud.net/'>Blog</a></li>
         </ul>
       </div>
    
    </div>
