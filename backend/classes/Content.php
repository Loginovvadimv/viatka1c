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



        });
    }
}

new Content();