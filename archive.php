<?php get_header();?>
<!-- ************************************************************* --> 
<?php is_tag(); ?>
<?php if (have_posts()) : ?>
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
<h2 class="pagetitle">Category : <?php single_cat_title(); ?></h2>
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h2 class="pagetitle">Author Archive</h2>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2 class="pagetitle">Blog Archives</h2>
<?php } ?>
<?php //endif; ?>
<div class="navigation">
<div class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></div>
<div class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></div>
<div style="clear:both;"></div>
</div>
<!-- ************************************************************* -->
<?php while (have_posts()) : the_post();
//include (TEMPLATEPATH . "/inner_content.php");?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<!-- ************************************************ -->
<div class="story">
<div class="story_title">
<div class="title_bg">
<div class="title_top">
                        	<div class="title_bottom">
								<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                <div class="story_category"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cat_bullet.jpg" alt="" /> Filed Under : <?php the_category(',') ?> by <?php the_author(); ?></div>
                                <div class="story_date"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/date_bullet.gif" alt="" /> <?php the_date('M.j,Y'); ?></div>
                                <div style="clear:both;"></div>
                          	</div>
                    	</div>
                   	</div>
               	</div>	
				<div class="storyContent">
					<?php the_content('Read More...'); ?>
					<div style="clear:both;"></div>
				</div>
                <div class="postmeta">
                	<div class="postmeta_top">
                    	<div class="postmeta_bottom">
                            <p class="story_tags"><?php the_tags('<img src="'.get_bloginfo("stylesheet_directory").'/images/tag_bullet.jpg" alt="" />&nbsp; Tags : ', ', ', '<br />'); ?></p>
                            <p class="read_more"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bullet.gif" alt="" />&nbsp; <a href="<?php the_permalink(); ?>">Read more...</a></p>
                            <div style="clear:both;"></div>
              			</div>
                    </div>
                </div>
			</div><!-- close story -->
			
		<!-- ************************************************ -->
		
		</div><!-- close postid-->
<?php endwhile; ?>

	<div class="navigation">
        <div class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></div>
        <div class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></div>
        <div style="clear:both;"></div>
    </div>   
<?php else: 
		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
//get_search_form();	
 endif; ?>
<!-- ************************************************************* -->
</div>
</div><!-- close innerContent -->
<?php get_sidebar();?>
<?php get_footer(); ?>