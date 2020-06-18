
<?php if(is_post_type_archive('works')){ ?>
<div class="p-works-arc-ttl-bg">
<div class="p-works-arc-ttl">
<h1 class="p-works-arc-heading"><span class="c-page-heading--en">Works</span><span class="c-page-heading--ja">制作実績</span></h1>
</div>
</div>
<?php } ?>

<?php if(is_singular('works')){ ?>
<div class="l-page-ttl p-works-page-ttl l-container-lg">
<h1 class="l-page-heading p-works-page-ttl__txt"><?php the_title(); ?></h1>
<div class="p-works-ttl__cat"></div>
</div>
<?php } ?>

<?php if(is_404()): ?>
<!--404-->
<title>ページが見つかりません</title>
<meta name="description" content="お探しのページは一時的にアクセスできない状況にあるかURLが移動もしくは削除された可能性があります。">
<?php endif; ?>