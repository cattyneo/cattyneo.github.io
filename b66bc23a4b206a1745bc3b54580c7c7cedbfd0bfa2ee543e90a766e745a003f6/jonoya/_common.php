<?php
//------------------------------
// php設定

mb_internal_encoding("UTF-8");
ini_set( 'display_errors', 1 ); // エラーを出力する
error_reporting(-1); // すべてのエラーを出力する

//------------------------------
// 定数・変数定義

// デバッグモード
$DEBUG = true;

if ( !$DEBUG ) {
    error_reporting(0); // すべてのエラーを出力しない
}

// サイト基本情報
define('ABSPATH',  __DIR__);
define('SITE_URI', 'http://jonoya-js.com/'); // 末尾にスラッシュをつける
define('SITE_DOMAIN', 'jonoya-js.com');
define('SITE_NAME', 'じょうのや＆じぇいず');
define('SITE_TITLE', 'じょうのや＆じぇいず　大阪本町での貸切パーティーや懇親会に');
define('SITE_DESCRIPTION', '本町・淀屋橋・北浜・堺筋本町の貸切パーティー会場『じょうのや』『じぇいず』は、懇親会・打ち上げ・結婚式二次会・オフ会とあらゆるご宴会に対応。吟味されたお酒とシェフ特製の和創作料理をご堪能ください！');

// FB アプリID
define('FB_APP_ID', '1872989389648636');

// 問い合わせ通知先のメアド
define('MAIL_ADMIN', 'cattyneo+jonoya@gmail.com');

// 電話番号
define('TEL_NUM_HONTEN', '0662296009');     // 本店
define('TEL_HYP_HONTEN', '06-6229-6009');   // 本店 ハイフンあり
define('TEL_NUM_KITAHAMA', '0662086009');   // 北浜店
define('TEL_HYP_KITAHAMA', '06-6208-6009'); // 北浜店 ハイフンあり
define('TEL_NUM_JS', '0662636009');         // じぇいず
define('TEL_HYP_JS', '06-6263-6009');       // じぇいず ハイフンあり

// URL
define('URL_PARTY_HONTEN', 'https://r.gnavi.co.jp/k559100/');
define('URL_PARTY_KITAHAMA', 'https://r.gnavi.co.jp/k559101/');
define('URL_PARTY_JS', 'https://r.gnavi.co.jp/k559102/');

define('URL_WED_HONTEN', 'http://wedding.gnavi.co.jp/site/2/k872300/');
define('URL_WED_JS', 'http://wedding.gnavi.co.jp/site/2/ka9b500/');

//------------------------------
// 判定系

/**
* トップページならtrue, それ以外ならfalseを返す
* echo is_home();
*/
function is_home() {
    return (bool)(script_name() === 'index.php');
}
/**
* 該当のページかどうかを返す
* echo is_page('index');
*/
function is_page( $id ) {
    return (bool)(page_id() === $id);
}

//------------------------------
// 取得系

/**
* 現在のページのファイル名を返す
* echo script_name();
*/
function script_name() {
    return basename($_SERVER['SCRIPT_NAME']);
}
/**
* 現在のページのIDを返す（access.php -> access）
* echo page_id();
*/
function page_id() {
    $pathdata = pathinfo($_SERVER['SCRIPT_NAME']);
    return $pathdata["filename"];
}

//------------------------------
// 出力系

/**
* ヘッダーを出力
* get_header();
*/
function get_header() {
    require_once ABSPATH . '/_header.php';
}
/**
* フッターを出力
* get_footer();
*/
function get_footer() {
    require_once ABSPATH . '/_footer.php';
}
/**
* トップページへのリンクアドレスを取得
* local環境ではindex.phpを指定
* get_footer();
*/
function get_home_path() {
    if ( $_SERVER['HTTP_HOST'] === 'localhost' ) {
        echo 'index.php';
    } else {
        echo '/';
    }
}
/**
* サイトタイトルを出力
* get_site_title();
*/
function get_site_title() {
    echo SITE_TITLE;
}
/**
* サイト説明を出力
* get_site_desc();
*/
function get_site_desc() {
    echo SITE_DESCRIPTION;
}
/**
* ページタイトルを出力
* トップページの場合、サイトタイトルを出力
* トップページ以外の場合、$title で設定した個別タイトルの末尾にサイト名を付与／未設定の場合、サイトタイトルを出力
* get_page_title();
*/
function get_page_title() {
    global $title;
    if ( is_home() ) {
        echo SITE_TITLE;
    } else {
        if ( isset($title) ) {
            echo $title . ' | ' . SITE_NAME;
        } else {
            echo SITE_TITLE;
        }
    }
}
/**
* $description で設定した個別ページ説明を出力
* 未設定の場合、サイト説明を取得
* get_page_desc();
*/
function get_page_desc() {
    global $description;
    if ( isset($description) ) {
        echo $description;
    } else {
        echo SITE_DESCRIPTION;
    }
}
/**
* bodyタグにつけるclassを出力
* get_body_class(); -> ' class="classname"'
*/
function get_body_class() {
    $result = ' class="';
    if ( is_home() ) {
        $result .= 'is-home';
    } else {
        $result .= 'is-page';
    }
    if ( page_id() ) {
        $result .= ' page-' . page_id();
    }
    $result .= '"';
    echo $result;
}
/**
* canonical URIを取得
* get_canonical_uri();
*/
function get_canonical_uri() {
    if ( is_home() ) {
        echo SITE_URI;
    } else {
        echo SITE_URI . script_name();
    }
}
/**
* トップのロゴ画像のタグ名を出力（トップページのみH1タグ）
* get_logo_tag();
*/
function get_logo_tag() {
    if ( is_home() ) {
        echo 'h1';
    } else {
        echo 'div';
    }
}
/**
* pcナビゲーションで現在のページのみに'active'クラスをつける
* add_active_class(); -> ' class="active"'
*/
function add_active_class($filename) {
    if ( script_name() === $filename ) {
        echo ' class="active"';
    }
}

function attr_out() {
    echo 'rel="nofollow" target="_blank" onclick="ga(\'send\', \'event\', \'out\', \'click\', this.href)"';
}