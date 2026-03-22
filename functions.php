<?php
function realestate_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    register_nav_menus(array(
        'main_menu' => 'Huvudmeny'
    ));
}
add_action('after_setup_theme', 'realestate_theme_setup');


function realestate_enqueue_assets() {

    // ✅ ملف style.css الأساسي (مهم جدًا)
    wp_enqueue_style(
        'realestate-style',
        get_stylesheet_uri()
    );

    // ✅ ملف styles.css تبعك
    wp_enqueue_style(
        'realestate-main-style',
        get_template_directory_uri() . '/assets/css/styles.css',
        array('realestate-style'), // يعتمد على الأساسي
        '1.0'
    );

    // ✅ JavaScript
    wp_enqueue_script(
        'realestate-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'realestate_enqueue_assets');


function realestate_widgets_init() {
    register_sidebar(array(
        'name'          => 'Höger sidofält',
        'id'            => 'main-sidebar',
        'before_widget' => '<div class="widget-box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'realestate_widgets_init');
?>