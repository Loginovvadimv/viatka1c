<?php

    class VK {
        static function send($message) {
            $url = 'https://api.vk.com/method/messages.send?';

            if (!empty($message)) {
                $params = [
                    'user_ids' => '248982572', //308498923
                    'random_id' => time(),
                    'message' => $message,
                    'access_token' => '861b05b9b9e3218733c0f45512049d03eca5fa32277ead4545423a482725d83c7022c9f3bba293d04a275',
                    'v' => '5.131',
                ];

                $options = [
                    'http' => [
                        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                        'method' => 'POST',
                        'content' => http_build_query($params),
                    ],
                ];

                $context = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                //d($result);
            }
        }
    }