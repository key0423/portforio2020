<div class="p-home-works__txt l-container-lg">
    <div class="p-home-works-swiper-slider">
     <div class="swiper-container p-home-works-swiper">
      <div class="swiper-wrapper">

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
        <div class="swiper-slide">
          <div class="swiper-slide__wrap">
            <div class="swiper-slide__img swiper-slide-img">
              <a href="#" class="swiper-slide-img__link">
              <img class="object_fit_img" src="<?php echo $img_size ?>" alt="<?php echo $img_alt ?>"></a>
            </div>
            <p class="swiper-slide-box__ttl01"><?php the_title(); ?></p>
            <div class="swiper-slide-box">
            
<?php
  if ($terms = get_the_terms($post->ID, 'part')) {
    foreach ( $terms as $term ) {
      echo ('<span class="swiper-slide-box__cat">') ;
      echo esc_html($term->name)  ;
      echo ('</span>') ;
    }
  }
?>
            <!-- <span class="swiper-slide-box__cat">コーディング</span> -->      
            <span class="swiper-slide-box__ttl"><?php the_title(); ?></span><span class="swiper-slide-box__txt js-text-overflow"><?php echo $txt_area ?></span></div>
          </div>
        </div>

<?php  endwhile; ?>
<?php  endif; ?>
    
        <!-- <div class="swiper-slide">
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
        </div> -->

      </div>
      <div class="swiper-pagination">
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div><!-- /.swiper-container -->
    </div><!-- /.p-home-works-swiper-slider -->
   </div><!-- /.p-home-works__txt -->
