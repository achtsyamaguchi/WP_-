
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?>プログラミング教材「WithCode+」</title>
  <meta name="description" content="<?php bloginfo('description'); ?>/「人生をコードと共に」というビジョンを達成するべく、皆さんのプログラミング学習をサポートします。">
  <meta name="keywords" content="IT,プログラミング,コミュニティ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="プログラミング教材「WithCode+」">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://withcode-plus.tech">
  <meta property="og:image" content="img/logo.png">
  <meta property="og:description" content="「人生をコードと共に」というビジョンを達成するべく、皆さんのプログラミング学習をサポートします。">
  <meta property="og:site_name" content="プログラミング教材">
  <link rel="icon" href="<?php echo get_template_directory_uri();?>/favicon.ico">
  <link rel="apple-touch-icon" sizes="180×180" href="<?php echo get_template_directory_uri();?>/img/logo.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/common1.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/common2.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/news.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/about.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/contact.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/service.css">
  
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/index.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="header_inner">
      <a href="<?php echo home_url(); ?>" class="header_logo">
        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="ロゴ画像">
      </a>
      <nav class="header_nav">
        <!-- <ul>
          <li><a href="html/service.html">SERVICE</a></li>
          <li><a href="html/about.html">ABOUT</a></li>
          <li><a href="html/news.html">NEWS</a></li>
          <li><a href="html/contact.html">CONTACT</a></li>
        </ul> -->
        <?php
    $args = array(
      'menu' => 'menu', // 管理画面で作成したメニュー名
      'menu_class' => '', // メニューを構成するulタグのクラス名
      'container' => false, // <ul>タグを囲んでいる<div>タグを削除
     );

       // カスタムメニューを表示
       wp_nav_menu($args);
     ?>
      </nav>
    </div>
    <div class="drawer"></div>
  </header>