<?php
function aurelius_comment($comment, $args, $depth) 
{
   $GLOBALS['comment'] = $comment; ?>
	   
<li class="comment" id="li-comment-<?php comment_ID(); ?>">
			<div class="gravatar"><?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 48); } ?></div><div class="plinfo"><div class="author_name"><?php printf(__('<cite class="author_name">%s</cite>'), get_comment_author_link()); ?></div><div class="rpl">发表于：<?php echo get_comment_time('Y-m-d H:i'); ?> - <?php comment_reply_link(array_merge( $args, array('reply_text' => '回复','depth' => $depth, 'max_depth' => $args['max_depth']))) ?> - <?php edit_comment_link('修改'); ?></div></div>
					
				<div class="comment_text">
					<?php if ($comment->comment_approved == '0') : ?>
					<em>你的评论正在审核，稍后会显示出来！</em><br />
      	<?php endif; ?>
      	<?php comment_text(); ?>
			</div>
		</li>	   

<?php }

function register_my_menus() {
 register_nav_menus(
 array( 'header-menu' => __( 'Header Menu' ) )
 );
 }
add_action( 'init', 'register_my_menus' );
//摘要字数
function custom_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_filter( 'show_admin_bar', '__return_false' );

add_action( 'wp_default_scripts', function( $scripts ) {
if ( ! empty( $scripts->registered['jquery'] ) ) {
$jquery_dependencies = $scripts->registered['jquery']->deps;
$scripts->registered['jquery']->deps = array_diff( $jquery_dependencies, array( 'jquery-migrate' ) );
}
} );

?>