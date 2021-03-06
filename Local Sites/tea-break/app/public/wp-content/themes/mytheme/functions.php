<?php

function mytheme_setup() {

    //CSSを有効化
    add_theme_support('wp-block-styles');

    //縦横比を維持したレスポンシブを有効化
    add_theme_support('responsive-embeds');

    //cssを有効化&エディタに読み込み
    add_theme_support('editor-styles');
    add_editor_style('editor-style.css');

    //ページタイトルを有効化
    add_theme_support('title-tag');

    //link,style,scriptのHTML5対応を有効化
    add_theme_support('HTML5',array('style','script'));

    //アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');

    //全幅・幅広を有効化
    add_theme_support('align-wide');

    // メニューのロケーションを登録
    register_nav_menus(array('primary' => 'ナビゲーション'));

    // 2段組みを有効化
    add_theme_support('mycols');

}
add_action('after_setup_theme','mytheme_setup');

function mytheme_enqueue() {

    //Google Fontsを読み込み
    wp_enqueue_style(
        'myfonts',
        'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;700&display=swap',
        array(),
        null
    );

    //Dashiconsを読み込み
    wp_enqueue_style(
        'dashicons'
    );

    //テーマのcssを読み込み
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_theme_file_path('style.css'))
    );

}
add_action('wp_enqueue_scripts','mytheme_enqueue');

function mytheme_widgets() {

    //ウィジェットエリアを登録
    register_sidebar(array('id' => 'sidebar-1', 'name' => 'フッターメニュー',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>'
    ));
}
add_action('widgets_init', 'mytheme_widgets');