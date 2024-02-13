<?php

    class Helper {
        static function getTemplate($template, $data = array()){
            extract($data);
            require locate_template($template.'.php');
        }

        static function getMonth($month_number){
            $months = [
                '',
                'января',
                'февраля',
                'марта',
                'апреля',
                'мая',
                'июня',
                'июля',
                'августа',
                'сентября',
                'октября',
                'ноября',
                'декабря',
            ];
            return $months[ $month_number ];
        }
    
        static function only_num($string) {
            return preg_replace("/[^0-9]/", '', $string);
        }
        static function getHumanDate( $date ) {
            $month = self::getMonth(date('n', strtotime( $date )));
            return date( 'd', strtotime( $date ) ) . ' ' . $month  . ' ' . date( 'Y', strtotime( $date ) );
        }
    }
