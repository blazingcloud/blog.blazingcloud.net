    <div id="primary" class="sidebar">
		<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>
<?php endif; // end primary sidebar widgets  ?>
		</ul>
	</div><!-- #primary .sidebar -->
<div id="tertiary" class="sidebar">
	   <h2>Twitter</h2>
	   <ul class="twitter">
	      <?php echo(get_status("blazingcloud")); ?> 
	   </ul>
	</div>	
	<div id="secondary" class="sidebar">
		<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin secondary sidebar widgets ?>

<?php endif; // end secondary sidebar widgets  ?>
		</ul>
	</div><!-- #secondary .sidebar -->
