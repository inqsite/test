<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package inqsite
 */
?>

  </div>
  <!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info" style="text-align:center;">
      運営：<a href="http://inqsite.net/" target="_blank">インクサイト</a>
    </div>
    <!-- .site-info -->
  </footer>
  <!-- #colophon -->
  </div>
  <!-- #page -->

  <?php wp_footer(); ?>
    <!-- SlickNav用のスタイル -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slicknav.css">
    <!-- テーマでjQueryが呼ばれてない場合 -->
    <!-- <script src="//code.jquery.com/jquery-1.11.2.min.js"></script> -->
    <!-- メニューの開閉を凝ったものにしたい場合（オプション機能利用時のみ） -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script> -->
    <!-- SlickNavのスクリプトファイル -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.slicknav.min.js"></script>
    <script>
      //グローバルナビのCSSセレクタを指定する
      jQuery(function () {
        jQuery('.menu-mainmenu-container > ul').slicknav({
          label: '',
          prependTo: "#sm",
        });
      });
    </script>

    </body>

    </html>