<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php wp_head(); ?>
</head>

<body>
    <header class="l-header l-inner_padding">
        <div class="l-header_inner">
            <div class="c-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="c-logo_link">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="ロゴ">
                </a>
            </div>
            <nav class="l-header_nav is-pc">
                <ul>
                    <li class="l-header_item">
                        <a href="#news" class="l-header_link">お知らせ</a>
                    </li>
                    <li class="l-header_item">
                        <a href="#about" class="l-header_link">事務所について</a>
                    </li>
                    <li class="l-header_item">
                        <a href="#service" class="l-header_link">取扱業務</a>
                    </li>
                    <li class="l-header_item">
                        <a href="#price" class="l-header_link">料金表</a>
                    </li>
                    <li class="l-header_item">
                        <a href="#flow" class="l-header_link">ご依頼の流れ</a>
                    </li>
                    <li class="l-header_item">
                        <a href="#access" class="l-header_link">所在地</a>
                    </li>
                    <li class="l-header_item">
                        <a href="#contact" class="l-header_link">お問い合わせ</a>
                    </li>
                </ul>
            </nav>
            <!-- hamburger -->
            <button class="l-header_hamburger_btn js-hamburger_btn is-sp">
                <span class="l-header_hamburger_btn_bar1"></span>
                <span class="l-header_hamburger_btn_bar2"></span>
                <span class="l-header_hamburger_btn_bar3"></span>
            </button>
            <nav class="l-header_hamburger js-hamburger is-sp">
                <ul class="l-header_hamburger_list">
                    <li class="l-header_hamburger_item">
                        <a href="#" class="l-header_hamburger_link js-hamburger_link">トップ</a>
                    </li>
                    <li class="l-header_hamburger_item">
                        <a href="#about" class="l-header_hamburger_link js-hamburger_link">当社について</a>
                    </li>
                    <li class="l-header_hamburger_item">
                        <a href="#service" class="l-header_hamburger_link js-hamburger_link">サービス</a>
                    </li>
                    <li class="l-header_hamburger_item">
                        <a href="#case" class="l-header_hamburger_link js-hamburger_link">導入事例</a>
                    </li>
                    <li class="l-header_hamburger_item">
                        <a href="#news" class="l-header_hamburger_link js-hamburger_link">お知らせ</a>
                    </li>
                </ul>
            </nav>
            <div class="l-header_hamburger_background js-hamburger_background is-sp"></div>
        </div><!-- /.l-inner_width -->
    </header><!-- /.l-header -->
