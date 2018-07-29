<?php get_header(); ?>
<div id="logo">
				<img alt="" src="//q2.qlogo.cn/headimg_dl?dst_uin=2327221172&spec=100">
			</div>
			
			<div id="htext">
				<div id="htitle"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
				<div id="hdes"><?php bloginfo('description'); ?></div>
			</div>
		</header>
<div id="loglist">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="logecho">
				<div class="logtitle"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></div>
				<div class="logtext"><?php the_content('阅读全文...'); ?></div>
				<div class="loginfo"><?php the_time('Y年n月j日') ?> - <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?><?php edit_post_link('编辑', ' - ', ''); ?><?php the_tags(' - 标签：', ', ', ''); ?></div>
			</div>
	<?php endwhile; ?>
	<?php else : ?>
	<div class="logecho">
				<div class="logtitle"><center>页面或文章不存在，或已删除。</center></div>
			</div>
	<?php endif; ?>
	</div>
<div id="pnav">
	<?php previous_posts_link('<< 查看新文章', 0); ?> <span class="float right"><?php next_posts_link('查看旧文章 >>', 0); ?></span>
		</div>

<?php get_footer(); ?>