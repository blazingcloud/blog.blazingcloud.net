<?php
/*
Page Without a Title
*/
?>

<?php get_header() ?>

<div id="content-wrapper">
    <div id="side-bar">  
        <?php
        #if this is a portfolio page or it is a child of the portfolio page
        if($post->post_title == "Portfolio" || trim(get_the_title($post->post_parent)) == "Portfolio") {
            get_portfolio();
        } else {
            get_sidebar();
        }
        ?>
    </div><!-- side-bar -->
            
    <div id="main-content">
    
        <?php the_post() ?>
        <div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
            <div class="entry-content">
                <?php the_content() ?>
    
                <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
    
                <?php edit_post_link( __( 'Edit', 'sandbox' ), '<span class="edit-link">', '</span>' ) ?>
    
            </div>
        </div><!-- .post -->
    
        <?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
    
        <div id="footer">
            <p>Copyright 2010, Blazing Cloud, Inc.</p>
        </div>
    </div> <!-- #main-content -->
</div><!-- #content-wrapper -->

<?php get_footer() ?>