<?php

// [id => work]
// skills: 使用技術
// roles: 担当箇所
$works = [
    1 => [
        'title' => '株式会社T様 コーポレートサイト',
        'date' => '2020.08',
        'url' => 'http://chiken-01.sakura.ne.jp/',
        'skills' => 'HTML5, CSS/Sass, JS/jQuery, PHP/Wordpress',
        'roles' => 'ディレクション, コーディング',
        'description' => '建築業を営むクライアント様のコーポレートサイトリニューアル。<br>
            Wordpressにて、「お知らせ・ブログ」と「物件情報」の複数のカスタム投稿タイプを実装。<br>
            物件情報一覧ページにて、条件ソート・検索機能を実装。',
    ],
    2 => [
        'title' => '株式会社O様 コーポレートサイト',
        'date' => '2020.03',
        'url' => 'https://ober-coat.co.jp/',
        'skills' => 'HTML5, CSS/Sass, JS/jQuery, PHP/Wordpress',
        'roles' => 'ディレクション, コーディング, デザイン(下層ページ)',
        'description' => 'コーティング専門会社のコーポレートサイトリニューアル。<br>
            15ページ程度のコーディング・実装作業を4日間で行う。<br>
            下層ページのデザインが未定であったため、テイストに合うようにデザイン・実装を行った。',
    ],
    3 => [
        'title' => '株式会社M様 コーポレートサイト(デザイン)',
        'date' => '2020.02',
        //'url' => '',
        'skills' => 'Photoshop',
        'roles' => 'デザイン',
        'description' => '塗装制作会社のコーポレートサイトのデザインを担当。<br>
        発色の良い塗装技術が売りであったため、コントラストの高い色を採用。',
    ],
    4 => [
        'title' => '株式会社R様 コーポレートサイト',
        'date' => '2017.09',
        'url' => 'http://www.js-family.com/',
        'skills' => 'HTML5, CSS/Sass, JS/jQuery, PHP/Wordpress',
        'roles' => 'ディレクション, デザイン, コーディング',
        'description' => '',
    ],
    5 => [
        'title' => '株式会社J様 コーポレートサイト',
        'date' => '2017.06',
        'url' => './jonoya',
        'skills' => 'HTML5, CSS/Sass, JS/jQuery, PHP',
        'roles' => 'ディレクション, デザイン, コーディング',
        'description' => '',
    ],
    6 => [
        'title' => '株式会社M様 コーポレートサイト',
        'date' => '2017.04',
        'url' => 'http://migeru-shop.com/',
        'skills' => 'HTML5, CSS/Sass, JS/jQuery, PHP',
        'roles' => 'ディレクション, デザイン, コーディング',
        'description' => '',
    ],
    7 => [
        'title' => 'スタッフ管理システム',
        'date' => '2020.09',
        //'url' => '',
        'skills' => 'HTML5, CSS/Sass, JS/jQuery, PHP',
        'roles' => 'ディレクション, デザイン, コーディング',
        'description' => '',
    ],
];

function h($content) {
    return htmlspecialchars($content, ENT_QUOTES, 'UTF-8');
}
