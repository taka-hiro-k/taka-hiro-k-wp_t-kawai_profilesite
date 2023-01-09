<?php
// 各種ファイルの読み込み
function enqueue_scripts() {
    // CSSファイル
    wp_enqueue_style('main', get_stylesheet_uri());
    //bootstrap
    wp_enqueue_style('font-awesome a', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
    //google-fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto&display=swap');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');


