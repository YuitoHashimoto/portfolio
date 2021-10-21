<?php
function my_theme_setup() {
    add_theme_support('post-thumbnails');
  }
  add_action( 'after_setup_theme', 'my_theme_setup');

  // 投稿のアーカイブページを作成する
  function post_has_archive($args, $post_type)
  {
      if ('post' == $post_type) {
          $args['rewrite'] = true; // リライトを有効にする
          $args['has_archive'] = 'list'; // 任意のスラッグ名
      }
      return $args;
  }
  add_filter('register_post_type_args', 'post_has_archive', 10, 2);

//   pタグを自動生成しないようにする
  // add_action('init', function() {
  //   remove_filter('the_excerpt', 'wpautop');
  //   remove_filter('the_content', 'wpautop');
  //   });
  //   add_filter('tiny_mce_before_init', function($init) {
  //   $init['wpautop'] = false;
  //   $init[‘apply_source_formatting’] = true;
  //   return $init;
  //   });

// メディアでSVG表示される様に。
add_filter( 'upload_mimes', function ( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
});

add_filter( 'manage_media_columns', function ( $columns ) {
  echo '<style>.media-icon img[src$=".svg"]{width:100%;}</style>';
  return $columns;
});

?>

