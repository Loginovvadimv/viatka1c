<?php

/**
 * Изменяет хлебные крошки Yoast.
 *
 * Вывести в шаблоне: do_action('pretty_breadcrumb');
 *
 */
class Pretty_Breadcrumb {

    /**
     * Какую позицию занимает элемент в цепочке хлебных крошек.
     *
     * @var int
     */
    private $el_position = 0;

    public function __construct() {
        add_action( 'pretty_breadcrumb', [ $this, 'render' ] );
    }

    /**
     * Выводит на экран сгенерированные крошки.
     *
     * @return void
     */
    public function render() {
        if ( ! function_exists( 'yoast_breadcrumb' ) ) {
            return;
        }

        // Регистрируем фильтры для изменения дефолтной вёрстки крошек
        add_filter( 'wpseo_breadcrumb_single_link', [ $this, 'modify_yoast_items' ], 10, 2 );
        add_filter( 'wpseo_breadcrumb_output', [ $this, 'modify_yoast_output' ] );
        add_filter( 'wpseo_breadcrumb_output_wrapper', [ $this, 'modify_yoast_wrapper' ] );
        add_filter( 'wpseo_breadcrumb_separator', '__return_empty_string' );

        // Выводим крошки на экран
        yoast_breadcrumb();

        // Отключаем фильтры
        remove_filter( 'wpseo_breadcrumb_single_link', [ $this, 'modify_yoast_items' ] );
        remove_filter( 'wpseo_breadcrumb_output', [ $this, 'modify_yoast_output' ] );
        remove_filter( 'wpseo_breadcrumb_output_wrapper', [ $this, 'modify_yoast_wrapper' ] );
        remove_filter( 'wpseo_breadcrumb_separator', '__return_empty_string' );

        // Обнуляем счётчик
        $this->el_position = 0;
    }

    /**
     * Изменяет html код li элементов.
     *
     * @param string $link_html Дефолтная вёрстка элемента хлебных крошек.
     * @param array  $link_data Массив данных об элементе хлебных крошек.
     *
     * @return string
     */
    function modify_yoast_items( $link_html, $link_data ) {
        // Шаблон контейнера li
        $li = '<li itemprop="itemListElement" class="shablon__breadcrumbLi" itemscope="itemscope" itemtype="https://schema.org/ListItem" %s>%s</li>';

        // Содержимое li в зависимости от позиции элемента
        if ( strpos( $link_html, 'breadcrumb_last' ) === false ) {
            $li_inner = sprintf( '
                <a itemprop="item" href="%s" class="pathway">
                    <span itemprop="name">%s</span>
                </a>
            ', $link_data['url'], $link_data['text'] );
            $li_inner .= '<svg width="16.000000" height="16.000000" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<defs/>
	<rect id="Icons" width="16.000000" height="16.000000" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 16 16)" fill="#FFFFFF" fill-opacity="0"/>
	<path id="Path" d="M6.78125 2.37466L10.7812 7.37466C11.0723 7.74001 11.0723 8.25934 10.7812 8.62466L6.78125 13.6247C6.43555 14.056 5.80664 14.1259 5.375 13.7807C4.94336 13.4355 4.87305 12.806 5.21875 12.3747L8.71875 7.99966L5.21875 3.62466C4.87305 3.19333 4.94336 2.56384 5.375 2.21867C5.80664 1.87349 6.43555 1.94333 6.78125 2.37466Z" fill="#888888" fill-opacity="1.000000" fill-rule="evenodd"/>
</svg>';
            $li_class = '';
        } else {
            $li_inner = sprintf( '<span itemprop="name" class="shablon__breadСrumbsName">%s</span>', $link_data['text'] );
            $li_class = 'class="active"';
        }

        $li_inner .= sprintf( '<meta itemprop="position" content="%d"/>', ++ $this->el_position );

        // Вкладываем сформированное содержание в li и возвращаем полученный элемент хлебных крошек.
        return sprintf( $li, $li_class, $li_inner );
    }

    /**
     * Возвращает псевдо wrapper, который в будущем будет вырезан из вёрстки.
     * Если этого не сделать, то будущие li будут обёртнуты в единый span Yoast'ом.
     *
     * @return string
     */
    function modify_yoast_wrapper() {
        return 'wrapper'; // Будущий "уникальный" тег для вырезки из html
    }

    /**
     * Изменяет дефолтный html код крошек Yoast.
     *
     * @param string $html
     *
     * @return string
     */
    function modify_yoast_output( $html ) {
        // Убираем псевдо wrapper
        $html = str_replace( [ '<wrapper>', '</wrapper>' ], '', $html );

        // Формируем контейнер для li элементов
        $ul = '<ul itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList" class="shablon__breadcrumbUl">%s</ul>';

        // Вставляем в контейнер li элменты
        $html = sprintf( $ul, $html );

        return $html;
    }
}

new Pretty_Breadcrumb();

?>