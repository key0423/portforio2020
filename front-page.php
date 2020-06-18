<?php get_header();?>

<main class="main">
<!-- slider -->
 <div class="p-home-visual">
   <div class="p-home-visual-txt l-container-lg">
     <h2 class="p-home-name">Keiko<br>Kobayashi<span class="p-home-name--small">web designer</span></h2>
   </div>
   <div class="swiper-container-main">
    <div class="p-home-visual__list swiper-wrapper">
      <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/home/home_slider.jpg" alt="Keiko Kobayashi"></div>
      <!-- <div class="swiper-slide"><img src="http://placekitten.com/1200/800"></div>
      <div class="swiper-slide"><img src="http://placekitten.com/800/1200"></div>
      <div class="swiper-slide"><img src="http://placekitten.com/1600/800"></div> -->
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

    <div class="l-container-lg">
    <ul class="p-works-arc-list">


<?php 
$args = array(
  'post_type' => 'works',
  'posts_per_page' => 4, // 表示件数の指定
);
$the_query = new WP_Query($args);

if($the_query -> have_posts()):
while($the_query->have_posts()):$the_query->the_post();

$id = get_the_id();
$link = get_permalink( $id );
$url = get_field('url',$id);
$img_url = get_field('img_url');
$img_size = $img_url['sizes']['large'];
$img_alt = get_field('img_alt', $id);
$txt_area = get_field('arc_txt', $id);
?>
    <li class="p-works-arc-list__item p-works-arc-list-item"> 
      <a href="<?php echo $link ?>" class="p-works-arc-list-item_link">
      <div class="p-works-arc-list-item__img">
        <img class="object_fit_img" src="<?php echo $img_size ?>" alt="<?php echo $img_alt ?>">
      </div>
      <div class="p-works-arc-list-item__txt-area p-works-list-item-txt">
        <div class="p-works-list-item-txt-cat">
<?php
  if ($terms = get_the_terms($post->ID, 'part')) {
    foreach ( $terms as $term ) {
      echo ('<span>') ;
      echo esc_html($term->name)  ;
      echo ('</span>') ;
    }
  }
?>
        </div>
        <h2 class="p-works-list-item-txt__ttl js-text-overflow"><?php the_title(); ?></h2>
        <p class="p-works-list-item-txt__txt"><?php echo $txt_area ?></p>
      </div>
      </a>
    </li>
<?php  endwhile; ?>
<?php  endif; ?>

    </ul>



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

<?php get_template_part("template-parts/contact_area"); ?>

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

<?php get_footer(); ?>