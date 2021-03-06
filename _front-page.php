<!DOCTYPE html>
<html lang="ja">
<head>

<!-- Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->

<!-- End Google Tag Manager -->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">


<!--トップページ-->
<title>Keiko Kobayashiお客様の価値をあげるWebデザイナー</title>
<meta name="description" content="小林桂子のポートフォリオサイトです">


<meta property="og:locale" content="ja_JP" />
<meta property="og:title" content="トップページ" />
<meta property="og:type" content="article" />
<meta property="og:url" content="" />
<meta property="og:image" content="" />
<meta property="og:site_name"  content="" />
<meta property="og:description" content="" />
<link rel="stylesheet" href="//unpkg.com/swiper/css/swiper.min.css">
<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.3/css/all.css">
<link href="//fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Damion&display=swap" rel="stylesheet">
<link href="//fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<?php wp_head(); ?>
</head>

<body>
<header class="l-header">
<h1 class="l-header-logo"><a href="/">
<img src="img/common/header_logo.svg" alt="Keiko Kobayashi"></a></h1>
<nav class="l-header-nav --sp-none">
 <ul class="l-header-nav-menu l-flex-box">
  <li class="l-header-nav-menu__item"><a href="<?php echo home_url(); ?>/">Top</a></li>  
  <li class="l-header-nav-menu__item"><a href="<?php echo home_url(); ?>/about/">About</a></li>
  <li class="l-header-nav-menu__item"><a href="<?php echo home_url(); ?>/works/">Works</a></li>
  <li class="l-header-nav-menu__item l-header-nav__item--contact"><a href="<?php echo home_url(); ?>/contact"><i class="fas fa-envelope"></i></a></li>
  <li class="l-header-nav-menu__item l-header-nav__item--sns"><a href="//www.instagram.com/key_webdesigner/"><i class="fab fa-instagram"></i></a></li>
 </ul>
</nav>
</header>

<main class="main">
<!-- slider -->
 <div class="p-home-visual">
   <div class="p-home-visual-txt l-container-lg">
     <h2 class="p-home-name">Keiko<br>Kobayashi<span class="p-home-name--small">web designer</span></h2>
   </div>
   <div class="swiper-container-main">
    <div class="p-home-visual__list swiper-wrapper">
      <div class="swiper-slide"><img src="http://placekitten.com/1200/800"></div>
      <div class="swiper-slide"><img src="http://placekitten.com/800/1200"></div>
      <div class="swiper-slide"><img src="http://placekitten.com/1600/800"></div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div><!-- /.swiper-container -->
  <div class="p-home-scroll_area">
   <div class="p-home-scroll-btn">Scroll</div>
  </div>
 </div>

<div class="l-home-catch">
  <div class="p-home-catch-bg">
    <div class="p-home-catch l-container-lg">
     <p class="p-home-copy__txt01">Web Design</p>
     <p class="p-home-copy__txt02">Webサイトはギフトと同じ。<br>ターゲットや目的に合わせた制作を行い、<br>お客様の価値をあげるお手伝いをします。</p>
    </div>
  </div>
</div>

 <div class="l-home-about">
  <div class="p-home-about l-container-lg">
    <h2 class="p-home-heading --pc-none"><span class="c-heading--en">About</span><span class="c-heading--ja">私について</span></h2>
   <div class="p-home-about__img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/home/home_img01.jpg" alt="本人の写真。趣味のカメラ撮影を楽しんでいる姿">
   </div>
   <div class="p-home-about__txt p-home-about-txt">
     <h2 class="p-home-heading --sp-none"><span class="c-heading--en">About</span><span class="c-heading--ja">私について</span></h2>
    <p class="p-home-about-txt__txt">百貨店正社員から、Webデザイナーへ転職。<br>
     お客様やチームメンバーへの共感と関わるを応援することを<br>
     大切に制作を行っています。
    </p>
    <div class="c-link-btn">
      <a href="<?php echo home_url(); ?>/about/"><span class="c-link-btn__txt">More</span><span class="c-link-btn__arrow"></span></a>
     </div>
   </div>
  </div>

</div>

