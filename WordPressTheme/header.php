<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/images/common/favicon.ico">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="p-header l-header js-header">
    <div class="p-header__inner l-inner">
      <div class="p-header__logo">
        <a href="<?php echo home_url( '/' ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="ロゴ">
        </a>
      </div>
      <?php if ( is_home() || is_front_page() ) : ?><!-- トップページで表示 -->
      <h1 class="p-header__title">サイトタイトル</h1>
      <?php else: ?><!-- それ以外のページで表示 -->
      <p class="p-header__title">サイトタイトル</p>
      <?php endif; ?>
      <div class="p-header__hamburger-btn js-header-hamburger">
				<span></span>
				<span></span>
			</div>
    </div>
    <nav class="p-header__nav p-nav l-nav js-nav">
      <div class="p-nav__inner">
        <ul class="p-nav__list">
          <li class="p-nav__item">
            <a href="/about">about</a>
          </li>
          <li class="p-nav__item">
            <a href="/news">news</a>
          </li>
          <li class="p-nav__item">
            <a href="/contact">contact</a>
          </li>
        </ul>
        <ul class="p-nav__sns">
          <li class="p-nav__sns-item">
            <a href="https://www.instagram.com/xxxxx" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/ic-ig-gray.svg" alt="Instagram">
            </a>
          </li>
          <li class="p-nav__sns-item">
            <a href="https://www.facebook.com/xxxxx" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/ic-fb-gray.svg" alt="Facebook">
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
