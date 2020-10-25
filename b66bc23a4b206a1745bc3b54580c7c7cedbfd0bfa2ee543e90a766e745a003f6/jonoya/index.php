<?php
    require_once '_common.php';

    get_header();
?>

    <!-- part-intro 概要紹介 -->
    <div class="part part-intro">
        <div class="container">


            <!-- frame -->
            <img class="frame" src="img/frame.png" width="960" height="60" alt="">

            <!-- sect-1 -->
            <div class="sect clearfix">
                <h3 class="left-md sect-lr-text title-sm sp-nobr">「じょうのや＆じぇいず」は、プライベート感が自慢のパーティースペースです</h3>
                <img class="right-md sect-lr-img img-frame" src="img/pict/birthday.jpg" alt="パーティーで誕生日サプライズ">
                <p class="left-md sect-lr-text">本町・堺筋本町・淀屋橋駅から徒歩3分。ワインセラーのような落ち着いた雰囲気の店内は、結婚式二次会・懇親会・打ち上げ・オフ会など、<span class="marker">どんなシチュエーションにもぴったり</span>。打ち合わせから当日までの親身なサポートにより、パーティーのご成功は間違いなし！</p>
            </div>

            <!-- sect-2 -->
            <div class="sect clearfix">
                <h3 class="right-md sect-lr-text title-sm">旬の食材を使った和創作料理</h3>
                <img class="left-md sect-lr-img img-frame" src="img/pict/dishes.jpg" alt="ワインと相性抜群の料理">
                <p class="right-md sect-lr-text">四季折々の素材を堪能できる<span class="marker">「和」をベースにした、シェフ特製の創作料理</span>。幅広いご年代の方にご好評です。ご予算・ご要望に応じたメニューをお作りすることも可能！</p>
            </div>

            <!-- sect-3 -->
            <div class="sect clearfix">
                <h3 class="left-md sect-lr-text title-sm sp-nobr">酒屋直営の強みを活かした、<br>自慢の「プレミアム飲み放題」</h3>
                <img class="right-md sect-lr-img img-frame" src="img/pict/bottles.jpg" alt="ソムリエが厳選したワイン・日本酒・焼酎">
                <p class="left-md sect-lr-text">久保田千寿・八海山・伊佐美・なかむら・赤兎馬・中々・竹鶴など、通を唸らせるお酒が飲み放題！ワイン・日本酒・焼酎など、<span class="marker">ソムリエが厳選する約50種のドリンクメニュー</span>を取り揃えております。</p>
            </div>

            <!-- sect-4 -->
            <div class="sect clearfix">
                <h3 class="right-md sect-lr-text title-sm">充実の機材で、パーティーの盛り上がり間違いなし！</h3>
                <img class="left-md sect-lr-img img-frame" src="img/pict/equipments.jpg" alt="マイクやプロジェクターなどの無料レンタル機材">
                <p class="right-md sect-lr-text">マイクはもちろん、プロジェクターや音響設備などの充実した機材をご用意しています。貸切の場合は<span class="marker">下記機材のレンタルが無料</span>！</p>
                <p class="right-md sect-lr-text">●プロジェクター　●マイク　●CD・DVDプレイヤー　●照明　●有線（BGM）　●ビンゴゲーム　●ウェルカムボード　など</p>
            </div>

            <!-- frame -->
            <img class="frame" src="img/frame.png" width="960" height="60" alt="">

            <!-- about 結婚式二次会/宴会・パーティー -->
            <div class="about flex flex-between">
                <div class="flex-3 hover-zoom hover-shadow">
                    <img src="img/banner/wedding.jpg" alt="結婚式の装飾がされた店内">
                    <a href="wedding.php">
                        <span>結婚式二次会</span>
                        <small>について</small>
                    </a>
                </div>
                <div class="flex-3 hover-zoom hover-shadow">
                    <img src="img/banner/seminar.jpg" alt="セミナー懇親会の装飾がされた店内">
                    <a href="seminar.php">
                        <span>セミナー懇親会</span>
                        <small>について</small>
                    </a>
                </div>
                <div class="flex-3 hover-zoom hover-shadow">
                    <img src="img/banner/party.jpg" alt="パーティー・宴会の装飾がされた店内">
                    <a href="party.php">
                        <span>パーティー・宴会</span>
                        <small>について</small>
                    </a>
                </div>
            </div>

        </div>
    </div><!-- /part-intro 概要紹介 -->


    <!-- part-shops 店舗紹介 -->
    <div class="part part-shops">
        <div class="container">

            <h2 class="title-lg-lt">店舗紹介</h2>

            <!-- flex-center -->
            <div class="flex flex-between">

                <!-- 本店 -->
                <div class="flex-3">
                    <div class="hover-zoom hover-shadow">
                        <img src="img/pict/floor-honten.jpg" alt="じょうのや 本店の店内">
                        <a href="<?php echo URL_PARTY_HONTEN ?>" <?php attr_out() ?>>
                            <span>「じょうのや 本店」の<br>詳細はこちら</span>
                        </a>
                    </div>
                    <h4 class="title title-sm title-shop"><small>JAPANESE DINING and WINE</small>じょうのや 本店</h4>
                    <p class="shopinfo">50名様より貸切可<br>16～28名様対応の完全個室もあり</p>
                    <a class="link-button-lt" href="<?php echo URL_PARTY_HONTEN ?>" <?php attr_out() ?>>> 詳細はこちら</a>
                </div>

                <!-- 北浜店 -->
                <div class="flex-3">
                    <div class="hover-zoom hover-shadow">
                        <img src="img/pict/floor-kitahama.jpg" alt="じょうのや 北浜店の店内">
                        <a href="<?php echo URL_PARTY_KITAHAMA ?>" <?php attr_out() ?>>
                            <span>「じょうのや 北浜店」の<br>詳細はこちら</span>
                        </a>
                    </div>
                    <h4 class="title title-sm title-shop"><small>JAPANESE DINING and WINE</small>じょうのや 北浜店</h4>
                    <p class="shopinfo">35名様より貸切可<br>12～20名様対応の完全個室もあり</p>
                    <a class="link-button-lt" href="<?php echo URL_PARTY_KITAHAMA ?>" <?php attr_out() ?>>> 詳細はこちら</a>
                </div>

                <!-- じぇいず -->
                <div class="flex-3">
                    <div class="hover-zoom hover-shadow">
                        <img src="img/pict/floor-js.jpg" alt="じぇいずの店内">
                        <a href="<?php echo URL_PARTY_JS ?>" <?php attr_out() ?>>
                            <span>「じぇいず」の<br>詳細はこちら</span>
                        </a>
                    </div>
                    <h4 class="title title-sm title-shop"><small>堺筋本町 路地裏ダイニング</small>じぇいず</h4>
                    <p class="shopinfo">50名様より貸切可<br>6～90名様対応の個室もあり</p>
                    <a class="link-button-lt" href="<?php echo URL_PARTY_JS ?>" <?php attr_out() ?>>> 詳細はこちら</a>
                </div>
            </div>

            <p>土・日・祝や、貸切人数に届かない場合でも貸切可能な場合があります。お気軽にご相談下さい。</p>
            <p>各店舗への交通経路は<a href="access.php">こちら</a></p>

        </div>
    </div><!-- /part-shops 店舗紹介 -->


    <!-- Googleマップ -->
    <div class="map-container">
        <div id="gmap"></div>
    </div>

<?php get_footer(); ?>
