<?php get_header(); the_post(); ?>
<main>
    <section class="top">
      <div class="top_bg">
      <div class="top_img">
          <!-- <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="ロゴ画像"> -->
        </div>

        <p class="top_ttl">
          <small>詳細</small>
          Detail
        </p>
      </div>
    </section>

    <section class="breadcrumb">
      <ul class="breadcrumb_list">
        <li class="breadcrumb_item">
          <a href="/index.html"><span>HOME</span></a>
        </li>
        <li class="breadcrumb_item">
        <a href="<?php echo get_permalink(get_page_by_path('news')->ID); ?>"><span>News</span></a>
        </li>
        <li class="breadcrumb_item">
          <a href="index.html"><span class="breadcrumb_color">Detail</span></a>
        </li>
      </ul>
    </section>

    

      <div class="inner">
        <h2 class="section_ttl"><small></small>News</h2>
        <div class="news_all">
          
          <ul class="news_list">
          <?php query_posts ('posts_per_page=1'); ?>
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





    <!-- <div class="news_img">
    <?php the_post_thumbnail(array(350, 180)); ?>
                  <img src="<?php echo get_template_directory_uri();?>/img/news.png" alt="ニュース画像">
                </div>
                <div class="news_txt">
                  <p class="news_ttl"><?php the_title(); ?></p>
                  <p class="news_date"><?php the_time('Y.m.d'); ?></p>
                </div> -->

<?php get_footer();?>
