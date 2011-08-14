<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
  <?php if (is_home()) { ?>
  <?php bloginfo('description'); ?>
  : 
  <?php bloginfo('name'); ?><?php }  ?>
  <?php if (is_page()) { ?>
  <?php wp_title(' '); ?>
  <?php if(wp_title(' ', false)) { echo ' : '; } ?>
  <?php bloginfo('name'); ?><?php }  ?>
  <?php if (is_404()) { ?>
  Page not found : <?php bloginfo('name'); ?>
  <?php }  ?>
  <?php if (is_archive()) { ?>
  <?php wp_title(' '); ?>
  <?php if(wp_title(' ', false)) { echo ' : '; } ?>
  <?php bloginfo('name'); ?>
  <?php }  ?>
  <?php if(is_search()) { ?>
  <?php echo wp_specialchars($s, 1); ?>
  : 
  <?php bloginfo('name'); ?>
  <?php } else if (is_single()){ ?>
  <?php { wp_title(' ');if(wp_title(' ', false)) { echo ' : '; }single_cat_title();echo " : "; bloginfo('name');} ?>
  <?php } ?>
</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?v5" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> 
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/dhtml.js"></script>
<!--[if IE 6]>
<script src="<?php bloginfo('stylesheet_directory'); ?>/DD_belatedPNG.js"></script>
<script>
  /* EXAMPLE */
  DD_belatedPNG.fix('div,ul,li,h2,img');
  /* string argument can be any CSS selector */
  /* .png_bg example is unnecessary */
  /* change it to what suits you! */
</script>
<![endif]-->
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>
<div class="header">
<a name="top"></a>
<div class="main">
<div class="header_top">
<div class="header_left">
<div class="title">
<div class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php header_image();?>" alt="" /></a></div>
<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a></h1>
<h3><?php bloginfo('description'); ?></h3>
</div>
</div>
<div class="header_search">
<form action="<?php bloginfo('url'); ?>" method="get">
<input class="search_text" type="text" name="s" value="Search" onfocus="this.value=(this.value=='Search') ? '' : this.value;" onblur="this.value=(this.value=='') ? 'Search' : this.value;" />
<input class="search_btn" type="submit" value="Go" />
<div style="clear:both"></div>
</form>
</div>
<div style="clear:both;"></div>
</div>
<div class="nav">


<ul id="nav">
<?php wp_list_pages('title_li=&depth=1'); ?>
</ul>

<div style="clear:both;"></div>
</div>
</div>
</div><!-- header ends -->
<div class="content">
<div id="main">
<div class="main_content">
<div class="innerContent">
<div class="content_bg"><?php echo $header_img; ?>