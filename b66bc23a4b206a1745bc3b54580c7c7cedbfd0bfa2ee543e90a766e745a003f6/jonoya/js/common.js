var start = +new Date();
function gettime(label) {
    var s = label + ': ' + (+new Date() - start) + ' ms';
    console.log(s);
}
$(function(){
    // gettime
    gettime('ready');
    $(window).on('load', function() {
        gettime('load');
    });

    //================================================================================
    // ページ内リンククリックでスムーススクロール
    var speed = 400;    // スクロールの速度（㍉秒）

    $('a[href^="#"]').on('click', function(){
        var href= $(this).attr("href");
        var $target = $(href == "#" || href == "" ? 'html' : href);
        var position = $target.offset().top;
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
    });

    // SP用メニューの開閉
    var $sp_nav_btn = $("#sp-menu-btn");    // SPメニューボタン
    var $sp_nav     = $("#sp-menu");        // SPメニューの開く部分
    var spdMenu     = 300;                  // メニューを開くアニメーションの時間（㍉秒）

    $sp_nav_btn.on('click', function(){
        $sp_nav.slideToggle(spdMenu);
        $sp_nav_btn.toggleClass("open"); // .open のon/off切り替え
    });

    /* ウィンドウ幅変更時のイベントリスナ登録/解除
    *  SP表示になった場合、SPメニューの範囲外をクリックした時メニューを閉じるイベントリスナを登録
    *  PC表示になった場合、SPメニューを閉じ、上記のイベントリスナを解除
    *  リサイズしても表示が変わらない場合は、処理を行わない
    *  ウィンドウ幅の変更中はresizeイベントが連続で発生するため、最後のresizeイベントから一定時間後にリサイズ時の動作を行う
    */
    var pcMinWidth  = 768;                  // PC表示の最小幅（px）
    var timerWait   = 100;                  // リサイズ完了から処理までの待ち時間（㍉秒）
    var timer1;                             // リサイズ時のタイマーID
    var mode;                               // 表示モード（sp/pc）
    var modeLast;                           // 前回の表示モード（sp/pc）
    var width;                              // 現在の画面幅
    var widthLast;                          // 前回の画面幅

    /* スクロール量に応じて、グローバルナビを画面上部に固定
    *  PC表示では、指定量以上のスクロール時、上部固定用のclassを付加し、その下の要素にグローバルナビ分の上marginを設定
    *  SP表示では、上記のclassを解除し、上marginを元に戻す
    *  はじめてPC表示になった時にのみグローバルナビの位置を取得（PC表示にて、グローバルナビより上にある要素は高さ固定とすること）
    */
    var $pc_nav     = $('#pc-menu');        // グローバルナビ
    var $main       = $('#content');        // グローバルナビの下にあるメイン領域
    //var fixedClass  = 'is-fixed';           // $pc_navを固定する場合のclass名
    var fixed       = false;                // $pc_navを固定中かどうかのフラグ
    var navHeight;                          // PCナビの高さ
    var scroll;                             // スクロール量
    var navPos;                             // PCナビのページトップからの距離

    // load時に実行
    $(window).on('load', function() {
        // 画面幅を取得
        mode = modeLast = getMode();

        // ウィンドウ幅に応じて、spメニューのイベントリスナを登録/解除
        if ( mode === 'sp' ) {
            addSpListener();
        } else if ( mode === 'pc' ) {
            removeSpListener();
        }

        // グローバルナビの固定
        if ( mode === 'pc' ) {
            getNavStatus(); // PCナビの位置を取得
            pcNavFixed(); // スクロール量に応じて、グローバルナビを画面上部に固定
        }

        // PCナビにて、現在のページに「active」クラスを付与
        //setActiveClass();
    });

    // resize完了後に実行
    $(window).on('resize', function() {
        if (timer1) {
            clearTimeout(timer1); // タイマーをリセット
        }
        timer1 = setTimeout(function() {
            // 前回と同じmodeの場合は処理しない
            mode = getMode();
            if ( mode === modeLast ) return;

            // ウィンドウ幅に応じて、spメニューのイベントリスナを登録/解除
            if ( mode === 'sp' ) {
                addSpListener();
            } else if ( mode === 'pc' ) {
                removeSpListener();
                // ページ読み込み後、初めてPC表示
                if ( navPos === undefined ) {
                    getNavStatus(); // PCナビの位置を取得
                    pcNavFixed(); // スクロール量に応じて、グローバルナビを画面上部に固定
                }
            }
            modeLast = mode;
            //console.log('resized mode='+mode);
        }, timerWait);
    });

    // scroll時に実行
    $(window).on('scroll', function() {
        if ( mode === 'pc' ) {
            pcNavFixed(); // スクロール量に応じて、グローバルナビを画面上部に固定
        }
    });

    // PCナビのページトップからの距離を取得
    // position:fixedの場合は結果が変わるので注意
    function getNavStatus() {
        navHeight = $pc_nav.outerHeight();// PCナビの高さ
        navPos = $pc_nav.offset().top; // PCナビのページ上からの距離
        //console.log('getNavStatus navPos='+navPos);
    };
    // 現在のウィンドウ幅からpc/sp表示を判定
    function getMode() {
        return $(window).innerWidth() < pcMinWidth ? 'sp' : 'pc';
    }
    // 画面幅がSP表示に切り替わった初回
    function addSpListener() {
        // メニュー以外の場所をクリック・タップ時にメニューを閉じるイベントリスナを登録
        $(document).on('click.sp touchstart.sp', function(evt) {
            if( !$(evt.target).closest($sp_nav_btn).length ){
                setTimeout(function(){
                    $sp_nav.slideUp(spdMenu);
                    $sp_nav_btn.removeClass("open");
                }, 100);
            }
        });
    }
    // 画面幅がPC表示に切り替わった初回
    function removeSpListener() {
        // SPメニューを閉じる
        $sp_nav.slideUp(spdMenu);
        $sp_nav_btn.removeClass("open");
        // SP表示時のイベントリスナを解除
        $(document).off('.sp');
    }

    // スクロール量に応じて、グローバルナビを画面上部に固定
    function pcNavFixed( scroll ) {
        scroll = $(this).scrollTop(); // スクロール量を取得

        if ( !fixed && (scroll > navPos) ) {
            // スクロール量が一定より大かつ、上部固定していなかった場合、$pc_navを固定
            //$pc_nav.addClass(fixedClass);
            $pc_nav.css('position', 'fixed'); // こちらのほうが軽量
            $main.css('margin-top', navHeight);
            fixed = true;
        } else if ( fixed && (scroll <= navPos) ) {
            // スクロール量が一定以下かつ、上部固定していた場合、PCナビの固定を解除
            //$pc_nav.removeClass(fixedClass);
            $pc_nav.css('position', 'static');
            $main.css('margin-top', '0');
            fixed = false;
        }
        //console.log('scrolled navPos='+navPos+', r='+(scroll>navPos)+'(h='+navHeight+')');
    }

    //================================================================================
    // SNSプラグインの遅延読み込み
/*    var snsLoadDelay = 1500;

    $(window).on('load', function() {
        setTimeout(function(){
            gettime('sns-plugin load');

            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.async=true;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');

            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id; js.async = true;
              js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8&appId=1872989389648636";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

        }, snsLoadDelay);
    });
*/
    //================================================================================
    // UserAgent判別により、PCではtelリンクを無効化
    var ua = navigator.userAgent.toLowerCase();
    var isMobile = /iphone/.test(ua)||/android(.+)?mobile/.test(ua);

    if (!isMobile) {
        $('a[href^="tel:"]').on('click', function(e) {
            e.preventDefault();
        });
    }

});