<div class="l-home-works">
  <section class="p-home-works">
    <div class="p-home-works--ttlbg">
      <h2 class="p-home-heading l-container-lg"><span class="c-heading--en">Works</span><span class="c-heading--ja">サイトの目的を考え、<br>丁寧に制作。</span></h2>
    </div>
   <div class="p-home-works__txt l-container-lg">
    <div class="p-home-works-swiper-slider">

      
     <div class="swiper-container p-home-works-swiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="swiper-slide__wrap">
            <div class="swiper-slide__img swiper-slide-img">
              <a href="#" class="swiper-slide-img__link"><img src="http://placekitten.com/600/1200"></a>
            </div>
            <div class="swiper-slide-box"><span class="swiper-slide-box__cat">コーディング</span><span class="swiper-slide-box__ttl">タイトルタイトルタイトルタイトルタイトルタイトル</span><span class="swiper-slide-box__txt js-text-overflow">comment box 3</span></div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-slide__wrap">
            <div class="swiper-slide__img swiper-slide-img">
              <a href="#" class="swiper-slide-img__link"><img src="http://placekitten.com/1200/1200"></a>
            </div>
            <div class="swiper-slide-box"><span class="swiper-slilde-box__cat">デザイン</span><span class="swiper-slide-box__ttl js-text-overflow">タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</span><span class="swiper-slide-box__txt js-text-overflow">コメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメントコメント</span></div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-slide__wrap">
            <div class="swiper-slide__img swiper-slide-img">
              <a href="#" class="swiper-slide-img__link"><img src="http://placekitten.com/800/1200"></a>
            </div>
            <div class="swiper-slide-box"><span class="swiper-slide-box__cat">コーディング</span><span class="swiper-slide-box__ttl">たいとるタイトルタイトルタイトルタイトルタイトルタイトル</span><span class="swiper-slide-box__txt js-text-overflow">comment box 2</span></div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="swiper-slide__wrap">
            <div class="swiper-slide__img swiper-slide-img">
              <a href="#" class="swiper-slide-img__link"><img src="http://placekitten.com/1500/1200"></a>
            </div>
            <div class="swiper-slide-box"><span class="swiper-slide-box__cat">コーディング</span><span class="swiper-slide-box__ttl">タイトルタイトルタイトルタイトルタイトルタイトル</span><span class="swiper-slide-box__txt js-text-overflow">comment box 3</span></div>
          </div>
        </div>



      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div><!-- /.swiper-container -->
    </div><!-- /.p-home-works-swiper-slider -->
   </div><!-- /.p-home-works__txt -->
   <div class="c-link-btn">
    <a href="<?php echo home_url(); ?>/works/"><span class="c-link-btn__txt">More</span><span class="c-link-btn__arrow"></span></a>
  </div>

  </section><!-- /.p-home-works.l-container-lg -->
</div>

<div class="l-home-methods">
  <div class="p-home-methods l-flex-box">
   <section class="p-home-methods__left">
    <div class="p-home-methods-ttl">
      <h2 class="p-home-heading"><span class="c-heading--en">Methods</span><span class="c-heading--ja">お手伝いできること</span></h2>
      <p class="p-home-methods-ttl__txt">これらの手段を用いて、<br>お客様の価値をあげるための制作を行います。</p>
    </div>
   </section>

   <div class="p-home-methods__right">
    <ul class="p-home-skill-list">
     <li class="p-home-skill-list__item p-home-skill-list__item01">
      <div class="p-home-skill__icon p-home-skill-icon">
        <div class="p-home-skill-icon__img"><img src="<?php echo get_template_directory_uri(); ?>/img/home/home_icon01.svg" alt="design">
        </div>
        <div class="p-home-skill-icon__txt">Cording</div>
      </div>
      <p class="p-home-skill__txt">SEOを意識し、基本に忠実なコーディングを行います。PC・スマホ両方のサイト制作が可能です。誰が見ても見てわかりやすいコードを記述することモットーにしています。
      </p>
     </li>
     <li class="p-home-skill-list__item p-home-skill-list__item02">
      <div class="p-home-skill__icon p-home-skill-icon">
        <div class="p-home-skill-icon__img"><img src="<?php echo get_template_directory_uri(); ?>/img/home/home_icon02.svg" alt="design">
        </div>
        <div class="p-home-skill-icon__txt">Design</div>
      </div>
      <p class="p-home-skill__txt">情報と目的を整理し、お客様の先のその先のお客様(エンドユーザー)のことを考えたデザインを行います。とことん具体的に考え対応します。
      </p>
     </li>
     <li class="p-home-skill-list__item p-home-skill-list__item03">
      <div class="p-home-skill__icon p-home-skill-icon">
        <div class="p-home-skill-icon__img"><img src="<?php echo get_template_directory_uri(); ?>/img/home/home_icon03.svg" alt="design">
        </div>
        <div class="p-home-skill-icon__txt">Photo</div>
      </div>
      <p class="p-home-skill__txt">前職、百貨店で学んだ商品のVP作成技術と写真撮影・レタッチ技術をもとに、商品の価値を上げる撮影を行います。
      </p>
     </li>
    </ul>
   </div><!-- /.p-home-methods__right -->
  </div><!-- /.p-home-methods.l-flex-box -->
