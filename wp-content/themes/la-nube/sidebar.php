    <div id="primary" class="sidebar">
	    <div id="search-blog">
			<ul>
				    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>
				    <?php endif; // end primary sidebar widgets  ?>
			</ul>
	    </div>
	    <hr/>
	    <div id="follow-links">
			<h2>FOLLOW US</h2>
			<a href="http://blog.blazingcloud.net/feed/"><img src="<?php bloginfo('stylesheet_directory')?>/assets/sidebar/rss.png" alt="RSS Button"/></a>
			<a href="http://twitter.com/blazingcloud"><img src="<?php bloginfo('stylesheet_directory')?>/assets/sidebar/twitter.png" alt="Twitter Button"/></a>
			<a href="http://www.linkedin.com/company/blazing-cloud"><img src="<?php bloginfo('stylesheet_directory')?>/assets/sidebar/linkedIn.png" alt="LinkedIn Button"/></a>
	    </div>
	    <div id="ads">
			<!--<span>ad for classes</span>-->
			<img src="<?php bloginfo('stylesheet_directory')?>/assets/ad.png" alt="Advertisement Section"/>
	    </div>
	    <hr/>
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin primary sidebar widgets ?>
				<?php endif; // end primary sidebar widgets  ?>
			</ul>
	</div><!-- #primary .sidebar -->
	<div id="secondary" class="sidebar">
			<ul>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : // begin secondary sidebar widgets ?>
				<?php endif; // end secondary sidebar widgets  ?>
			</ul>
	</div><!-- #secondary .sidebar -->
