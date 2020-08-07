<meta property="og:locale" content="ja_JP" />
<meta property="og:title" content="トップページ" />
<meta property="og:type" content="article" />
<meta property="og:url" content="" />
<meta property="og:image" content="" />
<meta property="og:site_name"  content="" />
<meta property="og:description" content="" />

<?php if( is_front_page() && is_home() ): ?>
<!--トップページ-->
<title>Keiko Kobayshi Webサイトで出会いをつなぐ</title>
<meta name="description" content="ポートフォリオサイト。「Web制作を通していい商品やサービスとお客様をつなぐこと」がモットーです。日々勉強をし技術を向上させ、情報の発信にも力を入れます。">
<?php endif; ?>


<?php if( is_page('contact')): ?>
<title>お問い合わせ | Keiko Kobayshi Webサイトで出会いをつなぐ</title>
<meta name="description" content="お問い合わせフォーム。Keiko Kobayshiのポートフォリオサイト。「Web制作を通していい商品やサービスとお客様をつなぐこと」がモットーです。。日々勉強をし技術を向上させ、情報の発信にも力を入れます。">
<?php endif; ?>

<?php if( is_page('about')): ?>
<title>私について | Keiko Kobayshi Webサイトで出会いをつなぐ</title>
<meta name="description" content="私についての紹介ページです。Keiko Kobayshiのポートフォリオサイト。「Web制作を通していい商品やサービスとお客様をつなぐこと」がモットーです。日々勉強をし技術を向上させ、情報の発信にも力を入れます。">
<?php endif; ?>

<?php if (is_archive('works')): ?>
<title>制作実績 | Keiko Kobayshi Webサイトで出会いをつなぐ</title>
<meta name="description" content="制作実績一覧。Keiko Kobayshiのポートフォリオサイト。「Web制作を通していい商品やサービスとお客様をつなぐこと」がモットーです。日々勉強をし技術を向上させ、情報の発信にも力を入れます。">
<?php endif; ?>

<?php if (is_singular('works')): ?>
<title>制作実績 | Keiko Kobayshi Webサイトで出会いをつなぐ</title>
<meta name="description" content="制作実績詳細。Keiko Kobayshiのポートフォリオサイト。「Web制作を通していい商品やサービスとお客様をつなぐこと」がモットーです。日々勉強をし技術を向上させ、情報の発信にも力を入れます。">
<?php endif; ?>