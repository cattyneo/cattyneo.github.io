<?php
    require_once '_common.php';

    $title = 'セミナー懇親会・企業様向け宴会';
    $description = '「じょうのや・じぇいず」のセミナー懇親会・企業様向け宴会プランです。本町・堺筋本町・北浜駅から徒歩5分圏内。立食形式OK、マイク・プロジェクターの無料利用可！';


    get_header();
?>
       
        <!-- cover -->
        <div class="cover">
            <div class="container full-md">
                <h1 class="cover-title title-lg"><small>企業様向け</small>セミナー懇親会</h1>
                <div class="cover-img">
                    <img src="img/cover/cover-seminar.jpg" alt="ゆったりとした雰囲気の企業様向け宴会">
                </div>
            </div>
        </div>


        <div class="part">
            <div class="container">

                <!-- title -->
                <h2 class="title title-lg-dk">当店のこだわり</h2>


                <!-- sect-1 -->
                <div class="sect">
                    <h3 class="title title-md">選べる2タイプ…完全個室とフロア貸切</h3>
                    <p>人数にあわせて、個室とメインフロア貸切をお選びいただけます。</p>

                    <div class="clearfix">
                        <!-- left-md -->
                        <div class="left-md box-2">
                            <img class="img-radius" src="img/pict/room-honten-lg.jpg" alt="落ち着いた雰囲気の個室">
                            <h3 class="title-sm title">くつろぎの<em>完全個室</em><br>6～30名様程度</h3>
                            <p>小～中規模の企業様はもちろん！！懇親会・セミナー打ち上げ・内定者懇親会・同期会・同窓会などにオススメな個室。<em class="marker">壁・扉ありの完全個室</em>となっており、周りの目を気にせずおくつろぎ頂けます。個室利用料は無料！お気軽にご予約ください。</p>
                        </div>

                        <!-- right-md -->
                        <div class="right-md box-2">
                            <img class="img-radius" src="img/pict/floor-honten-lg.jpg" alt="開放感あふれるフロア">
                            <h3 class="title-sm title">大満足の<em>ワンフロア貸切</em><br>35～90名様程度</h3>
                            <p>大人数の企業様のご宴会はもちろん！！セミナー打ち上げ・ご宴会・同期会・同窓会などにオススメの店貸切。<em class="marker">プロジェクターやマイクを無料レンタル</em>いたします。着席だけでなく、立食形式のパーティーも可能。しかも会場利用料は無料！細やかなご要望もぜひご相談ください！</p>
                        </div>
                    </div>
                </div><!-- /sect-1 -->


                <!-- sect-2 -->
                <div class="sect">
                    <h3 class="title title-md">豊富な無料レンタル機材</h3>
                    <p>フロア貸切の場合、下記機材を無料でレンタルいたします。<em class="marker">プロジェクターやマイク</em>のほか、ご宴会を盛り上げる各種アイテムをご用意！</p>

                    <div class="clearfix">
                        <img class="right-md sect-lr-img img-frame" src="img/pict/equipments.jpg" alt="マイクやプロジェクターなどの無料レンタル機材">

                        <ul class="left-md sect-lr-text list list-options">
                            <li><em class="marker">プロジェクター・スクリーン</em></li>
                            <li><em class="marker">マイク</em></li>
                            <li>ノートパソコン</li>
                            <li>ビンゴゲーム</li>
                            <li>インスタントカメラ</li>
                            <li>お祝いメッセージ付きデザートプレート</li>
                            <li>音響機器</li>
                        </ul>
                    </div>

                    <small>※無料レンタルオプションはフロア貸切の場合に限ります。</small>

                </div><!-- /sect-2 -->


                <!-- sect-3 -->
                <div class="sect">
                    <h3 class="title title-md">本町エリアのセミナー会場から徒歩5分圏内！</h3>
                    <p>本町、堺筋本町、北浜駅周辺の各セミナー会場から徒歩5分圏内！セミナー後の懇親会・打ち上げに便利な当店をぜひご利用ください。</p>

                    <div class="map-container">
                        <div id="gmap"></div>
                    </div>

                    <div class="clearfix">
                        <dl class="dl dl-semi left-md">
                            <dt><i class="fa fa-map-marker" aria-hidden="true"></i><a href="javascript:mapClick(0)">TKP大阪御堂筋カンファレンスセンター</a></dt>
                                <dd>大阪府大阪市中央区淡路町3-5-13</dd>
                            <dt><i class="fa fa-map-marker" aria-hidden="true"></i><a href="javascript:mapClick(1)">シキボウホール　展示会場</a></dt>
                                <dd>大阪府大阪市中央区備後町3-2-6</dd>
                            <dt><i class="fa fa-map-marker" aria-hidden="true"></i><a href="javascript:mapClick(2)">大阪産業　創造館</a></dt>
                                <dd>大阪市中央区本町1-4-5</dd>
                            <dt><i class="fa fa-map-marker" aria-hidden="true"></i><a href="javascript:mapClick(3)">産業メディカルセミナールーム</a></dt>
                                <dd>大阪府大阪市中央区本町1-5-6</dd>
                            <dt><i class="fa fa-map-marker" aria-hidden="true"></i><a href="javascript:mapClick(4)">アクセア貸会議室</a></dt>
                                <dd>大阪市中央区備後町3-6-2</dd>
                            <dt><i class="fa fa-map-marker" aria-hidden="true"></i><a href="javascript:mapClick(5)">イオンコンパスENDO堺筋会議室</a></dt>
                                <dd>大阪府大阪市中央区備後町1-7-3</dd>
                        </dl>
                        <dl class="dl dl-semi right-md">
                            <dt><i class="fa fa-map-marker" aria-hidden="true"></i><a href="javascript:mapClick(6)">NSE貸会議室　堺筋本町店</a></dt>
                                <dd>大阪府大阪市 中央区安土町2丁目2-15</dd>
                            <dt><i class="fa fa-map-marker" aria-hidden="true"></i><a href="javascript:mapClick(7)">AP大阪淀屋橋</a></dt>
                                <dd>大阪府大阪市中央区北浜3-2-25</dd>
                            <dt><i class="fa fa-map-marker" aria-hidden="true"></i><a href="javascript:mapClick(8)">AAホール本館</a></dt>
                                <dd>大阪府大阪市中央区中央区淡路町3-2-9</dd>
                            <dt><i class="fa fa-map-marker" aria-hidden="true"></i><a href="javascript:mapClick(9)">北浜ビジネス会館</a></dt>
                                <dd>大阪府大阪市中央区北浜2-1-17</dd>
                            <dt><i class="fa fa-map-marker" aria-hidden="true"></i><a href="javascript:mapClick(10)">つるやホール</a></dt>
                                <dd>大阪府大阪市中央区本町3-3-5</dd>
                            <dt><i class="fa fa-map-marker" aria-hidden="true"></i><a href="javascript:mapClick(11)">D-SPOT-ZERO/大阪セミナールーム</a></dt>
                                <dd>大阪府大阪市中央区備後町2丁目4-10</dd>
                        </dl>
                    </div>
                </div><!-- /sect-3 -->

                <!-- sect-course -->
                <div class="sect sect-course">
                    <!-- title-plan -->
                    <h2 class="title title-lg title-plan">懇親会・企業様向けプラン</h2>
                    <p class="detail">料理8品＋プレミアム飲み放題3時間</p>

                    <!-- flex-center -->
                    <div class="flex flex-center">

                        <!-- 本店 -->
                        <div class="plan-flex-3">
                            <div class="hover-zoom hover-shadow">
                                <a href="<?php echo URL_PARTY_HONTEN ?>" <?php attr_out() ?>>
                                    <span>「じょうのや 本店」の<br>詳細はこちら</span>
                                </a>
                                <img src="img/pict/floor-honten.jpg" alt="じょうのや 本店">
                            </div>
                            <h4 class="title title-sm title-shop"><small>JAPANESE DINING and WINE</small>じょうのや 本店</h4>
                            <!-- 人数、電話番号 -->
                            <p class="shopinfo">
                                <i class="fa fa-users" aria-hidden="true"></i>50名様より貸切可<br>16～28名様対応の完全個室もあり</p>
                            <p class="shopinfo">
                                <i class="fa fa-phone" aria-hidden="true"></i><?php echo TEL_HYP_HONTEN ?></p>
                            <!-- 予算、詳細はこちら -->
                            <div class="price">4,000<span>円/名～</span></div><!--
                            --><a class="link-button" href="<?php echo URL_PARTY_HONTEN ?>" <?php attr_out() ?>>> 詳細はこちら</a>
                        </div>

                        <!-- 北浜店 -->
                        <div class="plan-flex-3">
                            <div class="hover-zoom hover-shadow">
                                <a href="<?php echo URL_PARTY_KITAHAMA ?>" <?php attr_out() ?>>
                                    <span>「じょうのや 北浜店」の<br>詳細はこちら</span>
                                </a>
                                <img src="img/pict/floor-kitahama.jpg" alt="じょうのや 北浜店">
                            </div>
                            <h4 class="title title-sm title-shop"><small>JAPANESE DINING and WINE</small>じょうのや 北浜店</h4>
                            <!-- 人数、電話番号 -->
                            <p class="shopinfo">
                                <i class="fa fa-users" aria-hidden="true"></i>35名様より貸切可<br>12～20名様対応の完全個室もあり</p>
                            <p class="shopinfo">
                                <i class="fa fa-phone" aria-hidden="true"></i><?php echo TEL_HYP_KITAHAMA ?></p>
                            <!-- 予算、詳細はこちら -->
                            <div class="price">4,000<span>円/名～</span></div><!--
                            --><a class="link-button" href="<?php echo URL_PARTY_KITAHAMA ?>" <?php attr_out() ?>>> 詳細はこちら</a>
                        </div>

                        <!-- じぇいず -->
                        <div class="plan-flex-3">
                            <div class="hover-zoom hover-shadow">
                                <a href="<?php echo URL_PARTY_JS ?>" <?php attr_out() ?>>
                                    <span>「じぇいず」の<br>詳細はこちら</span>
                                </a>
                                <img src="img/pict/floor-js.jpg" alt="じぇいず">
                            </div>
                            <h4 class="title title-sm title-shop"><small>堺筋本町 路地裏ダイニング</small>じぇいず</h4>
                            <!-- 人数、電話番号 -->
                            <p class="shopinfo">
                                <i class="fa fa-users" aria-hidden="true"></i>50名様より貸切可<br>6～90名様対応の個室もあり</p>
                            <p class="shopinfo">
                                <i class="fa fa-phone" aria-hidden="true"></i><?php echo TEL_HYP_JS ?></p>
                            <!-- 予算、詳細はこちら -->
                            <div class="price">3,600<span>円/名～</span></div><!--
                            --><a class="link-button" href="<?php echo URL_PARTY_JS ?>" <?php attr_out() ?>>> 詳細はこちら</a>
                        </div>
                    </div>

                    <p><em class="marker">人数とお好みの雰囲気</em>で会場をお選びください。</p>
                    <p class="sp-nobr">ご予算やご希望にあわせたプランのご提案も可能です。<br>なんでもご相談ください！</p>

                </div><!-- /sect-course -->

            </div><!-- /container -->
        </div><!-- /part -->

<?php get_footer(); ?>
