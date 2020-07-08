<?php get_header();?>
<main class="main works-sgl">
<?php get_template_part("template-parts/breadcrumb"); ?>
<?php 
$url = get_field('url');

?>
  <div class="works-sgl-top">
    <dl class="works-sgl-info l-container-lg">
      <dt class="works-sgl-info__ttl">制作担当</dt>
      <dd class="works-sgl-info__txt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</dd>
      <dt class="works-sgl-info__ttl">制作期間</dt>
      <dd class="works-sgl-info__txt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</dd>
      <dt class="works-sgl-info__ttl">URL</dt>
      <dd class="works-sgl-info__txt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</dd>
      <dt class="works-sgl-info__ttl">使用言語</dt>
      <dd class="works-sgl-info__txt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</dd>
    </dl>
  </div>
  <div class="works-sgl-btm works-sgl-comment">
    <?php the_content(); ?>
  </div>
</main>
<?php get_footer(); ?>