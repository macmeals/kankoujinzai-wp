<?php
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