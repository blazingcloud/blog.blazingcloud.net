<?php get_header() ?>
<div class="blog">
            
    <div id="main-content" class='grid'>


<?php  the_post() ?>

			<div id="post-<?php the_ID() ?>" class="tile entry <?php sandbox_post_class() ?>">
				<h1><a class='title' href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h1>
				<div class="meta">
					<span class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
					<span class="category-links"><?php printf( __( 'in %s.', 'sandbox' ), get_the_category_list(', ') ) ?></span>
          <span>
            Posted on
            <abbr class="date-published" 
                title="<?php the_time('Y-m-d\TH:i:sO') ?>">
                <?php the_time('F jS') ?>
            </abbr>
          </span>
        </div>

				<div class="content">
<?php the_content( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>

				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
				</div>
				<div class="meta">
					<span class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
					<span class="meta-sep">|</span>
					<span class="category-links"><?php printf( __( 'Posted in %s', 'sandbox' ), get_the_category_list(', ') ) ?></span>
					<span class="meta-sep">|</span>
					<?php the_tags( __( '<span class="tag-links">Tagged ', 'sandbox' ), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
<?php edit_post_link( __( 'Edit', 'sandbox' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?></span>
				</div>
			<nav id="nav-below" class="archives">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&lt;</span> Previous', 'sandbox' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Next <span class="meta-nav">&gt;</span>', 'sandbox' )) ?></div>
			</nav>
       <?php comments_template() ?>
			</div><!-- .post -->


    <aside id="side-bar" class='tile'>           
        <?php get_sidebar() ?>
    </aside><!-- side-bar -->

    </div> <!-- #main-content -->
</div><!-- #content-wrapper -->

<?php get_footer() ?>
