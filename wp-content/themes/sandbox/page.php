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
        if($post->post_title == "Portfolio") {
            get_portfolio($post->ID);
        } else if(trim(get_the_title($post->post_parent)) == "Portfolio") {
            get_portfolio($post->post_parent);
        } else {
            get_sidebar();
        }
        ?>
    </div><!-- side-bar -->
            
    <div id="main-content">
    
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
    
        <?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
    
        <div id="footer">
            <p>Copyright 2010, Blazing Cloud, Inc.</p>
        </div>
    </div> <!-- #main-content -->
</div><!-- #content-wrapper -->

<?php get_footer() ?>