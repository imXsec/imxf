<?php get_header(); ?>
		</header>
		<div class="logecho">
		<div class="logtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		<div class="loginfo"><?php the_time('Y年n月j日') ?> - <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?><?php edit_post_link('编辑', ' - ', ''); ?><?php the_tags(' - 标签：', ', ', ''); ?></div>
			<div id="pt"></div>
		<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
		<div class="logtext"><?php the_content(); ?></div>
		</div>
	<?php else : ?>
	<div class="logtitle"><center>没有找到文章</center></div>
	<?php endif; ?>
<?php comments_template(); ?>
	<?php get_footer(); ?>