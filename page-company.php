<?php
/*
Template Name: company
*/
?>

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
                <source media="(min-width: 440px)" srcset="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/fv_company_pc.webp">
                <!-- mobile -->
                <source media="(max-width: 439px)" srcset="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/fv_company_mobile.webp">
                <!-- 上記の条件に一致しない場合のフォールバック画像 -->
                <img src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/fv_company_mobile.webp" alt="ファーストビューの画像">
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
        <section class="l-background__company p-company">
            <img class="l-background__company-top  c-img__company-top " src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt="1枚目のCompanyの写真">
            <img class="l-background__company-middle  c-img__company-middle" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt="2枚目のCompanyセクションの写真">
            <img class="l-background__company-bottom  c-img__company-bottom" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt="3枚目のCompanyセクションの写真">
            <h2 class="p-company__title">
                <p class="c-font__subtitle">Company</p>
                <p class="c-font__subtitle-jp" >会社情報</p>
            </h2>
            <?php
            $page_id = 26; // 固定ページのCompanyの投稿ID
            $post = get_post($page_id); 
            setup_postdata($post);

            the_content();

            wp_reset_postdata(); // グローバルな$post変数を元に戻す
            ?>
            
            </div>
            <a class="c-button__regular u-margin__pc150" href="<?php echo home_url(); ?>">ホームへ</a>
        </section>
    </main>
<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>
