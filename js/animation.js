
//ハンバーガーメニューの処理
jQuery ( function( $ )
{
    $('.c-button__hamberger').on( "click", function() {
        //３本線の処理
        $( ".c-button__hamberger__upperbar" ).toggleClass( "is-open" );
        $( ".c-button__hamberger__middlebar" ).toggleClass( "is-open" );
        $( ".c-button__hamberger__underbar" ).toggleClass( "is-open" );
        //ロゴの消去
        $( ".p-header__logo" ).toggleClass( "is-none" );
        //バツボタンの位置を右端に固定する。
        $( ".p-header" ).toggleClass( "is-right" );
        //３本線をタップしてサイドバーを表示させる。
        $( ".l-aside" ).toggleClass( "is-open" );
        //３本線をタップしてfooterを非表示する。
        $( ".l-footer" ).toggleClass( "is-open" );
    })
})
