<?php
/**
 * The template for displaying all single posts.
 *
 * @package inqsite
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- adsense -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- kakegawainfo_link -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5468034763548683"
     data-ad-slot="7740608712"
     data-ad-format="link"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- /adsense -->

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- kakefooter -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5468034763548683"
     data-ad-slot="8658938714"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- X:S ZenBackWidget --><div id="zenback-widget-loader"></div><script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var r=Math.ceil((new Date()*1)*Math.random());var j=d.createElement("script");j.id=i;j.async=true;j.src="//w.zenback.jp/v1/?base_uri=http%3A//kakegawa.info/&nsid=92307995471441672%3A%3A137118901367515586&rand="+r;d.body.appendChild(j);}}(document,"zenback-widget-js");</script><!-- X:E ZenBackWidget -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
