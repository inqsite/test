<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->
</div><!-- #wrapper -->
	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

<div class="copy">Copyright © 2012 DAIGOSO, All Rights Reserved.</div>
<div class="move-top"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/move-top.gif" width="111" height="21" alt="ページトップへ"></a></div>
		</div><!-- #colophon -->
<!--
		<div class="footer-bottom"><img src="<?php bloginfo('template_directory'); ?>/images/fotter-bottom-logo.gif" width="536" height="105" alt="京都の醍醐寺三宝院を模して作られた600坪の庭園を是非ご堪能ください。醍醐荘"></div> -->
	</div><!-- #footer -->



<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
