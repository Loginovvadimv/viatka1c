<?php

    class Offer {
        public function __construct() {

        }

        static function getTemplate() {
            $data = [];

            # Основаня информация
            $data['title'] = get_field('offer-title', 'options');
            $data['subtitle'] = get_field('offer-subtitle', 'options');

            Helper::getTemplate('templates/offer', $data);
        }
    }

    new Offer();