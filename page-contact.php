<?php
/*
Template Name: contact
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
            
            <h2 class="p-company__title">
                <p class="c-font__subtitle">Contact</p>
                <p class="c-font__subtitle-jp" >お問い合わせ</p>
            </h2>
            <div class="p-contact__contents">
                <p>以下のフォームの記入をお願い致します。３営業日以内に担当者からご連絡差し上げます。もし３営業日以上経ってもご連絡が無かった場合、お手数ですが、再度お問合せフォームよりご連絡をお願いいたします。</p>
                <p>※現在問い合わせフォームは準備中です。</p>
            </div>
            <a class="c-button__regular u-margin__pc150" href="<?php echo home_url(); ?>">ホームへ</a>
        </section>
    </main>
<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>