<!DOCTYPE html>
<html lang="ja">
<head>

<!-- Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->

<!-- End Google Tag Manager -->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

<?php get_template_part("metatag"); ?>
<link rel="stylesheet" href="//unpkg.com/swiper/css/swiper.min.css">
<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.3/css/all.css">
<link href="//fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Damion&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400&display=swap" rel="stylesheet">
<link href="//fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<?php wp_head(); ?>
</head>

<body>
<header class="l-header">

<?php if ( is_home() || is_front_page() ) : ?>
<h1 class="l-header-logo"><a href="/">
<img src="<?php echo get_template_directory_uri(); ?>img/common/header_logo.svg" alt="Keiko Kobayashi"></a></h1>
<?php else : ?>
<p class="l-header-logo"><a href="/">
<img src="<?php echo get_template_directory_uri(); ?>img/common/header_logo.svg" alt="Keiko Kobayashi"></a></p>
<?php endif; ?>

<nav class="l-header-nav --sp-none">
 <ul class="l-header-nav-menu l-flex-box">
  <li class="l-header-nav-menu__item"><a href="<?php echo home_url(); ?>/">Top</a></li>  
  <li class="l-header-nav-menu__item"><a href="<?php echo home_url(); ?>/about/">About</a></li>
  <li class="l-header-nav-menu__item"><a href="<?php echo home_url(); ?>/works/">Works</a></li>
  <li class="l-header-nav-menu__item l-header-nav__item--contact"><a href="<?php echo home_url(); ?>/contact"><i class="fas fa-envelope"></i></a></li>
  <li class="l-header-nav-menu__item l-header-nav__item--sns"><a href="//www.instagram.com/key_webdesigner/"><i class="fab fa-instagram"></i></a></li>
 </ul>
</nav>
</header>

<?php get_template_part("template-parts/ttl_area"); ?>