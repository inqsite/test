<?php $my_query = new WP_Query('cat=2&showposts=5'); ?>

<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(clearfix); ?>>
			<h3 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<div class="entry-summary">
<div class="thumb_img alignleft">

<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail(thumbnail); ?>
<?php else : ?>

<img src="<?php echo catch_that_image(); ?>" width="100" height="100" />
<?php endif; ?>
</div>
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->


			<div class="entry-utility">
				<?php if ( count( get_the_category() ) ) : ?>
					<span class="cat-links">
						<?php printf( __( ' %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
					</span>
					<span class="meta-sep">|</span>
				<?php endif; ?>

<?php the_time('Y年m月d日（D）'); ?>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
			</div><!-- .entry-utility -->

		</div><!-- #post-## -->
<hr />


<?php endwhile; // End the loop. Whew. ?>


