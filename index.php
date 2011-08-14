<?php get_header(); ?>

<!-- ************************************************************* -->
<?php
if (have_posts()) : ?>

		<div class="navigation">
            <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
            <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
            <div style="clear:both;"></div>
        </div>

<?php	while (have_posts()) : the_post();
	
?>
		
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		
		<!-- ************************************************ -->
		
			<div class="story">
            	<div class="story_title">
                    <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    <div class="story_category"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cat_bullet.jpg" alt="" /> Filed Under : <?php the_category(',') ?> by <?php the_author(); ?></div>
                    <div class="story_date"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/date_bullet.gif" alt="" /> <?php the_date('M.j,Y'); ?></div>
                    <div style="clear:both;"></div>
               	</div>
				
				<div class="storyContent">
					<?php the_content('Read More...'); ?>
					<div style="clear:both;"></div>
				</div>
                <div class="postmeta">
                    <p class="story_tags"><?php the_tags('<img src="'.get_bloginfo("stylesheet_directory").'/images/tag_bullet.jpg" alt="" />&nbsp; Tags : ', ', ', '<br />'); ?></p>
                    <p class="read_more"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bullet.gif" alt="" />&nbsp; <a href="<?php the_permalink(); ?>">Read more...</a></p>
                    <div style="clear:both;"></div>
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

	<h2 class="error"><?php _e('Not Found.'); ?></h2>
	<p class="error">Sorry, but you are looking for something that isn't here.</p>
    <?php //get_search_form(); ?>
    
<?php endif; ?>

	
<!-- ************************************************************* -->
	</div>
</div>



<?php get_footer(); ?>