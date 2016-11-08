<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package inqsite
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'inqsite' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'inqsite' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'inqsite' ), 'inqsite', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- SlickNav用のスタイル -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slicknav.css">
<!-- テーマでjQueryが呼ばれてない場合 -->
<!-- <script src="//code.jquery.com/jquery-1.11.2.min.js"></script> -->
<!-- メニューの開閉を凝ったものにしたい場合（オプション機能利用時のみ） -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script> -->
<!-- SlickNavのスクリプトファイル -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.slicknav.min.js"></script>
<script>
//グローバルナビのCSSセレクタを指定する
jQuery(function(){
  jQuery('.menu-mainmenu-container > ul').slicknav({
label: '', 
    prependTo: "#sm", 
  });
});
</script>
</body>
</html>
