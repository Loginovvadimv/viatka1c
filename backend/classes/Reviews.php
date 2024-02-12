<?php

    class Reviews {
        public function __construct() {
            $this->registerAdminPage();
            $this->setHandlers();
        }

        function setHandlers() {
            add_action('wp_ajax_vkreviews_update', [$this, 'updateVKReviews']);
            add_action('wp_ajax_nopriv_vkreviews_update', [$this, 'updateVKReviews']);

            add_action('wp_ajax_add_review', [$this, 'addReview']);
            add_action('wp_ajax_nopriv_add_review', [$this, 'addReview']);
        }


        function registerAdminPage()
        {
            add_action('acf/init', function () {
                if (function_exists('acf_add_options_page')) {
                    acf_add_options_page(array(
                        'page_title' => 'Отзывы',
                        'menu_title' => 'Отзывы',
                        'menu_slug' => 'feedback-settings',
                        'capability' => 'edit_posts',
                        'icon_url'  => 'dashicons-format-status',
                        'redirect' => false
                    ));
                }
            });
        }

        static function updateVKReviews() {
            $access_token = '9078c4449078c4449078c44426900fd9b4990789078c444f019b720ed5cc38595987820';
            $group_id = '34687056';
            $topic_id = '31455682';

            $request_params = [
                'group_id' => $group_id,
                'access_token' => $access_token,
                'topic_id' => $topic_id,
                'sort' => 'desc',
                'count' => 99,
                'extended' => 1,
                'lang' => 0,
                'v' => '5.131'
            ];

            $ch = curl_init();

            curl_setopt_array($ch, [
                CURLOPT_URL => 'https://api.vk.com/method/board.getComments',
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_POSTFIELDS => $request_params,
            ]);

            $result = curl_exec($ch);
            curl_close($ch);

            file_put_contents(ABSPATH . '/files/vk_reviews.json', $result);

            update_field('vkreviews-date', date('d-m-Y'), 'options');
        }


        static function getVKReviews($limit = null) {
            if (self::dateOverdue()) {
                self::updateVKReviews();
            }

            $reviews_raw = json_decode(file_get_contents(ABSPATH . '/files/vk_reviews.json'));

            # Остальные пользователи
            foreach ($reviews_raw->response->profiles as $item) {
                $user[$item->id]['name'] = $item->first_name . ' ' . $item->last_name;
                $user[$item->id]['photo'] = $item->photo_100;
            }

            foreach ($reviews_raw->response->items as $key => $item) {
                if (!self::isBlackList($item)) {

                    if (isset($limit) && $key > $limit) {
                        break;
                    }

                    if (isset($user[abs($item->from_id)])) {
                        $date = date('j', $item->date) . ' ' . Helper::getMonth(date('n', $item->date)) . ' ' . date('Y', $item->date);
                        $time = date('H:i', $item->date);
                        $images = [];

                        # Изображения
                        if (isset($item->attachments)) {
                            foreach ($item->attachments as $attachment) {
                                if ($attachment->type == 'photo') {
                                    $thumb = null;
                                    $large = null;
                                    $sizes = null;

                                    foreach ($attachment->photo->sizes as $size) {
                                        if ($size->type == 'o') {
                                            $thumb = $size->url;

                                            $sizes = parse_url($size->url);
                                            $sizes = parse_str($sizes['query'], $output);
                                            $sizes = explode('x', $output['size']);
                                            $sizes = [
                                                'w' => $sizes[0],
                                                'h' => $sizes[1]
                                            ];
                                        }

                                        if ($size->type == 'x') {
                                            $large = $size->url;
                                        }

                                        if ($size->type == 'w') {
                                            $large = $size->url;
                                        }
                                    }

                                    $images[] = [
                                        'thumb' => $thumb,
                                        'large' => $large,
                                        'sizes' => $sizes
                                    ];
                                }
                            }
                        } else {
                            $images = null;
                        }

                        $reviews[] = [
                            'id' => $item->from_id,
                            'name' => $user[abs($item->from_id)]['name'],
                            'image' => $user[abs($item->from_id)]['photo'],
                            'text' => htmlentities($item->text),
                            'except' => wp_trim_words(htmlentities($item->text), 20, '...'),
                            'date' => $date,
                            'time' => $time,
                            'link' => 'https://vk.com/topic-34687056_31455682?post=' . $item->id,
                            'images' => $images
                        ];
                    }
                }
            }

            return $reviews;
        }

        static function dateOverdue() {
            $now = new DateTime();
            $last_update = DateTime::createFromFormat("d-m-Y", date('d-m-Y', strtotime(get_field('vkreviews-date', 'options'))));

            $diff = $now->diff($last_update);

            if ($diff->d >= 1) {
                return true;
            } else {
                return false;
            }
        }

        static function isBlackList($item) {
            $in_blacklist = false;

            $blacklist = get_field('vkreviews-blacklist', 'options');
            $users_blacklist = $blacklist['vkreviews-blacklist-users'];
            $posts_blacklist = $blacklist['vkreviews-blacklist-ids'];


            if ($users_blacklist) {
                $search = array_search($item->from_id, array_column($users_blacklist, 'vkreviews-blacklist-user'));

                if (is_int($search) && $search >= 0) {
                    $in_blacklist = true;
                }
            }


            if ($posts_blacklist) {
                $search = array_search($item->id, array_column($posts_blacklist, 'vkreviews-blacklist-id'));

                if (is_int($search) && $search >= 0) {
                    $in_blacklist = true;
                }
            }

            return $in_blacklist;
        }



        static function getTemplate() {
            $data['vk_reviews'] = self::getVKReviews(19);
            if ($data['vk_reviews']) {
                return Helper::getTemplate('templates/feedback', $data);
            }
        }

    }

    new Reviews();
