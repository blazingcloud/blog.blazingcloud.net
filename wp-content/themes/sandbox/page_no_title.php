<?php
/*
Template Name: Page Without a Title
*/
?>

<?php get_header() ?>

<div id="content-wrapper">
    <?php $title = trim(get_the_title(the_ID())); if($title == "Home") { ?>    
    <div id="infinite_carousel">   
        <ul>
            <li style="display: inline; float: left; "><a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/iOS_Dev.png"></a>
            </li>
            <li style="display: inline; float: left; "><a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/web_dev.png"></a>
            </li>
            <li style="display: inline; float: left; "><a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/classes.png"></a>
            </li>
            <li style="display: inline; float: left; "><a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/iPad_dev.png"></a>
            </li>
        </ul>
    </div>
    
    <ul id="home-content">
        <li id="recent-posts">
            <h1>Expert Advice</h1>
            <ul>
                <?php
                    $postslist = get_posts('numberposts=8&order=DESC');
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
    <?php } else { ?>
    
        <?php the_post() ?>
        <div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
            <div class="entry-content">
                <?php
                if($post->post_title == "Portfolio") {
                    $pages = get_pages('child_of='.$post->ID.'&sort_column=post_date&sort_order=desc');
                    
                    echo array_shift($pages)->post_content;
                    
                } else {
                    the_content();
                }
                ?>
    
                <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
    
                <?php edit_post_link( __( 'Edit', 'sandbox' ), '<span class="edit-link">', '</span>' ) ?>
    
            </div>
        </div><!-- .post (page) -->
    
    <?php } ?>
    
    
</div><!-- #content-wrapper -->

<?php get_footer() ?>