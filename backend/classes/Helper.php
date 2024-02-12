<?php

    class Helper {
        static function getTemplate($template, $data = array()){
            extract($data);
            require locate_template($template.'.php');
        }

        static function getMonth($month_number){
            $months = [
                '',
                'янв',
                'февр',
                'марта',
                'апр',
                'мая',
                'июня',
                'июля',
                'авг',
                'сент',
                'окт',
                'нояб',
                'дек',
            ];
            return $months[ $month_number ];
        }
    
        static function only_num($string) {
            return preg_replace("/[^0-9]/", '', $string);
        }
    }