
<?php if(is_post_type_archive('works')){ ?>
<div class="p-works-arc-ttl-bg c-page-ttl--bg">
<div class="p-works-arc-ttl c-page-ttl">
<h1 class="p-works-arc-heading c-page--heading"><span class="c-page-heading--en">Works</span><span class="c-page-heading--ja">制作実績</span></h1>
</div>
</div>
<?php } ?>

<?php if(is_singular('works')){ ?>
<div class="l-page-ttl p-works-page-ttl l-container-lg">
<h1 class="l-page-heading p-works-page-ttl__txt"><?php the_title(); ?></h1>
<div class="p-works-ttl__cat"></div>
</div>
<?php } ?>


<?php if(is_page(array('contact','contact-thanks'))){ ?>
<div class="p-contact-ttl--bg c-page-ttl--bg">
  <div class="c-page-ttl">
    <h1 class="c-page--heading"><span class="c-page-heading--en">Contact</span><span class="c-page-heading--ja">お問い合わせ</span></h1>
  </div>
</div><!-- /.p-contact-catch-bg -->
<?php } ?>

<?php if(is_404()): ?>
<!--404-->
<title>ページが見つかりません</title>
<meta name="description" content="お探しのページは一時的にアクセスできない状況にあるかURLが移動もしくは削除された可能性があります。">
<?php endif; ?>