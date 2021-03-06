<!-- //スライダーswiper-js -->
<!-- <script src="//unpkg.com/swiper/js/swiper.min.js"></script> -->
<script>
  // let mySwiper = new Swiper ('.swiper-container-main', {
    // オプションの設定
    // navigation: {
    // nextEl: '.swiper-button-next',
    // prevEl: '.swiper-button-prev',
    // },
    // slidesPerView: 1,
    // spaceBetween: 0,
    // autoplay: {
    //   delay:5000,
    // },
  //   loop: true,
  //   speed: 5000,
  //   centeredSlides : true,
  //   slideToClickedSlide: true,
  // });
  // 
  </script>


<script>
/*==================== 文字数制御 ====================*/
// ▼文字列を省略して「…」を付与
jQuery(function($) {
  $('.js-text-overflow').each(function() {
    var $target = $(this);
    // オリジナルの文章を取得する
    var html = $target.html();
    // 対象の要素を、高さにautoを指定し非表示で複製する
    var $clone = $target.clone();
    $clone
      .css({
        display: 'none',
        position : 'absolute',
        overflow : 'visible'
      })
      .width($target.width())
      .height('auto');
    // DOMを一旦追加
    $target.after($clone);
    // 指定した高さになるまで、1文字ずつ消去していく
    while((html.length > 0) && ($clone.height() > $target.height())) {
      html = html.substr(0, html.length - 1);
      $clone.html(html + '...');
    }
    // 文章を入れ替えて、複製した要素を削除する
    $target.html($clone.html());
    $clone.remove();
  });
});
</script>


<script>
/*==================== sticky header ====================*/
$(function(){
    $('.l-header').each(function(){
        var $window = $(window),
            $header = $(this),
            headerOffsetTop = $header.offset().top;

        $window.on('scroll',function(){
            if($window.scrollTop() > headerOffsetTop){
                $header.addClass('sticky');
            } else{
                $header.removeClass('sticky');
            }
        });

        $window.trigger('scroll');
    });

});
</script>
<script>
//PAGETOP
$(function() {
var flag = false;
var pagetop = $('.pagetop');
$(window).scroll(function () {
  if ($(this).scrollTop() > 700) {
    if (flag == false) {
      flag = true;
      pagetop.stop().animate({
        'bottom': '0'
      }, 200);
    }
  } else {
    if (flag) {
      flag = false;
      pagetop.stop().animate({
        'bottom': '-180px'
      }, 200);
    }
  }
});
pagetop.click(function () {
  $('body, html').stop().animate({
    scrollTop: 0
  }, 800, 'easeInQuint');
  return false;
});
});
</script>


<!-- =================== 画像フィット =======================-->
<script src="<?php //echo get_template_directory_uri(); ?>/js/ofi.min.js"></script>
<script>
  objectFitImages('img.object_fit_img');
</script>



<!-- =================== fadein 表示 =======================-->
<script>
$(function(){
    $(window).scroll(function (){
        $('.js-fadein').each(function(){
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > position - windowHeight + 300){
              $(this).addClass('fadein');
            }
        });
    });
});
</script>


<!-- ===================ハンバーガーメニュー====================-->
<script>
$(function(){
  $('.js-sp-hamburger').hide();
  $('#js-hamburger').click(function(){
    // トグル制御
    //headerにクラスをつけて親を制御
    $('.p-header').toggleClass('js-hamburger-open');
    if($(this).hasClass("js-hamburger-block")){
      $(this).removeClass("js-hamburger-block");
      $('.js-sp-hamburger').fadeOut().css('z-index', '-1');
    }else{
      $(this).addClass("js-hamburger-block");
      $('.js-sp-hamburger').fadeIn("5000").css('z-index', '5200');
    }
  });
});
</script>


<!-- =================== スクロールトップ =======================-->
<script>
  const pageTopBtn = $(".js-pagetop");
  pageTopBtn.hide();

  $(function(){
    $(window).on("scroll", function(){

      if ($(this).scrollTop() > 50) {
        pageTopBtn.fadeIn("50");
      } else { 
        pageTopBtn.fadeOut("50");
      }

      // フッターの高さを取得
      bodyHeight = $(document).height(); 
      scrollBottomPosition = $(window).height() + $(window).scrollTop(); // 現在のスクロール位置の画面下部の高さを取得
      footerHeight = $("footer").innerHeight(); // フッター要素の高さを取得
      
      // 残りの表示領域がフッターの高さより低ければ
      if (bodyHeight - scrollBottomPosition <= footerHeight) {
        pageTopBtn.css({
          "position":"absolute",
          "bottom": footerHeight + 20
        });
      } else {
        pageTopBtn.css({
          "position":"fixed",
          "bottom": "20px"
        });
      }
    });

    pageTopBtn.click(function(){
      //animate({スクロール位置}, 戻るスピード)
      $('body,html').animate({scrollTop: 0}, 400);
      return false;
    });
  });
</script>


<!-- =================== スクロールで表示 =======================-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
<script>
$(function(){
  $('.js-slide-left').css('width', '0');

  $('.js-slide-left').on('inview', function(){
    $(this).animate({
      width:'100%'
    },duration,'easeOutQuad'
    );
  });
  
});
</script>