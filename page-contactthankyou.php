<?php
/*
Template Name: contact_thankyou
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
        <section class="l-background__contact p-company">
            <img class="l-background__contact-top  c-img__contact-top " src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt="1枚目のContactの写真">
            <img class="l-background__contact-middle  c-img__contact-middle" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt="2枚目のContactの写真">
            <img class="l-background__contact-bottom  c-img__contact-bottom" src="<?php echo esc_url(content_url('/uploads')); ?>/2024/04/background_tomoe.webp" alt="3枚目のContactの写真">
            
            <h2 class="p-company__title">
                <p class="c-font__subtitle">Contact</p>
                <p class="c-font__subtitle-jp" >お問い合わせ</p>
            </h2>

            <?php the_content(); ?>
            <a class="c-button__regular u-margin__pc-top-btm150 u-margin__sp-top50" href="<?php echo home_url(); ?>">ホームへ</a>
        </section>
    </main>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>