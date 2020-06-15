<?php get_header();?>
<main class="main l-works-sgl">
<?php 
$url = get_field('url');
$img_url = get_field('img_url');
$img_alt = get_field('img_alt');
$position = get_field('position');
$period = get_field('period');
$position = get_field('position');
$txt_area = get_field('txt_area');
?>
  <div class="p-works-sgl-top">
    <div class="p-works-sgl-main-img">
      <div class="p-works-sgl-main-img--maw l-container-lg">
        <img class="object_fit_img" src="<?php echo $img_url ?>" alt="<?php echo $img_alt ?>">
      </div>
    </div>
    <dl class="p-works-sgl-info l-container-lg">
    <dt class="p-works-sgl-info__ttl">URL</dt>
      <dd class="p-works-sgl-info__txt"><a href="<?php echo $url ?>" class="works-sgl-info__txt--link"><?php echo $url ?></a></dd>
      <dt class="p-works-sgl-info__ttl">制作担当</dt>
      <dd class="p-works-sgl-info__txt"><?php echo $position ?></dd>
      <dt class="p-works-sgl-info__ttl">制作期間</dt>
      <dd class="p-works-sgl-info__txt"><?php echo $period; ?></dd>
      <dt class="p-works-sgl-info__ttl">使用ツール</dt>
      <dd class="p-works-sgl-info__txt"><?php the_field('tools');?>
      </dd>
      <dt class="p-works-sgl-info__ttl">使用言語</dt>
      <dd class="p-works-sgl-info__txt"><?php the_field('use_lang'); ?></dd>
    </dl>
  </div>
  <div class="p-works-sgl-btm">
    <div class="p-works-sgl-comment l-container-lg">
      <div class="c-sec-editor">
        <?php echo $txt_area ?></div>
    </div>
  </div>
</main>
<div class="l-works-page-btm p-works-page-btm">
  <div class="l-container-lg p-works-page-btm--flex">
    <div class="p-works-page-btm__prev">
    <?php if (get_previous_post()):?>
      <?php previous_post_link('%link', '前の制作実績へ'); ?>
    <?php endif; ?>
  </div>
  <div class=" p-works-page-btm__next">
    <?php if (get_next_post()):?>
      <?php next_post_link('%link','次の制作実績へ'); ?>
    <?php endif; ?>
  </div>
  </div><!-- /.l-container-lg -->
</div><!-- /.p-works-page-btm -->
<?php get_footer(); ?>