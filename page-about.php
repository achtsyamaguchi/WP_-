<?php get_header(); ?>
<main>
    <section class="top">
      <div class="top_bg">
        <p class="top_ttl">
          <small>会社概要</small>
          About
        </p>
      </div>
    </section>
    <section class="breadcrumb">
      <ul class="breadcrumb_list">
        <li class="breadcrumb_item">
          <a href="../index.html"><span>HOME</span></a>
        </li>
        <li class="breadcrumb_item">
          <a href="<?php the_permalink(); ?>"><span class="breadcrumb_color">About</span></a>
        </li>
      </ul>
    </section>
    <section class="about_com section">
      <div class="inner">
        <h2 class="section_ttl"><small></small>Company</h2>
        <div class="about_com_all">
          <div class="about_com_list">
            <div class="about_com_item">
              <h3 class="about_com_ttl">会社名</h3><br>
              <p class="about_com_txt">株式会社WithCode</p>
            </div>
            <div class="about_com_item">
              <h3 class="about_com_ttl">所在地</h3><br>
              <p class="about_com_txt">〒111-1111<br>東京都渋谷区道玄坂１丁目１</p>
            </div>
            <div class="about_com_item">
              <h3 class="about_com_ttl">経営者</h3><br>
              <p class="about_com_txt">代表取締役社長&emsp;WithCode太郎</p>
            </div>
            <div class="about_com_item">
              <h3 class="about_com_ttl">資本金</h3><br>
              <p class="about_com_txt">1000万円</p>
            </div>
          </div>
          <div class="about_com_list">
            <div class="about_com_item">
              <h3 class="about_com_ttl">創立</h3><br>
              <p class="about_com_txt">2022年01月01日</p>
            </div>
            <div class="about_com_item">
              <h3 class="about_com_ttl">事業内容</h3><br>
              <p class="about_com_txt">・プログラミングスクール</p><br>
              <p class="about_com_txt">・Web制作</p><br>
              <p class="about_com_txt">・アプリ開発</p>
            </div>
            <div class="about_com_item">
              <h3 class="about_com_ttl">取引銀行</h3><br>
              <p class="about_com_txt">WithCode銀行</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about_mem section">
      <div class="inner">
        <h2 class="section_ttl"><small></small>Board <br class="sp">Member</h2>
        <div class="about_mem_all">
          <div class="about_mem_per">
            <h3 class="about_mem_ttl">代表取締役</h3>
            <p class="about_mem_name">WithCode太郎</p>
            <p class="about_mem_txt">
              プログラミング業界を変革するべく生まれた『WithCode』。「人生をコードと共に」というミッションを掲げ、既存のプログラミングスクールに革命を起こします。
            </p>
          </div>
          <div class="about_mem_per">
            <h3 class="about_mem_ttl">取締役</h3>
            <p class="about_mem_name">WithCode二郎</p>
            <p class="about_mem_txt">
              プログラミング業界を変革するべく生まれた『WithCode』。「人生をコードと共に」というミッションを掲げ、既存のプログラミングスクールに革命を起こします。
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="about_acc section">
      <div class="inner">
        <h2 class="section_ttl"><small></small>Access</h2>
      </div>
      <div class="about_acc_map_wrapper">
        <div class="about_acc_map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.77016415072!2d139.6994471155175!3d35.65803388019965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b563b00109f%3A0x337328def1e2ab26!2z5riL6LC36aeF!5e0!3m2!1sja!2sjp!4v1643482340437!5m2!1sja!2sjp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="about_acc_list">
          <div class="about_acc_item">
            <h3 class="about_acc_ttl">住所</h3>
            <p class="about_acc_txt">
              〒111-1111<br> 東京都渋谷区道玄坂１丁目１
            </p>
          </div>
          <div class="about_acc_item">
            <h3 class="about_acc_ttl">最寄駅</h3>
            <p class="about_acc_txt">
              渋谷駅徒歩1分
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer();?>