</div>

<div class="l-home-insta">
  <section class="p-home-insta l-container-lg">
    <h2 class="p-home-heading"><span class="c-heading--en">Instagram</span><span class="c-heading--ja">勉強の積み上げ</span></h2>
    <div class="p-home-insta__post">
    <div id="insta-widget" class="iswg-base" data-username="key_webdesigner" data-display-image-count="4" data-wrapper-width data-show-icon=false data-show-biography=false data-show-follow-btn=false data-show-username=false></div>
    <script src="//insta-window-tool.web.app/v1/insta-window.js"></script>
      <div class="p-home-insta__name"><a href="//www.instagram.com/key_webdesigner/" class="p-home-insta__name--link">@key_webdesigner</a></div>
    </div>
  </section><!-- /.p-home-insta.l-container-lg -->
</div><!-- /.l-home-insta -->
</main>

<div class="l-home-contact">
  <div class="p-home-contact--bg">
    <section class="p-home-contact l-container-lg">
      <h2 class="p-home-heading"><span class="c-heading--en">Contact</span><span class="c-heading--ja">お問い合わせ</span></h2>
      <p class="p-home-contact__txt">「合いそうだな！」と感じていただけましたらお気軽にご連絡ください。<br>企業様、サイトを作りたいお客様とのいいご縁をお待ちしております。
      </p>
      <div class="c-link-btn">
        <a href="<?php echo home_url(); ?>/contact/"><span class="c-link-btn__txt">Contact</span><span class="c-link-btn__arrow"></span></a>
      </div>
    </section><!-- /.p-home-contact.l-container-lg -->
  </div> <!-- /.l-home-contact--bg -->
</div><!-- /.l-home-insta -->

<aside class="l-bottom-bnr">
  <div class="l-bottom-bnr-flex l-container-lg">
    <div class="l-bottom-bnr-grid__item l-bottom-bnr-item">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/common/blog_bnr.jpg" alt="ブログ・気ままに更新中">
      </a>
    </div><!-- /.l-bottom-bnr-grid__item.l-bottom-bnr-item01 -->
    <div class="l-bottom-bnr-grid__item l-bottom-bnr-item">
      <a href="//www.instagram.com/key_webdesigner/"><img src="<?php echo get_template_directory_uri(); ?>/img/common/insta_bnr.jpg" alt="Instagram　勉強の積み上げ">
      </a>
    </div><!-- /.l-bottom-bnr-grid__item.l-bottom-bnr-item02 -->
  </div><!-- ./l-bottom-bnr-grid -->
</aside><!-- /.l-bottom-banner -->

<footer class="l-footer">
 <div class="l-footer-copyriht">©️ 2020 keiko kobayashi</div>
</footer>
<a href="#" class="pagetop"><img src="img/common/pagetop.svg" alt="PAGE TOP"></a>


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
    autoplay: {
      delay:5000,
    },
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
        clickable: true,
        // renderBullet: function (index, className) {
        //   return '<span class="' + className + '">' + (index + 1) + '</span>';
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + "テキスト" + '</span>';
        },
      },
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
/*==================== 文字数制御 ====================*/
$(function(){
  $(window).on('scroll',function(){
    var scroll_top = $(window).scrollTop();
    $('.l-header').each(function(){
      // 要素のドキュメント上の位置を取得
      var offset_top = $(this).offset().top,
          top_margin = 800 ; // 画面上端からのマージン
      // スクロール量と要素の位置からマージンを引いた値を比較
      if( scroll_top > offset_top - top_margin ){
        // スクロール量が所定の位置を越えた時にfadeinクラスを付与
          $(this).addClass('show');       
      }else{
        // スクロール量が所定の位置を越えていない場合はfadeinクラスを外す
          $(this).removeClass('show');       
      }
    });
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
</body>    
</html>