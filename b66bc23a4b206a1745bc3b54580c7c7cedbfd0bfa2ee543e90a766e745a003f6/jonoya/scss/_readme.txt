■■■■■■■■■■ compass ■■■■■■■■■■

■ コマンド
compass w -e production : 本番用、minify出力
compass w               : 開発用

■ config.rb
image-url($image, [$only-path], [$cache-buster])
config.rb で指定した画像フォルダパスを省略して、画像ファイルを指定できる
$image:        画像フォルダ以降のパス
$only-path:    url()無しでパスのみ書き出し（デフォルト：false）
$cache-buster: 画像が更新されたら自動で画像パスの後ろにクエリをつける（デフォルト：true）

image-width($image), image-height($image)
画像の幅（高さ）を返す。
$image:        画像フォルダ以降のパスを指定。

■■■■■■■■■■ Breakpoints ■■■■■■■■■■

xs: 320px  (320~479px)
sm: 480px  (480~767px)
md: 768px  (768~1023px)
lg: 1024px (1024~1199px)
xl: 1200px (1200px~)

■■■■■■■■■■ Mixins ■■■■■■■■■■

@include mq-up($bp) { @content }
@include mq-down($bp) { @content }
メディアクエリ

@include responsive-up($class) { @content }
@include responsive-down($class) { @content }
レスポンシブ対応のクラスを生成
例）responsive-down('.center') {text-align: center}
 -> .center-xs, .center-sm, .center-md, .center-lg, .center-xl を生成し、該当のBreakpoint未満でスタイルを摘要

@include fontsize($size: 24px);
フォントサイズ指定で rem と px を併記する関数

@include bg-rgba($r, $g, $b: false, $a: false);
rgba IE8でも透過が必要な場合

@include boxCenter();
ボックスの中央寄せ

@include boxMiddle();
ブロック要素を上下中央寄せ(IE9+)

@include linkColors($normal, $hover: false, $active: false, $visited: false, $focus: false);
link-colorsのレスポンシブ対応版（SPでは無効）

@include imgRetina($image, $extension, $width, $height);
Retina対応画像の切り替え

@include shadowEffect($alpha: 1, $shadowCol : #000);
影のエフェクト

@include hoverLine($color, $shadowCol:#000)
hoverで下線を表示

■■■■■■■■■■ Extends ■■■■■■■■■■

@extend %defaultLinkColors;
デフォルトのリンク色

@extend %defaultTextStyle;
デフォルトの文書スタイル（Pタグ等）
行高さ、文字間隔を設定

@extend %basefont;
デフォルトフォント

@extend %minchotitle;
可能な限り明朝体(Win7+)：タイトル等に

@extend %minchodesc;
できれば明朝体(Win8+)：本文等に

@extend %cover-bg;
カバー画像

■■■■■■■■■■ utilities ■■■■■■■■■■

.clearfix

.f-left, .f-right
左寄せ・右寄せ

.nowrap
この要素の途中で改行しない

.sp-nobr
md未満では改行タグを無効

.sp-center
md未満ではテキストを中央寄せ
