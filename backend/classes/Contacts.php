<?php

    class Contacts {
        public function __construct() {
            self::registerAdminPage();
        }

        function registerAdminPage() {
            add_action('acf/init', function() {
                if( function_exists('acf_add_options_page') ) {
                    acf_add_options_page(array(
                        'page_title' 	=> 'Контактные данные',
                        'menu_title'	=> 'Контактные данные',
                        'menu_slug' 	=> 'contacts-settings',
                        'capability'	=> 'edit_posts',
                        'redirect'		=> false
                    ));
                }
        
                acf_add_local_field_group(array(
                    'key' => 'contacts-page',
                    'title' => 'Контактные данные',
                    'fields' => array (
                        array (
                            'key' => 'phone',
                            'label' => 'Телефон',
                            'name' => 'Телефон',
                            'type' => 'text',
                        ),
                        array (
                            'key' => 'email',
                            'label' => 'E-Mail',
                            'name' => 'E-Mail',
                            'type' => 'text',
                        ),
                        array (
                            'key' => 'messengers',
                            'label' => 'Мессенджеры',
                            'name' => 'Мессенджеры',
                            'type' => 'text',
                        ),
                        array (
                            'key' => 'address',
                            'label' => 'Адрес',
                            'name' => 'Адрес',
                            'type' => 'textarea',
                            'new_lines' => 'br'
                        ),
                        array (
                            'key' => 'header_code',
                            'label' => 'Код в head',
                            'name' => 'Код в head',
                            'type' => 'textarea',
                        ),
                        array (
                            'key' => 'footer_code',
                            'label' => 'Код в footer',
                            'name' => 'Код в footer',
                            'type' => 'textarea',
                        ),
                    ),
                    'location' => array (
                        array (
                            array (
                                'param' => 'options_page',
                                'operator' => '==',
                                'value' => 'contacts-settings',
                            ),
                        ),
                    ),
                ));
            });
        }
    }

    new Contacts();

