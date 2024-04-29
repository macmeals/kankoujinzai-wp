<?php get_header(); ?>
<main class="l-main">
        <div class="p-firstview">
            <picture>
                <!-- pc -->
                <source media="(min-width: 440px)" srcset="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/fv_news_shikaku-pc.png">
                <!-- mobile -->
                <source media="(max-width: 439px)" srcset="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/fv_news_shikaku-mobile.png">
                <!-- 上記の条件に一致しない場合のフォールバック画像 -->
                <img src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/fv_news_shikaku-pc.png" alt="ファーストビューのあしらい">
            </picture>
            <picture>
                <!-- pc -->
                <source media="(min-width: 440px)" srcset="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/fv_news_pc.webp">
                <!-- mobile -->
                <source media="(max-width: 439px)" srcset="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/fv_news_mobile.webp">
                <!-- 上記の条件に一致しない場合のフォールバック画像 -->
                <img src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/fv_news_pc.png" alt="ファーストビューの画像">
            </picture>
            <picture>
                <!-- pc -->
                <source media="(min-width: 440px)" srcset="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/fv_news_shikaku-pc.png">
                <!-- mobile -->
                <source media="(max-width: 439px)" srcset="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/fv_news_shikaku-mobile.png">
                <!-- 上記の条件に一致しない場合のフォールバック画像 -->
                <img src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/fv_news_shikaku-pc.png" alt="ファーストビューのあしらい">
            </picture>
        </div>
        <article class="p-news__article l-background__news">
            <img  class="c-img__news_detail-top l-background__news-detail"  src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt="背景">
            <img  class="c-img__news_back-middle l-background__news-detail-btm"  src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt="背景">
            <div class="p-news__article-date">
                <p class="c-font__date"><?php echo get_the_date(); ?></p>
                <p class="c-label__news"> 
                <?php 
                    $terms = get_the_terms( get_the_ID(), 'news-genre' );
                    if ( !empty($terms) ) {
                        // タクソノミー名を表示
                        echo esc_html( $terms[0]->name );
                    } else {
                        echo 'ニュース'; // タクソノミーが見つからない場合のフォールバック
                    }
                    ?>
                </p>
            </div>
            <section>
                <h2 class="p-news__article-title">ホームページを公開しました。</h2>
                <p class="u-margin__pc80">観光人材株式会社のホームページをリニューアルしました。これから事業やお知らせについて情報をこのページ上に公開していきます。</p>
            </section>
            <a class="c-button__regular u-margin__pc150" href="<?php echo home_url(); ?>">ホームへ</a>
        </article>
    </main>

<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>