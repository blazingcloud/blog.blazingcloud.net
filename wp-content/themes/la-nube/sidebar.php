    <div id="primary" class="sidebar">
	    <div id="search-blog">
			<h2>SEARCH BLOG</h2>
			<input id="search-article"/>
			<img src="<?php bloginfo('stylesheet_directory')?>/assets/sidebar/search.png" alt="Search"/> 
	    </div>
	    <hr/>
	    <div id="follow-links">
			<h2>FOLLOW US</h2>
			<a href="#"><img src="<?php bloginfo('stylesheet_directory')?>/assets/sidebar/rss.png" alt="Twitter Button"/></a>
			<a href="#"><img src="<?php bloginfo('stylesheet_directory')?>/assets/sidebar/twitter.png" alt="Twitter Button"/></a>
			<a href="#"><img src="<?php bloginfo('stylesheet_directory')?>/assets/sidebar/linkedIn.png" alt="Twitter Button"/></a>
	    </div>
	    <div id="ads">
			<!--<span>ad for classes</span>-->
			<img src="<?php bloginfo('stylesheet_directory')?>/assets/ad.png" alt="Advertisement Section"/>
	    </div>
	    <hr/>
		<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>
<?php endif; // end primary sidebar widgets  ?>
		</ul>
	</div><!-- #primary .sidebar -->
	<div id="secondary" class="sidebar">
		<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin secondary sidebar widgets ?>

<?php endif; // end secondary sidebar widgets  ?>
		</ul>
	</div><!-- #secondary .sidebar -->
