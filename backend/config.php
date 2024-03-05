<?php
    
    # DEV = 0
    # PRODUCTION = 1
    define('MODE', 0);
    define('VERSION', 1.2);

    #region Константы
    define('PATH', get_template_directory_uri());
    define('ASSETS', get_template_directory_uri() . (MODE == 0 ? '/frontend/dev/assets/' : '/frontend/app/assets/'));
    #endregion

    #region Добавление стилей и скриптов
    add_action( 'wp_enqueue_scripts', 'setup_work_files' );
    function setup_work_files() {

        switch (MODE) {
            case 0:
                wp_enqueue_style( 'style', get_template_directory_uri() . '/frontend/dev/assets/app.min.css', [], VERSION );
                wp_enqueue_script( 'javascript', get_template_directory_uri() . '/frontend/dev/assets/app.min.js', [], VERSION, true);
                break;
            case 1:
                wp_enqueue_style( 'style', get_template_directory_uri() . '/frontend/app/assets/app.min.css', [], VERSION );
                wp_enqueue_script( 'javascript', get_template_directory_uri() . '/frontend/app/assets/app.min.js', [], VERSION, true);
                break;
        }

        wp_dequeue_style('wp-block-library');
        wp_deregister_script( 'wp-embed' );
    }

    add_action('after_setup_theme', function() {
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', [ 'script', 'style' ] );
    });

    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    #endregion

    #region Скрыть ненужные пункты меню
    add_action('admin_menu', 'remove_admin_menu');
    function remove_admin_menu() {
        remove_menu_page('edit.php');
//        remove_menu_page('edit-comments.php');
        remove_menu_page('tools.php');
    }
    #endregion

    #region Скрыть панель админа
    show_admin_bar( false );
    #endregion


//Вывод Меню
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}


//Удаление  classic-theme-styles
add_action( 'wp_enqueue_scripts', 'mywptheme_child_deregister_styles', 20 );
function mywptheme_child_deregister_styles() {
    wp_dequeue_style( 'classic-theme-styles' );
}

