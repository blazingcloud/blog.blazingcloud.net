<?php thematic_create_doctype(); echo " "; language_attributes(); echo ">\n";?>
<head profile="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<?php 

thematic_doctitle();
thematic_create_contenttype();
thematic_show_description();
thematic_show_robots();
thematic_canonical_url();
thematic_create_stylesheet();
thematic_show_rss();
thematic_show_commentsrss();
thematic_show_pingback();
thematic_show_commentreply();

wp_head(); ?>

</head>

<body class="<?php thematic_body_class() ?>">
<?php thematic_before(); ?>

<div id="wrapper" class="hfeed">

<?php thematic_aboveheader(); ?>   
    <div id="header">
       <div id="header-nav">
       
        </div>
        <div id="main-header">
           <img src="http://blazingcloud.net/wordpress/wp-content/themes/thematicsamplechildtheme/images/header.png" alt="BlazingCloud" />
				<div id="contact_info">
					<p>414 Mason Street, Suite 403</p>
					<p>San Francisco CA 94102</p>
					<p>fax: (415)738-5407</p>
				</div>
        </div>
        <?php thematic_header() ?>
    </div><!-- #header-->

<?php thematic_belowheader(); ?>   

    <div id="main">
    