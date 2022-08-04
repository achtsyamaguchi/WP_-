<?php get_header(); ?>
<main>
    <section class="top">
      <div class="top_bg">
      <div class="top_img">
          <!-- <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="ロゴ画像"> -->
        </div>

        <p class="top_ttl">
          <small>お知らせ</small>
          News
        </p>
      </div>
    </section>


    <section class="breadcrumb">
      <ul class="breadcrumb_list">
        <li class="breadcrumb_item">
          <a href="/index.html"><span>HOME</span></a>
        </li>
        <li class="breadcrumb_item">
          <a href="<?php the_permalink(); ?>"><span class="breadcrumb_color">News</span></a>
        </li>
      </ul>
    </section>

    
    <section class="news section">
      <div class="inner">
        <h2 class="section_ttl"><small></small>News</h2>
        <div class="news_all">
          
          <ul class="news_list">
            <?php query_posts ('posts_per_page=6'); ?>
            <?php if (have_posts()): while(have_posts()): the_post(); ?>
            <li class="news_item">
            <a href="<?php the_permalink(); ?>">
              <!-- <a href="news.html"> -->
              

                <div class="news_img">
                  <?php the_post_thumbnail(array(350, 180)); ?>
                  <!-- <img src="<?php echo get_template_directory_uri();?>/img/news.png" alt="ニュース画像"> -->
                </div>
                <div class="news_txt">
                  <p class="news_ttl"><?php the_title(); ?></p>
                  <p class="news_date"><?php the_time('Y.m.d'); ?></p>
                </div>
              </a>
            </li>
            <?php endwhile; endif; ?>

            <!-- <li class="news_item">
              <a href="news.html">
                <div class="news_img">
                  <img src="<?php echo get_template_directory_uri();?>/img/news.png" alt="ニュース画像">
                </div>
                <div class="news_txt">
                  <p class="news_ttl">WithCode創設</p>
                  <p class="news_date">2022.01.01</p>
                </div>
              </a>
            </li>
            <li class="news_item">
              <a href="news.html">
                <div class="news_img">
                  <img src="<?php echo get_template_directory_uri();?>/img/news.png" alt="ニュース画像">
                </div>
                <div class="news_txt">
                  <p class="news_ttl">WithCode創設</p>
                  <p class="news_date">2022.01.01</p>
                </div>
              </a>
            </li>
            <li class="news_item">
              <a href="news.html">
                <div class="news_img">
                  <img src="<?php echo get_template_directory_uri();?>/img/news.png" alt="ニュース画像">
                </div>
                <div class="news_txt">
                  <p class="news_ttl">WithCode創設</p>
                  <p class="news_date">2022.01.01</p>
                </div>
              </a>
            </li>
            <li class="news_item">
              <a href="news.html">
                <div class="news_img">
                  <img src="<?php echo get_template_directory_uri();?>/img/news.png" alt="ニュース画像">
                </div>
                <div class="news_txt">
                  <p class="news_ttl">WithCode創設</p>
                  <p class="news_date">2022.01.01</p>
                </div>
              </a>
            </li>
            <li class="news_item">
              <a href="news.html">
                <div class="news_img">
                  <img src="<?php echo get_template_directory_uri();?>/img/news.png" alt="ニュース画像">
                </div>
                <div class="news_txt">
                  <p class="news_ttl">WithCode創設</p>
                  <p class="news_date">2022.01.01</p>
                </div>
              </a>
            </li> -->
          </ul>
        </div>
      </div>
    </section>
  </main>
<?php get_footer();?>