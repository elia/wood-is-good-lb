<?php get_header();?>

<!-- ************************************************************* -->

<?php if (have_posts()) : ?> 
		<h2 class="pagetitle">Search Results</h2>
        
        <div class="navigation">
            <div class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></div>
            <div class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></div>
            <div style="clear:both;"></div>
        </div>
        
	<?php while (have_posts()) : the_post(); ?>
    
        	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		
		<!-- ************************************************ -->
		
			<div class="story">
				<div class="story_title">
                	<div class="title_bg">
                    	<div class="title_top">
                        	<div class="title_bottom">
								<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                <div class="story_category"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cat_bullet.jpg" alt="" /> Filed Under : <?php the_category(',') ?> by <?php the_author(); ?></div>
                                <div class="story_date"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/date_bullet.jpg" alt="" /> <?php the_date('M.j,Y'); ?></div>
                                <div style="clear:both;"></div>
                          	</div>
                    	</div>
                   	</div>
               	</div>
                
				<div class="storyContent"><?php the_excerpt(); ?></div>
                
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

<?php else: ?>

        <h2 class="error">No posts found. Try a different search?</h2>
        <?php get_search_form(); ?>
    
<?php endif; ?>

<!-- ************************************************************* -->
	</div>
</div><!-- close innerContent -->
                    
<?php get_sidebar();?>
<?php get_footer(); ?>