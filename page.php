<?php get_header();?>
<!-- ************************************************************* -->
<?php if (have_posts()) :
while (have_posts()) : the_post(); ?>
<div class="postid" id="post-<?php the_ID(); ?>">         
<div class="story">   
<div class="page_title"><h2><?php the_title(); ?></h2></div>
<div class="storyContent">
<?php the_content(); ?>
<div style="clear:both;"></div>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>
</div>            
</div><!-- close postid-->
<?php endwhile; else: ?>
<div class="error"><?php _e('Not found.'); ?></div>  
<?php endif; ?>
<?php comments_template(); ?>
    
<!-- ************************************************************* -->
</div>
</div><!-- close innerContent -->

<?php get_footer(); ?>