<?php
// JQueryとカスタムJavaScriptを読み込む。

function add_custom_js() {
    wp_enqueue_script('custom-animation', get_template_directory_uri() . '/js/animation.js', array(), false, true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.7.1.min.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'add_custom_js');

// カスタム投稿タイプ「お知らせ」作成
function create_news_post_type() {
    register_post_type( 'news',
    array(
        'labels' => array(
            'name' => __( 'お知らせ' , 'kankoujinzai'),
            'singular_name' => __( 'お知らせ', 'kankoujinzai' ),
            'label' => __( 'お知らせの種類', 'kankoujinzai' )  
        ),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('news-genre'),
    )
    );
}
add_action( 'init', 'create_news_post_type' );

// カスタムタクソノミー「お知らせの種類」作成

function create_news_genre_taxonomy() {
    register_taxonomy(
    'news-genre',
    'news',
    array(
        'label' => __( 'お知らせの種類' , 'kankoujinzai' ),
        'rewrite' => array( 'slug' => 'news-genre' ),
        'hierarchical' => true,
    )
    );
}
add_action( 'init', 'create_news_genre_taxonomy' );

// front-page.phpのNewsセクションに呼び出す関数
// single-news.phpのNewsページに呼び出す関数

//blue、Orangeラベルをスラッグ毎に呼び出す関数
function get_news_label_class($post_id) {
    $terms = get_the_terms($post_id, 'news-genre');
    if ($terms && !is_wp_error($terms)) {
        foreach ($terms as $term) {
            if ($term->slug == 'news-release') {
                return 'c-label__news-orange';
            } elseif ($term->slug == 'topic') {
                return 'c-label__news-blue';
            }
        }
    }
    // デフォルトのクラス名
    return '';
}

//カスタム投稿「News」の記事リンクを出力する関数
function custom_news_link($post_id) {
    $link = '<a class="p-news__grid-item" href="' . get_permalink($post_id) . '">' . get_the_title($post_id) . '</a>';
    echo $link;
}