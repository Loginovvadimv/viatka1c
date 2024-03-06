<?php

class Content {
    public function __construct() {
        self::registerAdminPage();
    }

    function registerAdminPage() {
        add_action('acf/init', function() {
            acf_add_options_page(array(
                'page_title' 	=> 'Контент сайта',
                'menu_title'	=> 'Контент сайта',
                'menu_slug' 	=> 'content-settings',
                'capability'	=> 'edit_posts',
                'position'      => 22,
                'icon_url'      => 'dashicons-layout',
                'redirect'		=> false
            ));

            acf_add_options_sub_page( array(
                'page_title' => 'Баннер на главной',
                'menu_title' => 'Баннер на главной',
                'menu_slug' => 'banner',
                'parent_slug' => 'content-settings',
                'update_button' => 'Обновить',
            ) );
            acf_add_options_sub_page( array(
                'page_title' => 'Ближайшие мероприятия',
                'menu_title' => 'Ближайшие мероприятия',
                'menu_slug' => 'events',
                'parent_slug' => 'content-settings',
                'update_button' => 'Обновить',
            ) );
            acf_add_options_sub_page( array(
                'page_title' => 'Станьте партнёром',
                'menu_title' => 'Станьте партнёром',
                'menu_slug' => 'partner',
                'parent_slug' => 'content-settings',
                'update_button' => 'Обновить',
            ) );
            acf_add_options_sub_page( array(
                'page_title' => 'Реквизиты',
                'menu_title' => 'Реквизиты',
                'menu_slug' => 'requisites',
                'parent_slug' => 'content-settings',
                'update_button' => 'Обновить',
            ) );
            acf_add_options_sub_page( array(
                'page_title' => 'О нас',
                'menu_title' => 'О нас',
                'menu_slug' => 'forus',
                'parent_slug' => 'content-settings',
                'update_button' => 'Обновить',
            ) );
            acf_add_options_sub_page( array(
                'page_title' => 'Дипломы и сертификаты',
                'menu_title' => 'Дипломы и сертификаты',
                'menu_slug' => 'diploms',
                'parent_slug' => 'content-settings',
                'update_button' => 'Обновить',
            ) );
            acf_add_options_sub_page( array(
                'page_title' => 'Благодарственные письма',
                'menu_title' => 'Благодарственные письма',
                'menu_slug' => 'letters',
                'parent_slug' => 'content-settings',
                'update_button' => 'Обновить',
            ) );
            acf_add_options_sub_page( array(
                'page_title' => 'Расписание экзаменов',
                'menu_title' => 'Расписание экзаменов',
                'menu_slug' => 'examens',
                'parent_slug' => 'content-settings',
                'update_button' => 'Обновить',
            ) );
            acf_add_options_sub_page( array(
                'page_title' => 'Акции',
                'menu_title' => 'Акции',
                'menu_slug' => 'stocks',
                'parent_slug' => 'content-settings',
                'update_button' => 'Обновить',
            ) );
            acf_add_options_sub_page( array(
                'page_title' => 'Как стать партнером',
                'menu_title' => 'Как стать партнером',
                'menu_slug' => 'become-partner',
                'parent_slug' => 'content-settings',
                'update_button' => 'Обновить',
            ) );
            acf_add_options_sub_page( array(
                'page_title' => 'Сертификация',
                'menu_title' => 'Сертификация',
                'menu_slug' => 'certification',
                'parent_slug' => 'content-settings',
                'update_button' => 'Обновить',
            ) );
            acf_add_options_sub_page( array(
                'page_title' => 'Сертификация 1С:Профессионал',
                'menu_title' => 'Сертификация 1С:Профессионал',
                'menu_slug' => 'certification-professional',
                'parent_slug' => 'content-settings',
                'update_button' => 'Обновить',
            ) );
            acf_add_options_sub_page( array(
                'page_title' => 'Сертификация 1С:Специалист',
                'menu_title' => 'Сертификация 1С:Специалист',
                'menu_slug' => 'certification-specialist',
                'parent_slug' => 'content-settings',
                'update_button' => 'Обновить',
            ) );
            acf_add_options_sub_page( array(
                'page_title' => '1С:Софт',
                'menu_title' => '1С:Софт',
                'menu_slug' => 'soft',
                'parent_slug' => 'content-settings',
                'update_button' => 'Обновить',
            ) );



        });
    }
}

new Content();