<?php

class Stocks {
    public function __construct() {
        self::registerPostType();
    }

    function registerPostType() {
        add_action( 'init', function (){

            register_post_type('stocks', array(

                'label'  => 'Акции',

                'labels' => array(
                    'name'               => 'Акции', // основное название для типа записи
                    'singular_name'      => 'Акции', // название для одной записи этого типа
                    'add_new'            => 'Добавить Акцию', // для добавления новой записи
                    'add_new_item'       => 'Добавление Акции', // заголовка у вновь создаваемой записи в админ-панели.
                    'edit_item'          => 'Редактирование Акции_', // для редактирования типа записи
                    'new_item'           => 'Новая Акция', // текст новой записи
                    'view_item'          => 'Смотреть Акции', // для просмотра записи этого типа.
                    'search_items'       => 'Искать Акции', // для поиска по этим типам записи
                    'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                    'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                    'parent_item_colon'  => '', // для родителей (у древовидных типов)
                    'menu_name'          => 'Акции', // название меню
                ),

                'description'         => '',
                'public'              => true,
                'publicly_queryable'  => null, // зависит от public
                'exclude_from_search' => null, // зависит от public
                'show_ui'             => null, // зависит от public
                'show_in_menu'        => null, // показывать ли в меню адмнки
                'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
                'show_in_nav_menus'   => null, // зависит от public
                'show_in_rest'        => null, // добавить в REST API. C WP 4.7
                'rest_base'           => null, // $post_type. C WP 4.7
                'menu_position'       => null,
                'menu_icon'           => 'dashicons-admin-comments',
                //'capability_type'   => 'post',
                //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
                //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
                'hierarchical'        => false,
                'supports'            => array('title','editor', 'thumbnail' ), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
                'taxonomies'          => array(),
                'has_archive'         => false,
                'rewrite'             => true,
                'query_var'           => true,

            ) );

        } );
    }
}

new Stocks();