<?php

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
    <header>
        <a href="#contact" id="header-btn-contact"><i aria-label="お問い合わせ" class="far fa-envelope"></i></a>
    </header>

    <section id="intro" class="section">
        <div class="container text-center">
            <h1 class="h1">
                <div class="subtitle">Web Developer</div>
                <div>Naohide Takahashi</div>
            </h1>
            <div>
                <img src="./images/img_profile.jpg" alt="プロフィール写真" width="140" height="140">
            </div>
            <p>現役Webエンジニア・デザイナー・ディレクター。<br>
                埼玉県在住、32歳、一児の父。<br>
                “広くて深い何でも屋”を目指しています。
            </p>
        </div>
    </section>

    <section id="skills" class="section">
        <div class="container text-center">
            <h2 class="h2">
                <div>Skills</div>
                <div class="subtitle">実務制作経験のある言語・ライブラリ等を紹介します。</div>
            </h2>

            <ul class="box-group box-group-skills">
                <li class="box-group-item">
                    <i aria-hidden="true" class="skill-icon fab fa-js-square"></i>
                    <h3 class="h3">Front-end</h3>
                    <div class="text-left">Javascript, jQuery, Vue.js</div>
                </li>
                <li class="box-group-item">
                    <i aria-hidden="true" class="skill-icon fab fa-php"></i>
                    <h3 class="h3">Server-side</h3>
                    <div class="text-left">PHP, MySQL, Laravel, Wordpress</div>
                </li>
                <li class="box-group-item">
                    <i aria-hidden="true" class="skill-icon fas fa-code"></i>
                    <h3 class="h3">Coding</h3>
                    <div class="text-left">HTML5, CSS3, Sass</div>
                </li>
                <li class="box-group-item">
                    <i aria-hidden="true" class="skill-icon fas fa-palette"></i>
                    <h3 class="h3">Design</h3>
                    <div class="text-left">Photoshop, Illustrator, レスポンシブデザイン</div>
                </li>
                <li class="box-group-item">
                    <i aria-hidden="true" class="skill-icon fas fa-server"></i>
                    <h3 class="h3">Cloud</h3>
                    <div class="text-left">Google Cloud Platform</div>
                </li>
                <li class="box-group-item">
                    <i aria-hidden="true" class="skill-icon fas fa-gamepad"></i>
                    <h3 class="h3">Game Development</h3>
                    <div class="text-left">Unity, C#, UI設計, 企画書・仕様書作成</div>
                </li>
            </ul>
        </div>
    </section>

<?php

// [id => work]
$works = [
    1 => [
        'title' => '株式会社T様 コーポレートサイト',
        'date' => '2020.08',
    ],
    2 => [
        'title' => '株式会社O様 コーポレートサイト',
        'date' => '2020.03',
    ],
    3 => [
        'title' => '株式会社M様 コーポレートサイト(デザイン)',
        'date' => '2020.02',
    ],
    4 => [
        'title' => '株式会社R様 コーポレートサイト',
        'date' => '2017.09',
    ],
    5 => [
        'title' => '株式会社J様 コーポレートサイト',
        'date' => '2017.06',
    ],
    6 => [
        'title' => '株式会社M様 コーポレートサイト',
        'date' => '2017.04',
    ],
]
?>

    <section id="works" class="section">
        <div class="container text-center">
            <h2 class="h2">
                <div>Works</div>
                <div>制作実績の一部を紹介します。</div>
            </h2>
            
            <div class="box-group box-group-works">
                <?php foreach($works as $index => $work) : ?>
                <a class="box-group-item" href="<?= "/works.php?id={$index}" ?>">
                    <img src="<?= "./images/works_thumb_{$index}.jpg" ?>" alt="<?= $work['title'] ?>">

                    <div class="box-group-inner">
                        <h3><?= $work['title'] ?></h3>
                        <small><?= $work['date'] ?></small>
                        <span class="button-readmore">Read More</span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>        
        </div>        
    </section>
    
    <section id="contact" class="section">
        <div class="container text-center">
            <h2 class="h2">
                <div>Contact</div>
                <div class="subtitle">お気軽にお問い合わせください。</div>
            </h2>
            <div class="contacts">
                <a href="mailto:cattyneo@gmail.com"><i aria-label="メール" class="contact-icon fa fa-envelope-o"></i></a>
            </div>
        </div>
    </section>
    
    <footer>
        <small class="text-center font-alt">&copy; Naohide Takahashi, All Rights Reserved.</small>
    </footer>
</body>
</html>