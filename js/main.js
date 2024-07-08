$(window).on("load",function(){
    $('body').addClass('page_start');
    $('.page_description').addClass('.hidden');

    setTimeout(function() {
        $('body').removeClass('page_start');
    }, 2000);
});


$(function(){


    // ハンバーガー, fadeIn
    $(".hamburger").on("click", function (){
        $(".header").toggleClass("open");
    });
    $(".menu_list a").on("click", function(){
        $(".header").toggleClass("open");
    });
    $(".menu_back").on("click", function(){
        $(".header").toggleClass("open");
    });


// news
    $(window).scroll(function () {
        var classes = ["news", "news ul li"];

        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();

        for (var i = 0; i < classes.length; i++) {
            $("." + classes[i]).each(function () {
                var target = $(this).offset().top;
                if (scroll > target - windowHeight + 50) {
                    $(this).addClass("fadeUp");
                }
            });
        }
    });



    //   test
    $('a:not([href^="#"]):not([target])').on('click', function(e){
        e.preventDefault(); // ナビゲートをキャンセル
        url = $(this).attr('href'); // 遷移先のURLを取得
        if (url !== '') {
          $('.page_description').removeClass('.hidden');
          $('body').addClass('appear');  // bodyに class="fadeout"を挿入
          setTimeout(function(){
            window.location = url;  // 0.8秒後に取得したURLに遷移
          }, 1500);
        }
        return false;
      });

    //   slick slider
    $(function () {
        $(".main_slider").slick({
            autoplay: false, 
            slidesToScroll: 1,
            arrows: true, 
            prevArrow: '<div class="slide-arrow prev-arrow"></div>',
            nextArrow: '<div class="slide-arrow next-arrow"></div>',
            asNavFor: ".thumb_slider",
        });
    });
    
    $(function () {
        $(".thumb_slider").slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '<div class="thumb-arrow thumb-prev-arrow"></div>',
            nextArrow: '<div class="thumb-arrow thumb-next-arrow"></div>',
            asNavFor: ".main_slider",
            focusOnSelect: true,
        });
    });
})