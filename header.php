<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php if ( is_home() ) {
		bloginfo('name'); echo " - "; bloginfo('description');
	} elseif ( is_category() ) {
		single_cat_title(); echo " - "; bloginfo('name');
	} elseif (is_single() || is_page() ) {
		single_post_title(); echo " - "; bloginfo('name');
	} elseif (is_search() ) {
		echo "搜索结果"; echo " - "; bloginfo('name');
	} elseif (is_404() ) {
		echo '页面未找到!';
	} else {
		wp_title('',true);
	} ?></title>
	<meta name="keywords"    content="<?php if ( is_home() ) {
		bloginfo('name'); echo ",小凡网,小凡网络,小凡官网,小凡网络官网,小凡";
	} elseif ( is_category() ) {
		single_cat_title(); echo ",小凡博客,小凡网,小凡网络,小凡官网,小凡网络官网,小凡";
	} elseif (is_single() || is_page() ) {
		single_post_title(); echo ",小凡博客,小凡网,小凡网络,小凡官网,小凡网络官网,小凡";
	} elseif (is_search() ) {
		echo "搜索结果"; echo ",小凡博客,小凡网,小凡网络,小凡官网,小凡网络官网,小凡";
	} elseif (is_404() ) {
		echo "小凡博客,小凡网,小凡网络,小凡官网,小凡网络官网,小凡";
	} else {
		wp_title('',true);
	} ?>">
	<meta name="Description" content="小凡博客，始于2014年，专注网络技术学习，记录点点滴滴。">
	<meta name="google-site-verification" content="E8Gs-JKAP8vdAg1NqoUcKIkAwOvmHZH0hMLneFivmWk">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<?php flush(); ?>
<body>
	<div id="main">
		<header>
				<?php 
    // 列出顶部导航菜单，菜单名称为mymenu，只列出一级菜单
    wp_nav_menu( array( 'menu' => 'mymenu', 'depth' => 1) );
?>
		<li id="searchbut" onClick="st()"><i class="fa fa-search"></i></li>
		<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" style="display: none;">
    <input class="letterinput" type="text" name="s" value=""  placeholder="输入关键词并按回车">
</form>
			<script>
				function st(){
					var searcht = document.getElementById('searchform').style;
					if(searcht.display=="none"){
						searcht.display = "";
					}else{
						searcht.display="none";
					}
				}
			</script>