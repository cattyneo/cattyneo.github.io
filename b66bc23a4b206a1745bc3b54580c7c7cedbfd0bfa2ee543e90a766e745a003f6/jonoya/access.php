<?php
    require_once '_common.php';

    $title = '店舗概要・アクセス';
    $description = '「じょうのや・じぇいず」の店舗概要とアクセス方法のご案内。住所、電話番号、営業時間、交通経路、地図、席数について。';

    get_header();
?>

    <!-- cover -->
    <div class="cover">
        <div class="container full-md">
            <h1 class="cover-title title-lg">店舗概要・アクセス</h1>
            <div class="cover-img">
                <img src="img/cover/cover-access.jpg" alt="じょうのや・じぇいずの店舗外観">
            </div>
        </div>
    </div>

    <!-- part-info 店舗概要 -->
    <div class="part part-info">
        <div class="container">

            <div class="flex flex-between">

                <!-- 本店 -->
                <div class="flex-3">
                    <div class="hover-zoom hover-shadow">
                        <a href="<?php echo URL_PARTY_HONTEN ?>" <?php attr_out() ?>>
                            <span>「じょうのや 本店」の<br>詳細はこちら</span>
                        </a>
                        <img src="img/pict/floor-honten.jpg" alt="じょうのや 本店の店内">
                    </div>
                    <h4 class="title title-sm title-shop"><small>JAPANESE DINING and WINE</small>じょうのや 本店</h4>
                    <a class="link-button" href="<?php echo URL_PARTY_HONTEN ?>" <?php attr_out() ?>>> 詳細はこちら</a>

                    <!-- list -->
                    <dl class="dl">
                        <dt><i class="fa fa-users" aria-hidden="true"></i>人数*</dt>
                            <dd>50名様より貸切可<br>16～28名様対応の完全個室もあり</dd>
                        <dt><i class="fa fa-phone" aria-hidden="true"></i>電話番号</dt>
                            <dd><?php echo TEL_HYP_HONTEN ?></dd>
                        <dt><i class="fa fa-map-marker" aria-hidden="true"></i>住所</dt>
                            <dd>〒541-0047 大阪府大阪市中央区淡路町3-4-13 東和ビルB1</dd>
                        <dt><i class="fa fa-train" aria-hidden="true"></i>アクセス</dt>
                            <dd>地下鉄御堂筋線 淀屋橋駅 11番出口 徒歩5分<br><!--
                            -->地下鉄御堂筋線 本町駅 1番出口 徒歩5分<br><!--
                            -->京阪本線 淀屋橋駅 徒歩7分</dd>
                        <dt><i class="fa fa-clock-o" aria-hidden="true"></i>営業時間</dt>
                            <dd>ランチ　10:30～14:00 (L.O.13:30)<br>
                            ディナー　17:00～23:00 (L.O.22:30)</dd>
                        <dt><i class="fa fa-calendar" aria-hidden="true"></i>定休日*</dt>
                            <dd>日・祝</dd>
                    </dl>
                </div><!-- /本店 -->

                <!-- 北浜店 -->
                <div class="flex-3">
                    <div class="hover-zoom hover-shadow">
                        <a href="<?php echo URL_PARTY_KITAHAMA ?>" <?php attr_out() ?>>
                            <span>「じょうのや 北浜店」の<br>詳細はこちら</span>
                        </a>
                        <img src="img/pict/floor-kitahama.jpg" alt="じょうのや 北浜店の店内">
                    </div>
                    <h4 class="title title-sm title-shop"><small>JAPANESE DINING and WINE</small>じょうのや 北浜店</h4>
                    <a class="link-button" href="<?php echo URL_PARTY_KITAHAMA ?>" <?php attr_out() ?>>> 詳細はこちら</a>

                    <!-- list -->
                    <dl class="dl">
                        <dt><i class="fa fa-users" aria-hidden="true"></i>人数*</dt>
                            <dd>35名様より貸切可<br>12～20名様対応の完全個室もあり</dd>
                        <dt><i class="fa fa-phone" aria-hidden="true"></i>電話番号</dt>
                            <dd><?php echo TEL_HYP_KITAHAMA ?></dd>
                        <dt><i class="fa fa-map-marker" aria-hidden="true"></i>住所</dt>
                            <dd>〒541-0041 大阪府大阪市中央区北浜3-2-18 センターホテル大阪B1</dd>
                        <dt><i class="fa fa-train" aria-hidden="true"></i>アクセス</dt>
                            <dd>地下鉄御堂筋線 淀屋橋駅 徒歩3分<br><!--
                            -->京阪本線 北浜駅 徒歩3分<br></dd>
                        <dt><i class="fa fa-clock-o" aria-hidden="true"></i>営業時間</dt>
                            <dd>ランチ　10:30～14:00 (L.O.13:30)<br>
                            ディナー　17:00～23:00 (L.O.22:30)</dd>
                        <dt><i class="fa fa-calendar" aria-hidden="true"></i>定休日*</dt>
                            <dd>日・祝</dd>
                    </dl>
                </div><!-- /北浜店 -->

                <!-- じぇいず -->
                <div class="flex-3">
                    <div class="hover-zoom hover-shadow">
                        <a href="<?php echo URL_PARTY_JS ?>" <?php attr_out() ?>>
                            <span>「じぇいず」の<br>詳細はこちら</span>
                        </a>
                        <img src="img/pict/floor-js.jpg" alt="じぇいずの店内">
                    </div>
                    <h4 class="title title-sm title-shop"><small>堺筋本町 路地裏ダイニング</small>じぇいず</h4>
                    <a class="link-button" href="<?php echo URL_PARTY_JS ?>" <?php attr_out() ?>>> 詳細はこちら</a>

                    <!-- list -->
                    <dl class="dl">
                        <dt><i class="fa fa-users" aria-hidden="true"></i>人数*</dt>
                            <dd>50名様より貸切可<br>6～90名様対応の個室もあり</dd>
                        <dt><i class="fa fa-phone" aria-hidden="true"></i>電話番号</dt>
                            <dd><?php echo TEL_HYP_JS ?></dd>
                        <dt><i class="fa fa-map-marker" aria-hidden="true"></i>住所</dt>
                            <dd>〒541-0052 大阪府大阪市中央区安土町2-2-15 堺筋本町駅前ビルB1</dd>
                        <dt><i class="fa fa-train" aria-hidden="true"></i>アクセス</dt>
                            <dd>地下鉄堺筋線 堺筋本町駅 徒歩1分<br><!--
                            -->地下鉄中央線 堺筋本町駅 徒歩1分<br><!--
                            -->地下鉄御堂筋線 本町駅 徒歩3分</dd>
                        <dt><i class="fa fa-clock-o" aria-hidden="true"></i>営業時間</dt>
                            <dd>ランチ　10:30～14:00 (L.O.13:30)<br>
                            ディナー　17:00～23:00 (L.O.22:30)</dd>
                        <dt><i class="fa fa-calendar" aria-hidden="true"></i>定休日*</dt>
                            <dd>日・祝</dd>
                    </dl>
                </div><!-- /じぇいず -->

            </div><!-- /flex -->

            <small class="sub">*定休日・人数について<br>ご宴会など、団体ご予約を頂ければ<span class="marker">日・祝も営業</span>いたします。<br>
            また、土・日・祝は<span class="marker">貸切人数に届かない場合でも貸切可能</span>です。一度ご相談ください！</small>

        </div>
    </div><!-- /part-info 店舗概要 -->

    <!-- Googleマップ -->
    <div class="map-container">
        <a id="map"></a><!-- spでのMapボタンタップ時の表示位置 -->

        <div id="gmap"></div>
    </div>

<?php get_footer(); ?>
