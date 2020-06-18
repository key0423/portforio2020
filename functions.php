<?php 
/*
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
$slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
}
return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4 );
*/




// add_theme_support('post-thumbnails');//アイキャッチを有効にする
// get_post_meta($post->ID, 'img_url', true)




/* 【出力カスタマイズ】メインクエリーをカスタマイズ */
add_action( 'pre_get_posts', 'foo_modify_main_queries' );
function foo_modify_main_queries ( $query ) {
  if ( ! is_admin() && $query->is_main_query() ) { // 管理画面以外かつメインクエリーを対象とする
    if ( $query->is_home() ) {
      $query->set( 'post_type', array('post','works')); // 投稿とカスタム投稿（blog）を含める
    }
  }
}


?>