<?php
/*
Page Without a Title
*/
?>

<?php get_header() ?>

<div id="content-wrapper">
    <div id="side-bar">       
        <?php
        #FIXME: isn't there a better way to get portfolio's page id???
        $page_title = trim(wp_title( NULL, 0, NULL));
        $page_ID = -1;
        if($page_title == "Portfolio") {
            foreach(get_pages() as $page) {
                $page_ID = $page->ID;
                if(get_the_title($page_ID) == $page_title) {
                    break;
                }
            }
        }
                                
        if($page_ID != -1) {
            get_portfolio($page_ID);
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