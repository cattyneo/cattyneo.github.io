<?php
    require_once('common.php')
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Developer - Naohide Takahashi</title>
    <meta name="description" content="Web開発者 高橋直秀のポートフォリオサイトです。">
    <meta name="keywords" content="Web, デザイン, デザイナー, ポートフォリオ, Web制作">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="header">
        <div class="container d-flex">
            <a href="#contact" id="header-btn-contact" class="header-btn"><i aria-label="お問い合わせ" class="far fa-envelope"></i></a>
        </div>
    </header>

    <section id="intro" class="section section-intro">
        <div class="container text-center">
            <h1 class="h1">
                <div class="subtitle">Web Developer</div>
                <div>Naohide Takahashi</div>
            </h1>
            <img class="photo-intro" src="./images/img_profile.jpg" alt="プロフィール写真" width="160" height="160">
            <p>現役Webエンジニア・デザイナー・ディレクター。<br>
                埼玉県在住、32歳、一児の父。<br>
                “広くて深い何でも屋”を目指しています。
            </p>
        </div>
    </section>

    <section id="skills" class="section section-skills">
        <div class="container text-center">
            <h2 class="h2">
                <div>Skills</div>
                <div class="subtitle">実務経験のある言語・ライブラリ・技術を紹介します。</div>
            </h2>

            <ul class="box-group box-group-skills">
                <li class="box-group-item">
                    <i aria-hidden="true" class="skill-icon fab fa-js-square"></i>
                    <h3 class="h3 h3-skills">Front-end</h3>
                    <div class="text-left">Javascript, jQuery, Vue.js</div>
                </li>
                <li class="box-group-item">
                    <i aria-hidden="true" class="skill-icon fab fa-php"></i>
                    <h3 class="h3 h3-skills">Server-side</h3>
                    <div class="text-left">PHP, MySQL, Laravel, Wordpress</div>
                </li>
                <li class="box-group-item">
                    <i aria-hidden="true" class="skill-icon fas fa-code"></i>
                    <h3 class="h3 h3-skills">Coding</h3>
                    <div class="text-left">HTML5, CSS3, Sass, Bootstrap, Github</div>
                </li>

                <li class="box-group-item">
                    <i aria-hidden="true" class="skill-icon fas fa-palette"></i>
                    <h3 class="h3 h3-skills">Design</h3>
                    <div class="text-left">Photoshop, Illustrator, レスポンシブデザイン</div>
                </li>
                <li class="box-group-item">
                    <i aria-hidden="true" class="skill-icon fab fa-github"></i>
                    <h3 class="h3 h3-skills">Github</h3>
                    <div class="text-left">Github (command line)</div>
                </li>
                <li class="box-group-item">
                    <i aria-hidden="true" class="skill-icon fas fa-server"></i>
                    <h3 class="h3 h3-skills">Cloud</h3>
                    <div class="text-left">Google Cloud Platform</div>
                </li>

                <li class="box-group-item">
                    <i aria-hidden="true" class="skill-icon fas fa-users"></i>
                    <h3 class="h3 h3-skills">Direction</h3>
                    <div class="text-left">進行管理, 要件定義, 設計, 技術指導</div>
                </li>
                <li class="box-group-item">
                    <i aria-hidden="true" class="skill-icon fas fa-gamepad"></i>
                    <h3 class="h3 h3-skills">Game Development</h3>
                    <div class="text-left">Unity, C#, UI設計, 企画書・仕様書作成</div>
                </li>
            </ul>
        </div>
    </section>

    <section id="works" class="section section-works">
        <div class="container text-center">
            <h2 class="h2">
                <div>Works</div>
                <div class="subtitle">制作実績の一部をご紹介します。</div>
            </h2>
        </div>

        <div class="box-group box-group-works text-center">
            <?php foreach($works as $index => $work) : ?>
            <div class="box-group-item">
                <a class="box-group-inner" href="<?= "./works.php?id={$index}" ?>">
                    <h3 class="h3 h3-works">
                        <div><?= $work['title'] ?></div>
                        <div class="subtitle"><?= $work['date'] ?></div>
                    </h3>
                    <div class="btn-readmore">Read More</div>
                </a>
                <img class="box-group-image" src="<?= "./images/works_thumb_{$index}.jpg" ?>" alt="<?= $work['title'] ?>">
            </div>
            <?php endforeach; ?>
        </div>        
    </section>

    <section id="history" class="section section-history">
        <div class="container">
            <h2 class="h2 text-center">
                <div>History</div>
                <div class="subtitle">略歴</div>
            </h2>

            <dl class="dl">
                <dt class="dt">
                    <h3 class="h3 h3-history">
                        <div class="subtitle">2016 〜 2017.09</div>
                        <div>フリーランスWebデザイナー</div>
                    </h3>
                </dt>
                <dd class="dd">
                知人のWeb/アプリ制作会社CEOに勧められ、Webデザイナーとして制作請負を開始。<br>
                並行して Tech Academy Webデザインコースにて学習。<br>
                2017年から個人事業主として独立。単価交渉、契約から企画、デザイン、コーディング、運用サポート、コンサルまで個人で担当する。
                </dd>

                <dt class="dt">
                    <h3 class="h3 h3-history">
                        <div class="subtitle">2017.06 〜 2019.12</div>
                        <div>ゲームクリエイター（プランナー）</div>
                    </h3>
                </dt>
                <dd class="dd">
                以前から憧れていたゲーム業界に、業務委託社員として参画。<br>
                ゲームプランナーとして、ソーシャルゲーム新規開発、運用に携わる。<br>
                企画・仕様書作成、UI設計、仕様策定、ディレクション、Webサイト保守/運用等を担当。
                </dd>

                <dt class="dt">
                    <h3 class="h3 h3-history">
                        <div class="subtitle">2019.12 〜 Now</div>
                        <div>Web制作チームリーダー</div>
                    </h3>
                </dt>
                <dd class="dd">
                運用タイトルのサービス終了に伴い、所属会社の本社配属へと転向。<br>
                Web制作チームリーダーとして、Webデザイン、コーディング、ディレクション、メンバーへの技術指導等、プレイングリーダーとして広く業務に携わる。
                </dd>
            </dl>
        </div>
    </section>
    
    <section id="contact" class="section section-contact">
        <div class="container text-center">
            <h2 class="h2">
                <div>Contact</div>
                <div class="subtitle">お気軽にお問い合わせください。</div>
            </h2>
            <div class="contacts">
                <a class="contact-link" href="mailto:cattyneo@gmail.com"><i aria-label="お問い合わせ" class="contact-icon far fa-envelope"></i></a>
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <div class="container">
            <div class="font-alt text-center">&copy; Naohide Takahashi, All Rights Reserved.</div>
        </div>
    </footer>
</body>
</html>