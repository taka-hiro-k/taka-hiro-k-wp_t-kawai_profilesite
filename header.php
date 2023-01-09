<!DOCTYPE html>
<html <?php language_attributes(); ?>><!-- <html lang="ja">を出力 -->
<head>
<meta charset="<?php bloginfo('charset'); ?>"><!-- <meta charset="utf-8">を出力 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?><!-- 必ずこの場所に書く。<head>内のメタタグを出力するためのアクションフック -->
</head>
<body <?php body_class(); ?>><!-- ページごとにクラスを追加する（クラス名は例えばフロントページなら「home page」など決まっている） -->


<header>
  <div class="header-container">
    <h1 class="site-title">My Plofile</h1>
  <input id="menu" type="checkbox" class="hidden"><!-- ボタンを開閉させる機能 -->
  <label for="menu" class="open"><i class="fa-solid fa-bars"></i></label><!-- 押す前のボタン -->
  
  <!-- ボタンを押してメニューが開いたときの状態 -->
  <div class="drawer-wrap">
    <label for="menu" class="close"><i class="fa-solid fa-xmark"></i></label>
  <nav>
      <ul class="header-navmenu">
        <li><a href="#about"><span>About</span></a></li>
        <li><a href="#portfolio"><span>Portfolio</span></a></li>
      </ul>
 </nav>
</div>
</div>
</header>



</html>