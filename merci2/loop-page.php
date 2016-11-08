<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_page( 'party' )  ) {?>
						<h1 class="entry-title" style="text-align: center;"><img src="<?php bloginfo('template_directory'); ?>/images/party-page-title.gif" width="219" height="43" alt="<?php the_title(); ?>"></h1>
					<?php } elseif ( is_page( 'catering' )  ) {?>
						<h1 class="entry-title" style="text-align: center;"><img src="<?php bloginfo('template_directory'); ?>/images/catering-page-title.gif" width="193" height="43" alt="<?php the_title(); ?>"></h1>
					<?php } elseif ( is_page( 'houji' )  ) {?>
						<h1 class="entry-title" style="text-align: center;"><img src="<?php bloginfo('template_directory'); ?>/images/houji-page-title.gif" width="73" height="43" alt="<?php the_title(); ?>"></h1>
					<?php } elseif ( is_page( 'stay' )  ) {?>
						<h1 class="entry-title" style="text-align: center;"><img src="<?php bloginfo('template_directory'); ?>/images/stay-page-title.gif" width="163" height="43" alt="<?php the_title(); ?>"></h1>
					<?php } elseif ( is_page( 'meeting' )  ) {?>
						<h1 class="entry-title" style="text-align: center;"><img src="<?php bloginfo('template_directory'); ?>/images/meeting-page-title.gif" width="163" height="43" alt="<?php the_title(); ?>"></h1>
					<?php } elseif ( is_page( 'price' )  ) {?>
						<h1 class="entry-title" style="text-align: center;"><img src="<?php bloginfo('template_directory'); ?>/images/price-page-title.gif" width="73" height="43" alt="<?php the_title(); ?>"></h1>
					<?php } elseif ( is_page( 'event' )  ) {?>
						<h1 class="entry-title" style="text-align: center;"><img src="<?php bloginfo('template_directory'); ?>/images/event-page-title.gif" width="130" height="43" alt="<?php the_title(); ?>"></h1>
					<?php } elseif ( is_page( 'faq' )  ) {?>
						<h1 class="entry-title" style="text-align: center;"><img src="<?php bloginfo('template_directory'); ?>/images/faq-page-title.gif" width="191" height="43" alt="<?php the_title(); ?>"></h1>
					<?php } elseif ( is_page( 'privacy' )  ) {?>
						<h1 class="entry-title" style="text-align: center;"><img src="<?php bloginfo('template_directory'); ?>/images/privacy-page-title.gif" width="312" height="43" alt="<?php the_title(); ?>"></h1>
					<?php } elseif ( is_page( 'link' )  ) {?>
						<h1 class="entry-title" style="text-align: center;"><img src="<?php bloginfo('template_directory'); ?>/images/link-page-title.gif" width="95" height="43" alt="<?php the_title(); ?>"></h1>
					<?php } elseif ( is_page( 'sitemap' )  ) {?>
						<h1 class="entry-title" style="text-align: center;"><img src="<?php bloginfo('template_directory'); ?>/images/sitemap-page-title.gif" width="193" height="43" alt="<?php the_title(); ?>"></h1>
					<?php } elseif ( is_page( 'contact' )  ) {?>
						<h1 class="entry-title" style="text-align: center;"><img src="<?php bloginfo('template_directory'); ?>/images/contact-page-title.gif" width="193" height="43" alt="<?php the_title(); ?>"></h1>
					<?php } else {?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>	


					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>
