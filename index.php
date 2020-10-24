<?php

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex,nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Web Designer - Naohide Takahashi</title>
        <meta name="description" content="Webデザイナー 高橋直秀のポートフォリオサイトです。">
        <meta name="keywords" content="Web, デザイン, デザイナー, ポートフォリオ, Web制作">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header class="header">
            <a href="#contact" class="button-contact"><i aria-label="お問い合わせ" class="fa fa-envelope-o"></i></a>
            <div class="profile">
                <h1 class="site-title abel uppercase text-center">Web Developer<span>Naohide Takahashi</span></h1>
                <img src="./images/img_profile.jpg" alt="プロフィール写真" width="140" height="140" class="block-center profile-icon">
                <p>埼玉県在住、32歳、一児の父。<br>現役Webエンジニア・デザイナー・ディレクター。<br>“広くて深い何でも屋”を目指しています。</p>
            </div>
        </header>

        <div id="main">
            <section id="skills">
                <h2 class="text-center">Skills</h2>
                <p>実務での制作実績のある言語・ライブラリ等を紹介します。</p>

                <div class="container">
                    <div class="skill-box">
                        <i aria-hidden="true" class="skill-icon fa fa-tv"></i>
                        <h3 class="text-center">Front-end</h3>
                        <p>Javascript, jQuery, Vue.js</p>
                    </div>
                    <div class="skill-box">
                        <i aria-hidden="true" class="skill-icon fa fa-gears"></i>
                        <h3 class="text-center">Server-side</h3>
                        <p>PHP, MySQL, Laravel, Wordpress</p>
                    </div>
                    <div class="skill-box">
                        <i aria-hidden="true" class="skill-icon fa fa-commenting-o"></i>
                        <h3 class="text-center">Coding</h3>
                        <p>HTML5, CSS3</p>
                    </div>
                    <div class="skill-box">
                        <i aria-hidden="true" class="skill-icon fa fa-commenting-o"></i>
                        <h3 class="text-center">Design</h3>
                        <p>Photoshop, Illustrator, レスポンシブデザイン</p>
                    </div>
                    <div class="skill-box">
                        <i aria-hidden="true" class="skill-icon fa fa-commenting-o"></i>
                        <h3 class="text-center">Cloud</h3>
                        <p>Google Cloud Platform</p>
                    </div>
                    <div class="skill-box">
                        <i aria-hidden="true" class="skill-icon fa fa-commenting-o"></i>
                        <h3 class="text-center">Game Development</h3>
                        <p>Unity, C#, UI設計, 企画書・仕様書作成</p>
                    </div>
                </div>
            </section>
            
            <section id="works">
                <h2 class="text-center">Works</h2>

                <div class="works-box">
                    <a href="#">
                        <img src="./images/works_thumb_1.jpg" alt="">
                        <div class="works-box-inner">
                            <div class="text-center">
                                <h3>株式会社T様 コーポレートサイト</h3>
                                <small>2020.08</small>
                                <span class="button-readmore">Read More</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="works-box">
                    <a href="#">
                        <img src="./images/works_thumb_2.jpg" alt="">
                        <div class="works-box-inner">
                            <div class="text-center">
                                <h3>株式会社O様 コーポレートサイト</h3>
                                <small>2020.03</small>
                                <span class="button-readmore">Read More</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="works-box">
                    <a href="#">
                        <img src="./images/works_thumb_3.jpg" alt="">
                        <div class="works-box-inner">
                            <div class="text-center">
                                <h3>株式会社M様 コーポレートサイト(デザイン)</h3>
                                <small>2020.02</small>
                                <span class="button-readmore">Read More</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="works-box">
                    <a href="#">
                        <img src="./images/works_thumb_4.jpg" alt="">
                        <div class="works-box-inner">
                            <div class="text-center">
                                <h3>株式会社R様 コーポレートサイト</h3>
                                <small>2017.9</small>
                                <span class="button-readmore">Read More</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="works-box">
                    <a href="#">
                        <img src="./images/works_thumb_5.jpg" alt="">
                        <div class="works-box-inner">
                            <div class="text-center">
                                <h3>株式会社J様 コーポレートサイト</h3>
                                <small>2017.6</small>
                                <span class="button-readmore">Read More</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="works-box">
                    <a href="#">
                        <img src="./images/works_thumb_6.jpg" alt="">
                        <div class="works-box-inner">
                            <div class="text-center">
                                <h3>株式会社M様 コーポレートサイト</h3>
                                <small>2017.4</small>
                                <span class="button-readmore">Read More</span>
                            </div>
                        </div>
                    </a>
                </div>
                
            </section>
            
            <section id="contact">
                <h2 class="text-center">Contact</h2>
                <ul>
                    <li><a href="mailto:cattyneo@gmail.com"><i aria-label="メール" class="fa fa-envelope-o"></i></a></li>
                </ul>
            </section>
        </div>
        <footer>
            <small class="text-center abel uppercase">&copy; Naohide Takahashi, All Rights Reserved.</small>
        </footer>
    </body>
</html>