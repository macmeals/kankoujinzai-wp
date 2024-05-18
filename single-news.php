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
                <p class="c-font__date"><?php echo get_the_date('Y.m.d'); ?></p>
                <?php
                    echo '<p class="' . get_news_label_class(get_the_ID()) . '">'; 
                    echo get_the_terms(get_the_ID(), 'news-genre')[0]->name; // カスタムタクソノミーの名前を取得して出力
                    echo '</p>';
                ?>
            </div>
            <section>
                <!-- 投稿のタイトルを取得 -->
                <?php
                    global $post;
                    $title = get_the_title($post->ID);
                    echo '<h2 class="p-news__article-title">' . esc_html($title) . '</h2>';
                ?>

                    <!--  投稿コンテンツを取得・表示 -->
                <?php
                    $post = get_post($post->ID); 
                    setup_postdata($post);
                    $content = apply_filters('the_content', $post->post_content);
                    echo '<p class="u-margin__pc-top80 u-margin__sp-top60">' . $content . '</p>';
                    wp_reset_postdata();
                ?>

            </section>
            <a class="c-button__regular u-margin__pc-top-btm150 u-margin__sp-top40-btm40" href="<?php echo home_url(); ?>">ホームへ</a>
        </article>
    </main>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>

</body>
</html>