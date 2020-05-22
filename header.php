<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('the_title'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
  <?php wp_head(); ?>
</head>
<body>
  <div class="header">
    <?php if(!wp_is_mobile()): ?>
    <div class="header__logo">
      <a href="" class="header__logo-link">
        <img src="<?php echo get_template_directory_uri(); ?>/img/header__logo.png" class="header__logo-img" alt="">
      </a>
    </div>
    <div class="header__nav">
      <div class="header__menu">
        <div class="header__menu-item">
          <a href="" class="header__menu-item-link">お悩み別コース</a>
        </div>
        <div class="header__menu-item">
          <a href="" class="header__menu-item-link">成功事例</a>
        </div>
        <div class="header__menu-item">
          <a href="" class="header__menu-item-link">製品仕様</a>
        </div>
        <div class="header__menu-item">
          <a href="" class="header__menu-item-link">導入までの流れ</a>
        </div>
        <div class="header__menu-item">
          <a href="" class="header__menu-item-link">料金</a>
        </div>
        <div class="header__menu-item">
          <a href="" class="header__menu-item-link">私たちについて</a>
        </div>
      </div>
    </div>
    <div class="header__btn">
      <div class="header__btn-item">
        <div class="header__btn-dl-icon"></div>
        <a href="" class="header__btn-item-link">資料ダウンロード</a>
      </div>
      <div class="header__btn-item">
        <div class="header__btn-mail-icon"></div>
        <a href="" class="header__btn-item-link">お問い合わせ</a>
      </div>
    </div>
    <?php else: ?>
    <div class="header-sp__logo">
      <a href="" class="header-sp__logo-link">
        <img src="<?php echo get_template_directory_uri(); ?>/img/header__logo.png" class="header-sp__logo-img" alt="">
      </a>
    </div>
    <div class="header-sp__menu"></div>
    <?php endif; ?>
  </div>