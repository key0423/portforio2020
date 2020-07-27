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
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div><!-- /.swiper-container -->
  <!-- <div class="p-home-scroll_area">
   <div class="p-home-scroll-btn">Scroll</div>
  </div> -->
 </div>

<div class="l-home-catch">
  <div class="p-home-catch-bg">
    <div class="p-home-catch l-container-lg">
     <p class="p-home-copy__txt01">Web Design</p>
     <p class="p-home-copy__txt02">Webサイトで出会いをつなぐ。<br>ターゲットや目的に合わせた制作を行い、<br>お客様の価値をあげるお手伝いをします。</p>
    </div>
  </div>
</div>

 <div class="l-home-about">
  <div class="p-home-about l-container-lg js-fadein">
    <h2 class="p-home-heading --pc-none"><span class="c-heading--en">About</span><span class="c-heading--ja">私について</span></h2>
   <div class="p-home-about__img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/home/home_img01.jpg" alt="本人の写真。趣味のカメラ撮影を楽しんでいる姿">
   </div>
   <div class="p-home-about__txt p-home-about-txt">
     <h2 class="p-home-heading --sp-none"><span class="c-heading--en">About</span><span class="c-heading--ja">私について</span></h2>
    <p class="p-home-about-txt__txt">私大文系を卒業後、新卒で百貨店に就職。<br>24歳で職業訓練校に通いWebデザインを勉強、Webデザイナーへ転職しました。<br>お客様への共感と、チームメンバーとの連携を大切に制作を行っています。</p>
    <div class="c-link-btn">
      <a href="<?php echo home_url(); ?>/about/"><span class="c-link-btn__txt">More</span><span class="c-link-btn__arrow"></span></a>
     </div>
   </div>
  </div>
</div>

<div class="l-home-works js-fadein">
  <section class="p-home-works">
    <div class="p-home-works--ttlbg p-home-works-ttlbg">
      <div class="p-home-works-ttlbg__line js-slide-left"></div>
      <h2 class="p-home-heading l-container-lg"><span class="c-heading--en">Works</span><span class="c-heading--ja">サイトの目的を考え、<br>丁寧に制作。</span></h2>
    </div>
    <div class="l-container-lg">
    <ul class="p-works-arc-list">


<?php 
$args = array(
  'post_type' => 'works',
  'posts_per_page' => 5, // 表示件数の指定
);
$the_query = new WP_Query($args);

if($the_query -> have_posts()):
while($the_query->have_posts()):$the_query->the_post();

$id = get_the_id();
$link = get_permalink( $id );
$url = get_field('url',$id);
$img_samnail = get_field('img_samnail');
$img_arc_url = $img_samnail['sizes']['large'];
$img_url = get_field('img_url');
$img_size = $img_url['sizes']['large'];
$img_alt = get_field('img_alt', $id);
$txt_area = get_field('arc_txt', $id);

?>
    <li class="p-works-arc-list__item p-works-arc-list-item"> 
      <a href="<?php echo $link ?>" class="p-works-arc-list-item_link">
      <div class="p-works-arc-list-item__img">
        <img class="object_fit_img" src="<?php echo $img_arc_url; ?>" alt="<?php echo $img_alt; ?>">
      </div>
      <div class="p-works-arc-list-item__txt-area p-works-list-item-txt">
        <div class="p-works-list-item-txt-cat">
<?php
  if ($terms = get_the_terms($post->ID, 'part')) {
    foreach ( $terms as $term ) {
      echo ('<span class="p-works-list-item-txt-cat-icon">') ;
      echo esc_html($term->name);
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
      <h2 class="p-home-heading"><span class="c-heading--en">Skill</span><span class="c-heading--ja">お手伝いできること</span></h2>
      <p class="p-home-methods-ttl__txt">これらの手段を用いて、<br>お客様の価値をあげるための制作を行います。</p>
    </div>
   </section>

   <div class="p-home-methods__right">

   <?php get_template_part("template-parts/skill-list"); ?>

   </div><!-- /.p-home-methods__right -->
  </div><!-- /.p-home-methods.l-flex-box -->
</div>


</main>

<?php get_template_part("template-parts/contact_area"); ?>

<?php get_footer(); ?>