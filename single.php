<?php get_header();?>

<!-- ************************************************************* -->

<?php
if (have_posts()) :

	while (have_posts()) : the_post();
	
		//include (TEMPLATEPATH . "/inner_content.php"); ?>
        
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
					<?php the_content(); ?>
					<div style="clear:both;"></div>
				</div>
                
                <?php if(has_tag()) { ?>
                <div class="postmeta">
                	<div class="postmeta_top">
                    	<div class="postmeta_bottom">
                            <p class="story_tags"><?php the_tags('<img src="'.get_bloginfo("stylesheet_directory").'/images/tag_bullet.jpg" alt="" />&nbsp; Tags : ', ', ', '<br />'); ?></p>
                            <p class="read_more"></p>
                            <div style="clear:both;"></div>
              			</div>
                    </div>
                </div>
                <?php } ?>
                
                <p>&nbsp;</p>
                <p>
                <?php if ( comments_open() && pings_open() ) {
					// Both Comments and Pings are open ?>
					You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

				<?php } elseif ( !comments_open() && pings_open() ) {
					// Only Pings are Open ?>
					Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

				<?php } elseif ( comments_open() && !pings_open() ) {
					// Comments are open, Pings are not ?>
					You can skip to the end and leave a response. Pinging is currently not allowed.

				<?php } elseif ( !comments_open() && !pings_open() ) {
					// Neither Comments, nor Pings are open ?>
					Both comments and pings are currently closed.

				<?php } edit_post_link('Edit this entry','','.'); ?>
                </p>
                <div class="comment_template"><?php comments_template(); ?></div>
                
			</div><!-- close story -->
			
		<!-- ************************************************ -->
		
		</div><!-- close postid-->
        
        
	<?php endwhile; else: ?>

	<p class="error"><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    
<?php endif; ?>
            
<!-- ************************************************************* -->
	</div>
</div><!-- close innerContent -->
<?php get_sidebar();?>
<?php get_footer(); ?>