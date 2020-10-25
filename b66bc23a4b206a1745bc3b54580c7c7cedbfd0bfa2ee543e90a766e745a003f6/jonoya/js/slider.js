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