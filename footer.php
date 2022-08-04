<footer>
    <div class="footer_logo">
      <a href="index.html">
        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="ロゴ画像">
      </a>
    </div>
    <!-- <ul class="footer_list">
      <li class="footer_item">
        <a href="html/service.html">Service</a>
      </li>
      <li class="footer_item">
        <a href="html/about.html">About</a>
      </li>
      <li class="footer_item">
        <a href="html/news.html">News</a>
      </li>
      <li class="footer_item">
        <a href="html/contact.html">Contact</a>
      </li>
    </ul> -->
    <?php
      $args = array(
        'menu' => 'footer_menu', // 管理画面で作成したメニュー名
        'menu_class' => 'footer_list', // メニューを構成するulタグのクラス名
        'container' => false, // <ul>タグを囲んでいる<div>タグを削除
       );
         // カスタムメニューを表示
         wp_nav_menu($args);
      ?>
    <ul class="footer_sns">
      <li class="sns_icon1">
        <a href="#"><i class="fab fa-twitter"></i></a>
      </li>
      <li class="sns_icon2">
        <a href="#"><i class="fab fa-instagram"></i></a>
      </li>
    </ul>
    <small class="footer_txt">&copy;WithCode.All Right Reserved.</small>
  </footer>
  <script src="<?php echo get_template_directory_uri();?>;/https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/common.js"></script>
  <?php wp_footer(); ?>
</body>
</html>