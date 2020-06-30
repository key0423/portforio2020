<script src="//code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- //スライダーswiper-js -->
<script src="//unpkg.com/swiper/js/swiper.min.js"></script>
<script>
  let mySwiper = new Swiper ('.swiper-container-main', {
    // オプションの設定
    // navigation: {
    // nextEl: '.swiper-button-next',
    // prevEl: '.swiper-button-prev',
    // },
    slidesPerView: 1,
    spaceBetween: 0,
    // autoplay: {
    //   delay:5000,
    // },
    loop: true,
    speed: 5000,
    centeredSlides : true,
    slideToClickedSlide: true,
  });
  </script>

<script>
  var swiper = new Swiper('.p-home-works-swiper', {
    pagination: {
		el: '.swiper-pagination',
		type: 'custom',
		renderCustom: function (swiper, current, total) {
			// if (swiper.isBeginning) {
				return '<span class="">' + "ほげ" + '</span>';
				//2枚目
				return '<span>' + "<?php the_title(); ?>" + '</span>';
				return '<span>' + "<?php the_title(); ?>" + '</span>';
				return '<span>' + "<?php the_title(); ?>" + '</span>';
			}
		}
	},

    // pagination: {
    //     el: '.swiper-pagination',
    //     clickable: true,
    //     renderBullet: function (index, className) {
    //       return '<span class="' + className + '">' + "<?php the_title(); ?>" + '</span>';
    //     },
    //   },
    slidesPerView: 1,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    loop: true, //ループさせる
    centeredSlides:true,
    effect: "fade", //フェードのエフェクト
     autoplay: {
     delay: 5000, //４秒後に次の画像へ
     disableOnInteraction: false, //ユーザー操作後に自動再生を再開する
     reverseDirection: false
     },
  });
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
<script src="ofi.min.js"></script>
<script>
  objectFitImages('img.object_fit_img');
</script>



<?php if ( is_page('contact')) : ?>
<script src="../js/jquery.autoKana.js" language="javascript" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(
        function() {               
            $.fn.autoKana('#user_name', '#user_name_kana', {
                katakana : true  //true：カタカナ、false：ひらがな（デフォルト）
        });
    });
</script>

<?php endif; ?>