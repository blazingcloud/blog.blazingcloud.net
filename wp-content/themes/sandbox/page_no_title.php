<?php
/*
Template Name: Page Without a Title
*/
?>

<?php get_header() ?>

<div id="content-wrapper">
    
    <div id="infinite_carousel">   
        <ul>
            <li style="display: inline; float: left; "><a href="/programs/teen/jcc-maccabi-experience">
                <img src="<?php bloginfo('template_directory'); ?>/test2.png"></a>
            </li>
            <li style="display: inline; float: left; "><a href="/programs/teen/jcc-maccabi-experience">
                <img src="<?php bloginfo('template_directory'); ?>/test2.png"></a>
            </li>
            <li style="display: inline; float: left; "><a href="/programs/teen/jcc-maccabi-experience">
                <img src="<?php bloginfo('template_directory'); ?>/test2.png"></a>
            </li>
            <li style="display: inline; float: left; "><a href="/programs/teen/jcc-maccabi-experience">
                <img src="<?php bloginfo('template_directory'); ?>/test2.png"></a>
            </li>
            <li style="display: inline; float: left; "><a href="/programs/teen/jcc-maccabi-experience">
                <img src="<?php bloginfo('template_directory'); ?>/test2.png"></a>
            </li>
        </ul>
    </div>
    
    <ul id="home-content">
        <li id="recent-posts">
            <h1>Expert Advice</h1>
            <ul>
                <?php
                    $postslist = get_posts('posts_per_page=5&order=DESC');
                    foreach ($postslist as $post) : 
                    setup_postdata($post);
                ?> 
                <li>
                    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                </li>                
                <?php endforeach; ?>
            </ul>
        </li>
        <li>
            <h1>Talks</h1>
            <iframe src="http://player.vimeo.com/video/17357692" width="250" height="187.5" frameborder="0"></iframe>
        </li>
        <li id="twitter">
            <h1>Twitter</h1>
            <ul>
	           <?php echo(get_status("blazingcloud")); ?> 
	        </ul>
        </li>
    </ul>
</div><!-- #content-wrapper -->

<?php get_footer() ?>