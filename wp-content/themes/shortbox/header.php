<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta name="google-site-verification" content="ZaAMis_-Ko3ZGTciJvbTeioaGsLkowQTR1SSkeMYJuE" />
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet" type="text/css" /> 
  <link href="<?php bloginfo('stylesheet_directory') ?>/fonts.css" rel="stylesheet" type="text/css" /> 
  <link href="<?php bloginfo('stylesheet_directory') ?>/blog.css" rel="stylesheet" type="text/css" /> 
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/scripts/jquery.infinitecarousel.js"></script>
	<script type="text/javascript">
        $(document).ready(function() {        
           $('#infinite_carousel').infiniteCarousel({            
               transitionSpeed : 250,//how fast the slides move            
               displayTime : 6000, //how long before the slides move            
               autoStart: true, //set to true if you want the infinite_carousel to start by default            
               textholderHeight : .2,            
               displayProgressBar : false, //set to true to display progress bar            
               displayThumbnails: false, //set to true to display thumbnails            
               displayThumbnailNumbers: false, //set to true to display thumbnail numbers            
               displayThumbnailBackground: false, //set to true to display thummnail background            
               showControls: true, //set to true to display play/pause buttons            
               autoHideControls: false,            
               autoHideCaptions: false, //captions view is down/hidden when true            
               animateCaptionsOnMove:false, //animate captions when the view transitions            
               enableArrowAnimation:true,            
               padding: '0px',            
               thumbnailWidth: '20px',            
               thumbnailHeight: '20px',            
               thumbnailFontSize: '.7em',            
               enableArrowAnimation: false        
           });    
        });

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
     </div>
