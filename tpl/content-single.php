<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Akina
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(akina_option('patternimg') || !get_post_thumbnail_id(get_the_ID())) { ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<p class="entry-census"><?php echo poi_time_since(strtotime($post->post_date_gmt)); ?>&nbsp;&nbsp;<?php echo get_post_views(get_the_ID()).' '. _n('View','Views',get_post_views(get_the_ID()),'akina')/*次阅读*/?> </p>
		<hr>
	</header><!-- .entry-header -->
	<?php } ?>
	<!--<div class="toc-entry-content"><!-- 套嵌目录使用（主要为了支援评论）-->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ondemand' ),
				'after'  => '</div>',
			) );
		?>
		<!--<div class="oshimai"></div>-->
		<!--<h2 style="opacity:0;max-height:0;margin:0">Comments</h2>--><!-- 评论跳转标记 -->
	</div><!-- .entry-content -->
	<?php the_reward(); ?>
	<footer class="post-footer">
        <div class="post-lincenses"><strong>本文作者：</strong>竟然有人抢包</div>
        <div class="post-lincenses"><strong>本文链接：</strong><a href="<?php echo get_permalink(); ?>" title="<?php echo the_title(); ?>"><?php echo get_permalink(); ?></a></div>
        <div class="post-lincenses"><strong>许可协议：</strong><a href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh" title="CC BY-NC-SA 4.0" target="_blank" rel="nofollow"><i class="fa fa-creative-commons" aria-hidden="true"></i> CC BY-NC-SA 4.0</a></div>
	    <div class="post-tags">
	    	<?php if ( has_tag() ) { echo '<i class="iconfont icon-tags"></i> '; the_tags('', ' ', ' ');}?>
	    </div>
        <?php get_template_part('layouts/sharelike'); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
