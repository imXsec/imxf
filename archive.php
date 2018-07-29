<?php get_header(); ?>

			
			<div id="htext">
				<div id="htitle"><a href="<?php echo get_option('home'); ?>/"><?php if ( is_home() ) {
		bloginfo('name');
	} elseif ( is_category() ) {
		single_cat_title(); echo " - "; bloginfo('name');
	} elseif (is_single() || is_page() ) {
		single_post_title();
	} elseif (is_search() ) {
		echo "搜索结果"; echo " - "; bloginfo('name');
	} elseif (is_404() ) {
		echo '页面未找到!';
	} else {
		wp_title('',true);
	} ?></a></div>
				<div id="hdes"><?php echo category_description(); ?></div>
			</div>
		</header>
<div id="loglist">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="logecho">
				<div class="logtitle"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></div>
				<div class="logtext"><?php the_excerpt(); ?></div>
				<div class="loginfo"><?php the_time('Y年n月j日') ?> - <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?><?php edit_post_link('编辑', ' - ', ''); ?><?php the_tags(' - 标签：', ', ', ''); ?></div>
			</div>
	<?php endwhile; ?>
	<?php else : ?>
	<div class="logecho">
				<div class="logtitle"><center>没有找到文章</center></div>
			</div>
	<?php endif; ?>
	</div>
<div id="pnav">
	<?php previous_posts_link('<< 上一页', 0); ?> <span class="float right"><?php next_posts_link('下一页 >>', 0); ?></span>
		</div>

<?php get_footer(); ?>