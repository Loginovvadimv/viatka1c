<?php

class Pagination {
    static function getNext($args) {
        $defaults = [
            'pages'            => '',
            'paged'            => '',
        ];

        $args = wp_parse_args( $args, $defaults );

        if ( !$args[ 'paged' ] ) {
            global $paged;
            if ( empty( $paged ) ) $paged = 1;
        } else {
            $paged = $args[ 'paged' ];
        }

        if ( !$args[ 'pages' ] ) {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if ( !$pages ) {
                $pages = 1;
            }
        } else {
            $pages = $args[ 'pages' ];
        }

        $button = '';

        if ( $paged < $pages ) {
            $button = '<button data-next="' . ($paged + 1) . '" class="btn btn-5 catalog-next">
                            Следующая
                            <img src="' . ASSETS . '/images/icons/arrow-next.svg" alt="">
                        </button>';

        } else {
            $button = null;
        }

        return $button;
    }

    static function create($args) {
        $defaults = [
            'pages'            => '',
            'range'            => 7,
            'paged'            => '',
            'heading_text'     => '',
            'main_class'       => 'pagination',
            'additional_class' => '',
            'prev_text'        => '',
            'next_text'        => '',
        ];

        $pagination = '';

        $args = wp_parse_args( $args, $defaults );

        $showitems = ( $args[ 'range' ] * 2 ) + 1;

        if ( !$args[ 'paged' ] ) {
            global $paged;
            if ( empty( $paged ) ) $paged = 1;
        } else {
            $paged = $args[ 'paged' ];
        }

        if ( !$args[ 'pages' ] ) {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if ( !$pages ) {
                $pages = 1;
            }
        } else {
            $pages = $args[ 'pages' ];
        }

        if (isset($_GET['pag'])) {
            unset($_GET['pag']);
        }

        $pagination .= '<div class="pagination">';
        $pagination .= '<ul>';

        if ( 1 !== $pages ) {
            if ( $paged > 1 ) {
                $pagination .= sprintf( '<li class="%s__item %s__item--prev pagination__prev"><a href="%s" class="%s__link" data-paged="%d"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.7807 3.62469L7.28067 7.99969L10.7807 12.3747C11.004 12.6537 11.0614 13.0307 10.9314 13.3636C10.8014 13.6964 10.5037 13.9347 10.1504 13.9886C9.79715 14.0424 9.44196 13.9037 9.21867 13.6247L5.21867 8.62469C4.92617 8.25935 4.92617 7.74002 5.21867 7.37469L9.21867 2.37469C9.56385 1.94335 10.1933 1.87351 10.6247 2.21869C11.056 2.56386 11.1258 3.19335 10.7807 3.62469Z" fill="#121212"/></svg></a></li>', $args[ 'main_class' ], $args[ 'main_class' ], '?' . http_build_query($_GET) . (!empty($_GET) ? '&' : '') . 'pag=' . ($paged - 1), $args[ 'main_class' ], ( $paged - 1 ), $args[ 'prev_text' ] );
            }

            if ( $paged > 2 && $paged > $args[ 'range' ] + 1 && $showitems < $pages ) {
                $pagination .= sprintf( '<li class="%s__item"><a href="%s" class="%s__link" data-paged="1">1</a></li>', $args[ 'main_class' ], '?pag=1', $args[ 'main_class' ] );
            }

            if ( $paged > 2 && $paged > $args[ 'range' ] + 2 && $showitems < $pages ) {
                $pagination .= sprintf( '<li class="%s__item"><span class="%s__dots">...</span></li>', $args[ 'main_class' ], $args[ 'main_class' ] );
            }

            for ( $i = 1; $i <= $pages; $i++ ) {
                if ( 1 != $pages && ( !( $i >= $paged + $args[ 'range' ] + 1 || $i <= $paged - $args[ 'range' ] - 1 ) || $pages <= $showitems ) ) {
                    if ( $paged == $i ) {
                        $pagination .= sprintf( '<li class="%s__item pagination__item-active"><span class="%s__current">%d</span></li>', $args[ 'main_class' ], $args[ 'main_class' ], $i );
                    } else {
                        $pagination .= sprintf( '<li class="%s__item"><a href="%s" class="%s__link" data-paged="%d">%d</a></li>', $args[ 'main_class' ], '?' . http_build_query($_GET) . (!empty($_GET) ? '&' : '') . 'pag=' . $i, $args[ 'main_class' ], $i, $i );
                    }
                }
            }

            if ( ( $paged < $pages - 1 ) && ( ( $paged + $args[ 'range' ] + 1 ) < $pages ) && $showitems < $pages ) {
                $pagination .= sprintf( '<li class="%s__item"><span class="%s__dots">...</span></li>', $args[ 'main_class' ], $args[ 'main_class' ] );
            }

            if ( ( $paged < $pages - 1 ) && ( ( $paged + $args[ 'range' ] ) < $pages ) && $showitems < $pages ) {
                $pagination .= sprintf( '<li class="%s__item"><a href="%s" class="%s__link" data-paged="%d">%d</a></li>', $args[ 'main_class' ], '?pag=' . $pages, $args[ 'main_class' ], $pages, $pages );
            }

            if ( $paged < $pages ) {
                $pagination .= sprintf( '<li class="%s__item %s__item--next pagination__next"><a href="%s" class="%s__link" data-paged="%d"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.21933 3.62469L8.71933 7.99969L5.21933 12.3747C4.99604 12.6537 4.93857 13.0307 5.06856 13.3636C5.19856 13.6964 5.49628 13.9347 5.84956 13.9886C6.20285 14.0424 6.55804 13.9037 6.78133 13.6247L10.7813 8.62469C11.0738 8.25935 11.0738 7.74002 10.7813 7.37469L6.78133 2.37469C6.43615 1.94335 5.80666 1.87351 5.37533 2.21869C4.94399 2.56386 4.87415 3.19335 5.21933 3.62469V3.62469Z" fill="#121212"/></svg></a></li>', $args[ 'main_class' ], $args[ 'main_class' ], '?' . http_build_query($_GET) . (!empty($_GET) ? '&' : '') . 'pag=' . ($paged + 1), $args[ 'main_class' ], ( $paged + 1 ), $args[ 'next_text' ] );
            }
        }

        $pagination .= '</ul>';
        $pagination .= '</div>';

        return $pagination;
    }
}