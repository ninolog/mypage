<?php include($_SERVER['DOCUMENT_ROOT'] . '/lib/header.php'); ?>

  <!-- top_main-section -->
  <div class="contact_main-section section">
    <div class="inner">
      <div class="title-area">
        <h2>Contact</h2>
      </div>
      <div class="contact-area">
        <div class="contact_txt-box">
          <h3>お問い合わせやお仕事の依頼はこちらからどうぞ</h3>
        </div>
        <div class="contact-form">
          <form action="">
            <div class="form-item _name">
              <label for="name">お名前</label>
              <input type="text" id="name" name="name" placeholder="ニノ 猫太郎">
            </div>
            <div class="form-item _mail">
              <label for="email">メールアドレス</label>
              <input type="email" id="email" name="email" placeholder="ninolog@dev.com">
            </div>
            <div class="form-item _message">
              <label for="message">メッセージ</label>
              <textarea name="message" id="message" cols="30" rows="10" placeholder="メッセージを入力してください"></textarea>
            </div>
            <div class="form-item _submit">
              <input type="submit" value="送信">
            </div>
          </form>
        </div>
      </div> <!-- contact-area -->
    </div> <!-- inner -->
  </div>
  <!-- /top_main-section -->

<?php include($_SERVER['DOCUMENT_ROOT'] . '/lib/footer.php'); ?>
