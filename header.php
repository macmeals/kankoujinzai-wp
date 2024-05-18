<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>観光人材株式会社</title>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/kankoujinzai-style.css">
    <link rel="shortcut icon" href="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
    <header class="l-header">
        <div class="p-header">
            <a class="p-header__logo" href="<?php echo home_url(); ?>">
                <img class="c-logo" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/logo_kankoujinzai.webp" alt="観光人材株式会社のロゴ">
            </a>
            <nav class="p-header__mobile">
                <ul class="p-header__content">
                    <li>
                        <a href="<?php echo home_url(); ?>/company/">企業情報</a>
                    </li>
                    <li >
                        <a href="<?php echo home_url(); ?>/contact/" class="c-button__header">お問い合わせ</a>
                    </li>
                </ul>
            </nav>
            <button class="c-button__hamberger">
                    <span class="c-button__hamberger__upperbar"></span>
                    <span class="c-button__hamberger__middlebar"></span>
                    <span class="c-button__hamberger__underbar"></span>
            </button>
        </div>
        <?php wp_head();?>
    </header>
    <div class="l-wrapper"> <!-- 閉じタグはFooterで記載 --> 