<?php

/*
 * Класс для генерации постраничной навигации
 */

class Pagination
{

    /**
     * 
     * @var Ссылок навигации на страницу
     * 
     */
    private $max = 10;

    /**
     * 
     * @var Ключ для GET, в который пишется номер страницы
     * 
     */
    private $index = 'page';

    /**
     * 
     * @var Текущая страница
     * 
     */
    private $current_page;

    /**
     * 
     * @var Общее количество записей
     * 
     */
    private $total;

    /**
     * 
     * @var Записей на страницу
     * 
     */
    private $limit;

    /**
     * Запуск необходимых данных для навигации
     * @param integer $total - общее количество записей
     * @param integer $limit - количество записей на страницу
     * 
     * @return
     */
    public function __construct($total, $currentPage, $limit, $index)
    {
        # Устанавливаем общее количество записей
        $this->total = $total;

        # Устанавливаем количество записей на страницу
        $this->limit = $limit;

        # Устанавливаем ключ в url
        $this->index = $index;

        # Устанавливаем количество страниц
        $this->amount = $this->amount(); // = 2
    //    echo $this->amount;

        # Устанавливаем номер текущей страницы
        $this->setCurrentPage($currentPage); // равно тому что в page-2 ответ 2
        //echo $this->current_page;
    }

    /**
     *  Для вывода ссылок
     * 
     * @return HTML-код со ссылками навигации
     */
    public function get()
    {
        # Для записи ссылок
        $links = null;

        # Получаем ограничения для цикла
        $limits = $this->limits(); //это массив стартовая страница и последняя
        // $start = 1, $end = 2 если page-2
        //print_r($limits);
        $html = '<ul class="clearfix">';
        # Генерируем ссылки
         // цикл от первой страницы до последней
        for ($page = $limits[0]; $page <= $limits[1]; $page++) {
            # Если текущая это текущая страница, ссылки нет и добавляется класс active
            if ($page == $this->current_page) {
                $links .= '<li class="active"><a href="#">' . $page . '</a></li>';
            } else {
                # Иначе генерируем ссылку
                $links .= $this->generateHtml($page);
            }
        }

        # Если ссылки создались
        if (!is_null($links)) {
            # Если текущая страница не первая
            if ($this->current_page > 1)
            # Создаём ссылку "На первую"
                $links = $this->generateHtml(1, '&lt;') . $links;

            # Если текущая страница не первая
            if ($this->current_page < $this->amount)
            # Создаём ссылку "На последнюю"
                $links .= $this->generateHtml($this->amount, '&gt;');
        }

        $html .= $links . '</ul>';

        # Возвращаем html
        return $html;
    }

    /**
     * Для генерации HTML-кода ссылки
     * @param integer $page - номер страницы
     * 
     * @return
     */
    private function generateHtml($page, $text = null)
    {
        # Если текст ссылки не указан
        if (!$text)
        # Указываем, что текст - цифра страницы
            $text = $page;

        $currentURI = rtrim($_SERVER['REQUEST_URI'], '/') . '/';
        $currentURI = preg_replace('~/page-[0-9]+~', '', $currentURI);
        # Формируем HTML код ссылки и возвращаем
        return
                '<li><a href="' . $currentURI . $this->index . $page . '">' . $text . '</a></li>';
    }

    /**
     *  Для получения, откуда стартовать
     * 
     * @return массив с началом и концом отсчёта
     */
    private function limits()
    {
        # Вычисляем ссылки слева (чтобы активная ссылка была посередине)
        $left = $this->current_page - round($this->max / 2);
      //  echo $left; -3 если page-2
        # Вычисляем начало отсчёта
        $start = $left > 0 ? $left : 1;
      //  echo $start ; 1 если page-2

        # Если впереди есть как минимум $this->max страниц
        if ($start + $this->max <= $this->amount)
        # Назначаем конец цикла вперёд на $this->max страниц или просто на минимум
            $end = $start > 1 ? $start + $this->max : $this->max;
        else {
            # Конец - общее количество страниц
            $end = $this->amount;
            // end = 2 если page-2
            # Начало - минус $this->max от конца
            $start = $this->amount - $this->max > 0 ? $this->amount - $this->max : 1;
            // $start = 2 
        }

        # Возвращаем
        return
                array($start, $end);
    }

    /**
     * Для установки текущей страницы
     * 
     * @return
     */
    private function setCurrentPage($currentPage)
    {
        # Получаем номер страницы
        $this->current_page = $currentPage;

        # Если текущая страница боле нуля
        if ($this->current_page > 0) {
            # Если текунщая страница меньше общего количества страниц
            if ($this->current_page > $this->amount)
            # Устанавливаем страницу на последнюю
                $this->current_page = $this->amount;
        } else
        # Устанавливаем страницу на первую
            $this->current_page = 1;
    }

    /**
     * Для получеия общего числа страниц
     * 
     * @return число страниц
     */
    private function amount()
    {
        # Делим и возвращаем
        return round($this->total / $this->limit);
    }

}
