<?php get_header();?>
<main class="main contact-thanks">
<div class="l-container-lg">
  <section class="p-contact-form l-contact-form">
    <div class="p-contact-form__top p-contact-form-ex">
      <p class="p-contact-form-ex__txt">サイトをご覧いただきありがとうございます。<br>お問い合わせの際は下記のフォームへのご入力をお願いいたします。<br>3日以内に返信をさせていただきます。</p>
      <ul class="p-contact-form-ex-list">
        <li class="p-contact-form-ex-list__item">※3日以上返信がない場合は、お手数おかけし申し訳ございませんが、<br class="--pc-none">再度ご連絡をお願いいたします。</li>
      </ul>
    </div><!-- /.p-contact-form-txt -->
    <div class="p-contact-form__bottom p-contact-form-blc">
      <!-- contactform7 -->
      <?php echo do_shortcode( '[contact-form-7 id="52" title="お問い合わせ"]' ); ?>
    </div><!-- /.p-contact-form-blc -->
  </section><!-- /.p-contact-form -->
</div>
</main>

<?php get_template_part("template-parts/bottom_bnr"); ?>

<?php get_footer(); ?>