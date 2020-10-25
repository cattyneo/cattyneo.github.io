<?php
require_once('common.php');

$id = (integer)$_GET['id'];

if (!isset($works[$id])) {
    header('Location: ./index.php');
    exit;
}
/*
    'title' => '株式会社T様 コーポレートサイト',
    'date' => '2020.08',
    'url' => '',
    'skills' => [],
    'roles' => [],
    'description' => '',
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="widdt=device-widdt, initial-scale=1">
    <title>WORKS | Web Developer - Naohide Takahashi</title>
    <meta name="description" content="Web開発者 高橋直秀のポートフォリオサイトです。">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="header">
        <div class="container d-flex">
            <a href="index.html" class="header-btn-back"><i aria-label="戻る" class="fas fa-arrow-left"></i><div class="label font-alt">BACK</div></a>
            <a href="index.html#contact" id="header-btn-contact" class="header-btn"><i aria-label="お問い合わせ" class="far fa-envelope"></i></a>
        </div>
    </header>

    <section class="section">
        <div class="container">
            <h2 class="h2 h2-workdetail">
                <div><?= h($works[$id]['title']) ?></div>
                <div class="subtitle"><?= h($works[$id]['date']) ?></div>
            </h2>

            <div>
                <img class="works" src="./images/works_main_<?= h($id) ?>.png" alt="<?= h($works[$id]['title']) ?>">
            </div>

            <dl class="dl dl-sm">
<?php if (isset($works[$id]['url'])) : ?>
                <dt class="dt">URL</dt>
                <dd class="dd"><a class="link" href="<?= $works[$id]['url'] ?>" target="_blank"><?= $works[$id]['url'] ?></a></dd>
<?php endif; ?>

                <dt class="dt">使用技術</dt>
                <dd class="dd"><?= $works[$id]['skills'] ?></dd>

                <dt class="dt">担当箇所</dt>
                <dd class="dd"><?= $works[$id]['roles'] ?></dd>

                <dt class="dt">詳細</dt>
                <dd class="dd"><?= $works[$id]['description'] ?></dd>
            </dl>
        </div>
    </section>
    
    <footer class="footer">
        <div class="container">
            <div class="font-alt text-center">&copy; Naohide Takahashi, All Rights Reserved.</div>
        </div>
    </footer>
</body>
</html>