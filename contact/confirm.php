<?php include($_SERVER['DOCUMENT_ROOT'] . '/lib/header.php'); ?>

  <!-- top_main-section -->
  <div class="contact_main-section section">
    <div class="inner">
      <div class="title-area">
        <h2>Contact</h2>
      </div>
      <div class="contact-area _confirm">
        <div class="contact_txt-box">
          <h3>お問い合わせ内容にお間違いはありませんか？</h3>
        </div>
        <div class="contact-form">
          <form action="">
            <div class="form-item _name">
              <label for="name">お名前</label>
              <p>ニノ 猫太郎</p>
              <input type="hidden" id="name" name="name" value="ニノ 猫太郎">
            </div>
            <div class="form-item _mail">
              <label for="email">メールアドレス</label>
              <p>ninolog@dev.com</p>
              <input type="hidden" id="email" name="email" value="ninolog@dev.com">
            </div>
            <div class="form-item _message">
              <label for="message">メッセージ</label>
              <p>
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br>
                テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
              <input type="hidden" name="message" id="message" value="">
            </div>
            <div class="form-item _confirm-submit">
              <a href="/contact">戻る</a>
              <input type="submit" value="送信">
            </div>
          </form>
        </div>
      </div> <!-- contact-area -->
    </div> <!-- inner -->
  </div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/lib/footer.php'); ?>
