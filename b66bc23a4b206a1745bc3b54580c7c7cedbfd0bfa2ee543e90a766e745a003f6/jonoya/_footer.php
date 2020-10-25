    </main>
    <!--==================== /main ====================-->

    <!--==================== footer ====================-->
    <footer id="footer">

        <!-- footer-top -->
        <div class="footer-top">
            <div class="container">

                <!-- left -->
                <div class="footer-top-l left-md">
                    <!-- logo -->
                    <h3 class="footer-logo footer-item">
                        大阪本町の貸切パーティー・懇親会に<!--
                        --><img src="img/logo.png" alt="じょうのや／じぇいず">
                    </h3>

                    <!-- tel -->
                    <div class="icon-box tel-box-list footer-item">
                        <ul class="tel-list">
                            <li><span>本店</span><!--
                                --><img src="img/tel-honten.png" alt="<?php echo TEL_HYP_HONTEN; ?>"></li>
                            <li><span>北浜店</span><!--
                                --><img src="img/tel-kitahama.png" alt="<?php echo TEL_HYP_KITAHAMA; ?>"></li>
                            <li><span>じぇいず</span><!--
                                --><img src="img/tel-js.png" alt="<?php echo TEL_HYP_JS; ?>"></li>
                        </ul>
                        <div class="icon-circle">
                            <i class="fa fa-phone" aria-hidden="true"></i>受付時間 10:00-22:00</div>
                    </div>

                    <!-- sns-buttons -->
                    <div class="sns-buttons">
                        <p>気に入っていただけましたら、シェアをお願いします！</p>
                        <?php
                            // 共通、いずれもURLエンコード
                            $url = SITE_URI;
                            $text = "じょうのや＆じぇいず\n大阪本町の貸切パーティー会場";

                            // twitter
                            $related = 'jonoya_js';
                            $param_tw = 'text='.rawurlencode($text).'&url='.rawurlencode($url).'&related='.rawurlencode($related);

                            // facebook
                            $app_id = FB_APP_ID;
                            $param_fb = 't='.rawurlencode($text).'&u='.rawurlencode($url).'&app_id='.$app_id.'&display=popup';
                        
                            // line
                            $param_line = rawurlencode($text . "\n\n" . $url);
                        ?>

                        <!-- tweet -->
                        <a class="sns-button tw-button" href="//twitter.com/share?<?php echo $param_tw ?>" onclick="window.open(this.href,'twitter','width=600, height=500, personalbar=0, toolbar=0, scrollbars=1'); return false;" target="_blank" rel="nofollow"><i class="fa fa-twitter" aria-hidden="true"></i><span>ツイート</span></a>

                        <!-- fb-share -->
                        <a class="sns-button fb-button" href="//www.facebook.com/sharer/sharer.php?<?php echo $param_fb ?>" onclick="window.open(this.href,'facebook','width=558, height=700, personalbar=0, toolbar=0, scrollbars=1'); return false;" target="_blank" rel="nofollow"><i class="fa fa-facebook" aria-hidden="true"></i><span>シェア</span></a>

                        <!-- line -->
                        <a class="sp-only sns-button line-button" href="http://line.me/R/msg/text/?<?php echo $param_line ?>" rel="nofollow"><i class="icon"></i><span>LINEで送る</span></a>

                    </div><!-- /sns-buttons -->
                </div>

                <!-- partition -->
                <div class="partition left-md pc-only"></div>

                <!-- right -->
                <div class="footer-top-r right-md">
                    <h3 class="title-news">最新情報はこちら</h3>

                    <!-- page plugin -->
                    <div id="tw-container">
                        <a class="twitter-timeline"
                            href="https://twitter.com/jonoya_js"
                            data-height="340"
                            data-chrome="noheader nofooter">Tweets by jonoya_js</a>
                        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div><!-- /page plugin -->

                </div>

            </div>
        </div><!-- /footer-top -->

        <!-- footer-bottom -->
        <div class="footer-bottom">
            <div class="container">

                <!-- page-top -->
                <a id="page-top" class="fa fa-arrow-up" aria-hidden="true" href="#"></a>

                <ul class="footer-nav">
                    <li><a href="<?php get_home_path() ?>">トップページ</a></li>
                    <li><a href="first.php">はじめての方へ</a></li>
                    <li><a href="wedding.php">結婚式二次会</a></li>
                    <li><a href="party.php">宴会・パーティー</a></li>
                    <li><a href="seminar.php">セミナー懇親会</a></li>
                    <li><a href="access.php">アクセス</a></li>
                </ul>
                <span class="copyright">&copy; じょうのや／じぇいず</span>

            </div>
        </div><!-- /footer-bottom -->

    </footer>

    <!--==================== /footer ====================-->

    <!--[if lte IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/flexibility/1.0.6/flexibility.js"></script>
    <![endif]-->

    <!-- jquery -->
    <!--[if gte IE 9]><!-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!--[endif]-->
    <!--[if lte IE8]>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    < ![endif]-->

<?php if ( is_home() ) : ?>
    <!-- slider -->
    <script defer src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script>
        $(function(){
            $("#slides").slick({
                autoplay: true,
                autoplaySpeed: 5000,
                speed: 1000,
                fade: true,
                cssEase: 'linear',
                lazyLoad: 'ondemand',
                arrows: false,
                accessibility: false,// キーボード操作
                draggable: false,
                pauseOnHover: false,
                swipe: false,
                touchMove: false,
            });
        });
    </script>
<?php endif; ?>

    <script defer async src="js/common.js?170306-1"></script>

<?php if ( is_home() || is_page('access') ) : ?>
    <!-- google maps -->
    <script defer src="//maps.googleapis.com/maps/api/js"></script>
    <script defer src="js/maps.js?170306-1"></script>
<?php endif; if ( is_page('seminar') ) : ?>
    <!-- google maps -->
    <script defer src="//maps.googleapis.com/maps/api/js"></script>
    <script defer src="js/maps.js?170306-1"></script>
    <script defer src="js/maps-semi.js?170306-1"></script>
<?php endif; ?>
</body>
</html>
