<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="utf-8">
<meta name="description" content="<?php get_page_desc() ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no,address=no,email=no">
<meta property="og:title" content="<?php get_site_title(); ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo SITE_URI ?>" />
<meta property="og:image" content="<?php echo SITE_URI ?>img/og_image.jpg" />
<meta property="og:site_name" content="<?php echo SITE_NAME ?>" />
<meta property="og:description" content="<?php get_site_desc() ?>" />
<meta property="fb:app_id" content="<?php echo FB_APP_ID ?>" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@jonoya_js" />
<!--[if lte IE 8]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<![endif]-->
<link rel="icon" href="favicon.ico" type="image/vnd.microsoft.icon">
<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
<link rel="canonical" href="<?php get_canonical_uri(); ?>">
<link rel="stylesheet" href="css/style.css?170306-1">
<title><?php get_page_title(); ?></title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92991983-2', 'auto');
  ga('send', 'pageview');
</script>
</head>
<body<?php get_body_class(); ?>>
    <!--==================== header ====================-->
    <header id="header">
        <div class="container full-md">

            <!-- header-left -->
            <div class="header-left">
                <p class="phrase pc-only">大阪本町の貸切パーティー・懇親会に</p>
                <<?php get_logo_tag() ?> class="logo">
                    <a href="<?php get_home_path() ?>"><img src="img/logo.png" alt="大阪本町の貸切パーティー・懇親会に じょうのや／じぇいず"></a>
                </<?php get_logo_tag() ?>>
            </div>

            <!-- header-right -->
            <div class="header-right">
                <!-- pc-tel -->
                <!--<div class="tel-box icon-box pc-only">
                    <div class="icon-circle">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="icon-text">
                        <span>ご質問・ご相談はお気軽に</span>
                        <img src="img/tel-js.png" alt="<?php echo TEL_HYP_JS; ?>">
                        <span>受付時間 10:00-22:00</span>
                    </div>
                </div>-->

                <!-- sp-tel -->
                <!--<a class="sp-tel sp-only" href="tel:<?php echo TEL_NUM_JS; ?>">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <small>Tel</small>
                </a>-->

                <!-- sp-map -->
                <a class="sp-map sp-only" href="access.php#map">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <small>Map</small>
                </a>

                <!-- sp-menu -->
                <div id="sp-menu-btn" class="sp-only">
                    <div class="inner">
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                        <div class="mtext">Menu</div>
                    </div>
                </div>
                <ul id="sp-menu" class="sp-only">
                    <li><a href="<?php get_home_path() ?>">トップページ</a></li>
                    <li><a href="first.php">はじめての方へ</a></li>
                    <li><a href="wedding.php">結婚式二次会</a></li>
                    <li><a href="party.php">宴会・パーティー</a></li>
                    <li><a href="seminar.php">セミナー懇親会・企業様向け宴会</a></li>
                    <li><a href="access.php">店舗概要・アクセス</a></li>
                </ul>
            </div><!-- /header-right -->

        </div>
    </header>
    <!--==================== /header ====================-->

    <?php if ( is_home() ) : ?>

    <!-- slides-area -->
    <div id="slides-area">
        <div class="container full-md">

            <!-- slides -->
            <div id="slides">
                <div><img src="img/slides/01.jpg" alt="本町のじょうのや・じぇいずで貸切パーティー"></div>
                <div><img data-lazy="img/slides/02.jpg" alt="シェフ特製の華やかな料理"
                     src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7"></div>
                <div><img data-lazy="img/slides/03.jpg" alt="結婚式二次会のウェディングドレスを着た花嫁"
                     src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7"></div>
                <div><img data-lazy="img/slides/05.jpg" alt="じょうのや・じぇいず くつろぎの個室"
                     src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7"></div>
                <div><img data-lazy="img/slides/06.jpg" alt="美しくライトアップされたワインボトル"
                     src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7"></div>
                <div><img data-lazy="img/slides/07.jpg" alt="無料レンタル機材 マイク・プロジェクター"
                     src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7"></div>
            </div>

        </div>
    </div><!-- /slides-area -->

    <?php endif; ?>

    <!-- pc-menu -->
    <div id="pc-menu" class="pc-only">
        <div class="container">

            <ul class="clearfix">
                <li><a href="<?php get_home_path() ?>"<?php add_active_class('index.php') ?>><span>トップページ</span><small>Home</small></a></li>
                <li><a href="first.php"<?php add_active_class('first.php') ?>><span>はじめての方へ</span><small>First</small></a></li>
                <li><a href="wedding.php"<?php add_active_class('wedding.php') ?>><span>結婚式二次会</span><small>Wedding</small></a></li>
                <li><a href="party.php"<?php add_active_class('party.php') ?>><span>宴会・パーティ</span><small>Party</small></a></li>
                <li><a href="seminar.php"<?php add_active_class('seminar.php') ?>><span>セミナー懇親会</span><span>企業様向け宴会</span></a></li>
                <li><a href="access.php"<?php add_active_class('access.php') ?>><span>店舗概要</span><small>Info & Access</small></a></li>
            </ul>

        </div>
    </div><!-- /pc-menu -->

    <!--==================== main ====================-->
    <main id="content">
