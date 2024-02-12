<?php

class Mailer {
    public function __construct() {
        self::addHookMailer();
    }

    function addHookMailer() {
        add_action( 'wp_ajax_mailer', [$this, 'sender'] );
        add_action( 'wp_ajax_nopriv_mailer', [$this, 'sender'] );
    }

    function sender() {
        $title = $_POST['title'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $to = 'm.yakimov@vyatka-it.ru';

        if (!empty($phone)) {
            $message = "Форма: " .$title. "\r\n";
            $message .= "Имя: " .$name. "\r\n";
            $message .= "Телефон: " .$phone. "\r\n";


            if (isset($_POST['subject'])) {
                $message .= "Отправлено с: ".$_POST['subject']."\r\n";
            }

            $headers = "From: Сайт <info@vyatka-it.ru>\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";

            if (wp_mail($to, 'Новая заявка', $message, $headers)) {
                echo wp_json_encode([
                    'success' => true
                ]);
            } else {
                echo wp_json_encode([
                    'error' => 'Ошибка, повторите снова'
                ]);
            }
        }

        wp_die();
    }
}

new Mailer();