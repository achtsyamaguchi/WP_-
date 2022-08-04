<?php get_header(); ?>
<main>
    <section class="top">
      <div class="top_bg">
        <p class="top_ttl">
          <small>お問い合わせ</small>
          Contact
        </p>
      </div>
    </section>
    <section class="breadcrumb">
      <ul class="breadcrumb_list">
        <li class="breadcrumb_item">
          <a href="../index.html"><span>HOME</span></a>
        </li>
        <li class="breadcrumb_item">
          <a href="<?php the_permalink(); ?>"><span class="breadcrumb_color">Contact</span></a>
        </li>
      </ul>
    </section>
    <section class="contact section">
      <div class="inner">
        <h2 class="section_ttl"><small></small>Contact</h2>
        <div class="contact_item">
          <p class="contact_txt">
            弊社にご興味/関心を頂き、誠に有難うございます。
            制作/運用料金などの見積もり、サービスに関するご相談など、
            気軽にお問い合わせ下さい。
            弊社の担当者が内容の確認後、ご連絡させて頂きます。
            下記よりお問い合わせ項目を記入下さい。
          </p>
          <div class="contact_img"></div>
        </div>
        <form action="../mail.php" class="contact_form" id="form" method="POST">
          <div class="contact_box">
            <label for="name" class="contact_form_ttl">お問い合わせ項目</label>
            <select class="contact_form_box1" name="お問い合わせ項目" required="required">
              <optgroup value>
                <option class="select_with" value="プルダウンメニューで問い合わせ内容を選択" hidden>お問い合わせ内容を選択</option>
                <option class="select_with" value="サイト制作/運用の見積もり">サイト制作/運用の見積もり</option>
                <option class="select_with" value="システム制作/運用の見積もり">システム開発/運用の見積もり</option>
                <option class="select_with" value="その他">その他</option>
              </optgroup>
            </select>
          </div>

          <div class="contact_box">
            <label for="name" class="contact_form_ttl">お名前（漢字）</label>
            <input type="text" class="contact_form_box2" name="お名前（漢字）" required="required" placeholder="お名前をご入力下さい">
          </div>

          <div class="contact_box">
            <label for="email" class="contact_form_ttl">メールアドレス</label>
            <input type="email" class="contact_form_box2" name="メールアドレス" required="required" placeholder="例）example@example.com">
          </div>

          <div class="contact_box _area">
            <label for="message" class="contact_form_ttl">お問い合わせ内容</label>
            <textarea name="お問い合わせ内容" class="contact_txtarea" id="message" required="required"
              placeholder="お問い合わせ内容をご入力下さい"></textarea>
          </div>

          <button type="submit" class="btn contact_btn">送信する</button>

        </form>
      </div>
    </section>
  </main>
<?php get_footer();?>
