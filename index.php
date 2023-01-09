<?php get_header(); ?><!-- <header>を呼び出す関数 -->
<main>
 <!-- ここからメイン画像 -->
 <div class="main-container">
    <img src="http://takahirokawai-s-profile-site.local/wp-content/uploads/2023/01/main.png" alt="メイン">
  </div>
  <!-- ここまでメイン画像 -->
  <!-- ここからAbout -->
  <div id="about" class="about-container">
    <h2>About</h2>
    <div class="profile-box">
      <div class="profile-img">
        <img src="http://takahirokawai-s-profile-site.local/wp-content/uploads/2023/01/my.png" alt="自画像">
      </div>
      <div class="profile-text">
        <h3>Takahiro.Kawai</h3>
        <ul>
          <li>・32歳 東京都八王子市出身</li>
          <li>・子供2人いる4人家族になります</li>
          <li>・2022年 未経験ながらIT業界に転職</li>
          <li>・前職はLED照明器具メーカーで働いていました</li>
          <li>・WEBデザインを学び世の中に求められる人材になるのが夢</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- ここまでAbout -->

  <!-- ここからPortfolio -->
  <div id="portfolio" class="portfolio-container">
    <h2>Portfolio</h2>
    <div class="product-box">
      <div class="product-item">
        <div class="portfolio-img"><img src="https://placehold.jp/32px/add8e6/ffffff/358x268.png?text=%E3%83%80%E3%83%9F%E3%83%BC%E7%94%BB%E5%83%8F" alt=""></div>
        <div class="portfolio-text">テキストテキストテキストテキストテキストテキスト</div>
    </div>
    <div class="product-item">
        <div class="portfolio-img"><img src="https://placehold.jp/32px/add8e6/ffffff/358x268.png?text=%E3%83%80%E3%83%9F%E3%83%BC%E7%94%BB%E5%83%8F" alt=""></div>
        <div class="portfolio-text">テキストテキストテキストテキストテキストテキスト</div>
    </div>
    <div class="product-item">
        <div class="portfolio-img"><img src="https://placehold.jp/32px/add8e6/ffffff/358x268.png?text=%E3%83%80%E3%83%9F%E3%83%BC%E7%94%BB%E5%83%8F"></div>
        <div class="portfolio-text">テキストテキストテキストテキストテキストテキスト</div>
      </div>
    </div>
  </div>
  <!-- ここまでPortfolio -->
</main>
<?php get_footer();//<footer>を呼び出す関数。誤動作を防ぐため最終行には閉じタグを書かない。