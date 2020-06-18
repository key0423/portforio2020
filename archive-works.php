<?php get_header();?>
<main class="main works-ark">
  <div class="l-container-lg">
    <ul class="p-works-arc-list">
<?php if(have_posts()):?>
<?php while(have_posts()):the_post();?>
<?php 
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
    <?php the_posts_pagination(); ?> 
  </div>
</main>
<?php get_footer(); ?>