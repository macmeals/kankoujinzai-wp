<?php get_header(); ?>
            <main class="l-wrapper">
                <section class="l-background__business p-business">
                    <img class="l-background__business-top c-img__business_back-top" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt=１つ目の背景">
                    <img class="l-background__business-middle c-img__business_back-top" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt=２つ目の背景">
                    <img class="l-background__business-under c-img__business_back-bottom" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt=３つ目の背景">
                    <div class="p-business__contents">
                        <div class="p-business__title">
                            <img class="c-img__business_photo" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/07/fv2.webp" alt="ホテル龍吉">
                            <p class="c-label__business_title">ホ<span class="c-font__yellow">テ</span>ル龍吉</p>
                        </div>
                        <div class="p-business__frame"></div>
                            <p class="p-business__text">関西国際空港(KIX)へのアクセスも抜群。寛ぎ空間で、特別なひとときを。
                                </br>【料金】1泊2食:5,000円～／お一人様
                                </br>※本館・別館があり、本館・足湯設備を準備中です。
                            </p>
                    </div>
                    <div class="p-business__contents">
                        <div class="p-business__title">
                            <img class="c-img__business_photo" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/07/fv3.webp" alt="御食事">
                            <p class="c-label__business_title">御<span class="c-font__yellow">食</span>事</p>
                        </div>
                        <div class="p-business__frame"></div>
                        <p class="p-business__text">ホテル龍吉や、大阪市内中心地で団体客様向けの食事をご用意しています。ゆったりとした広々空間で、日本の美味しい食事を堪能いただけます。
                            </br>【料金】1食:680円～／お一人様
                            </br>※ご予算に合わせて提案させていただきます</p>
                    </div>
                    <div class="p-business__contents">
                        <div class="p-business__title">
                            <img class="c-img__business_photo" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/07/fv4.webp" alt="化粧品販売">
                            <p class="c-label__business_title">化粧<span class="c-font__yellow">品</span>販売</p>
                        </div>
                        <div class="p-business__frame"></div>
                        <p class="p-business__text">ホテルや御食事をご利用いただいたお客様限定で、当社オリジナルの高級化粧品も販売しております。
                            </br> 商品名：クレーム ド フワリ 本体価格：30,000円（税込33,000円）
                            </br>  内容量：30ｇ 種類：美容液クリーム
                        </p>
                    </div>
                    <div class="p-business__contents">
                        <div class="p-business__title">
                            <img class="c-img__business_photo" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/07/fv1.webp" alt="無料送迎バス">
                            <p class="c-label__business_title">無料<span class="c-font__yellow">送迎</span>バス</p>
                        </div>
                        <div class="p-business__frame"></div>
                        <p class="p-business__text">ホテルや御食事をご利用いただいたお客様限定で、大阪市内↔関空(KIX)の無料送迎バスをご用意しています。(大型55人乗り、中型28人乗り、マイクロ18人乗り・22人乗り)
                        </p>
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
                    <?php
                        // カスタム投稿「News」のクエリを取得する
                        $args = array(
                            'post_type' => 'news',
                            'posts_per_page' => -1, // 全ての投稿を取得する
                        );

                        $news_query = new WP_Query($args);

                        // カスタム投稿「News」のループ
                        if ($news_query->have_posts()) {
                            while ($news_query->have_posts()) {
                                $news_query->the_post();
                                echo '<div class="p-news__contents">'; 
                                    echo '<p class="c-font__date">' . get_the_date('Y.m.d') . '</p>'; 
                                    echo '<p class="' . get_news_label_class(get_the_ID()) . '">'; 
                                    echo get_the_terms(get_the_ID(), 'news-genre')[0]->name; // カスタムタクソノミーの名前を取得して出力
                                    echo '</p>';
                                    // カスタム投稿「News」のリンクを出力
                                    custom_news_link(get_the_ID());
                                echo ' </div>'; 
                                
                            }
                            wp_reset_postdata(); // クエリをリセット
                        }
                        ?>
                </section>
            </main>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>

</body>

</html>
