<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li><div class="sidebar_top"><div class="sidebar_bg">',
        'after_widget' => '</div></div></li>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
		'name' =>'sidebar'
    ));	
add_filter( 'comments_template', 'legacy_comments' );
function legacy_comments( $file ) {
	if ( !function_exists('wp_list_comments') )
		$file = TEMPLATEPATH . '/legacy.comments.php';
	return $file;
} 
// Custom Header Image Support
define('HEADER_IMAGE', '%s/images/logo.jpg'); // %s is theme dir uri
define('HEADER_IMAGE_WIDTH', 127);
define('HEADER_IMAGE_HEIGHT', 125);
?>
<?php
function theme_admin_header_style() {
?>
<style type="text/css">
#headimg {
	background-image: url(<?php header_image() ?>);	
	height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
	width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
	text-align:right;
}
#headimg h1 
{
	display:none;
}
#headimg #desc {
	display:none;
}
.wrap #hidetext, .wrap #pickcolor, .wrap #defaultcolor { border:solid 1px #000; display:none;}
.wrap .button {margin-top:10px;}

</style>
<?php
}
function theme_header_style() {
?>
<?php
}
if ( function_exists('add_custom_image_header') ) {
	add_custom_image_header('theme_header_style', 'theme_admin_header_style');
}
?>