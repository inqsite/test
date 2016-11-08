<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>



<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>
<div class="hentry">

<h2><img src="<?php bloginfo('template_directory'); ?>/images/information.png" width="387" height="38" alt="醍醐荘インフォメーション"></h2>
<div class="text clearfix">
<?php $my_query = new WP_Query('cat=1&showposts=1'); ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail('news-thumbnails'); ?>
<?php else : ?>
<img src="<?php echo catch_that_image(); ?>" width="143" height="108" />
<?php endif; ?></a>
<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<div class="entry-content">
<?php the_excerpt(); ?>
			</div></div><!-- .entry-content -->

<?php endwhile; // End the loop. Whew. ?>
</div>
<?php wp_reset_postdata(); ?>