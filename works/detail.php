<?php include($_SERVER['DOCUMENT_ROOT'] . '/lib/header.php'); ?>

  <section class="works_main-section section">
    <div class="inner">
      <div class="title-area">
        <h2>Portfolio</h2>
      </div>
      <div class="works_detail-box">
        <h2 class="detail-box_title">ポートフォリオタイトルが入ります</h2>
        <ul class="category-list">
          <li class="category-item"><a href="">Category1</a></li>
          <li class="category-item"><a href="">Category2</a></li>
          <li class="category-item"><a href="">Category3</a></li>
        </ul>
        <div class="work-image">
          <!--　モーダルウィンドウの表示 -->
          <a href="#" class="modalOpen">
            <img src="/images/blog/dummy_03.png" alt="">
          </a>
        </div>
        <div class="work-url">
          <h3>制作物</h3>
          <a href="">ぽにゃらら株式会社</a>
        </div>
        <div class="detail_description-box">
          <div class="work-description">
            <div class="des-wrap">
              <h3 class="des-title">制作技術</h3>
              <ul class="des-list">
                <li class="des-item"><a href="">HTML</a></li>
                <li class="des-item"><a href="">CSS</a></li>
                <li class="des-item"><a href="">JavaScript</a></li>
              </ul>
            </div>
            <div class="des-wrap">
              <h3 class="des-title">制作期間</h3>
              <p>1ヶ月</p>
            </div>
          </div> <!-- work-description -->
          <div class="work-description">
            <div class="des-wrap">
              <h3 class="des-title">制作背景</h3>
              <p>
                文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。<br>
                文章が入ります。文章が入ります。文章が入ります。文章が入ります。<br>
                文章が入ります。文章が入ります。文章が入ります。文章が入ります。文章が入ります。<br>
                文章が入ります。文章が入ります。文章が入ります。
              </p>
            </div>
          </div> <!-- work-description -->
        </div> <!-- detail_description-box -->
      </div> <!-- works_detail-box -->
      <div class="back-btn">
        <a href="/works/">Back List</a>
      </div>
    </div> <!-- inner -->
  </section>

  <!-- モーダルウィンドウの中身 -->
  <div id="modal01" class="modal">
    <div class="modal__close"></div>
    <div class="modal__content">
      <img src="/images/blog/dummy_03.png" alt="">
    </div>
  </div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/lib/footer.php'); ?>
