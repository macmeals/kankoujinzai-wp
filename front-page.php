<?php get_header(); ?>
    <main >
        <section class="l-background__business p-business">
            <img class="l-background__business-top c-img__business_back-top" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt=１つ目の背景">
            <img class="l-background__business-middle c-img__business_back-top" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt=２つ目の背景">
            <img class="l-background__business-under c-img__business_back-bottom" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt=３つ目の背景">
            <div class="p-business__contents">
                <div class="p-business__title">
                    <img class="c-img__business_photo" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/business1_photo.webp" alt="事業１心斎橋観光の写真">
                    <p class="c-label__business_title">心<span class="c-font__yellow">斎</span>橋観光</p>
                </div>
                <div class="p-business__frame"></div>
                <p class="p-business__text">心斎橋は大阪随一の繁華街で、グルメもショッピングも楽しめます。そのアテンドについて、お任せください。またバスでの各所の送迎も行っております。お店の詳細は以下のサイトをご参照下さい。We Love 心斎橋のサイトは<a href="#" class="c-font__yellow">こちら</a></p>
            </div>
            <div class="p-business__contents">
                <div class="p-business__title">
                    <img class="c-img__business_photo" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/business2_photo.webp" alt="事業2ホテル観光の写真">
                    <p class="c-label__business_title">ホ<span class="c-font__yellow">テ</span>ル観光</p>
                </div>
                <div class="p-business__frame"></div>
                <p class="p-business__text">大阪堺・その他地域の宿泊施設を複数所有しています。また各種ホテルと提携しており、そのアテンドも行っています。</p>
            </div>
            <p class="c-font__business-long u-margin__pc-top80-btm40 u-margin__sp-top40-btm20">千客万来のインバウンド</p>
            <p class="c-font__business-short">おもてなし。</p>
        </section>
        <section class="l-background__news p-news">
            <img class="l-background__news-top  c-img__news_back-top" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt="1枚目のNewsセクションの写真">
            <img class="l-background__news-middle  c-img__news_back-middle" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt="2枚目のNewsセクションの写真">
            <h2 class="p-news__title">
                <p class="c-font__subtitle">News</p>
                <p class="c-font__subtitle-jp" >お知らせ</p>
            </h2>
            <div class="p-news__contents">
                <p class="c-font__date">2024.4.30</p>
                <p class="c-label__news-blue">ニュースリリース</p>
                <a class="p-news__grid-item" href="<?php echo home_url(); ?>/news1/">ホームページを公開しました</a>
            </div>
        </section>
    </main>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>

</body>
</html>
