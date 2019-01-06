<?php
$elements = array(
    array(
        'header' => 'Фото галерея',
        'content' => array(
            array(
                'img' => 'photo/1.jpg',
                'text' => array(
                    array(
                        'li' => ' 13 х 18 см. На обороте: рукой Черяпкина (как и на всех остальных фото) надпись - "Черяпкин Иосиф Григорьевич ком-дир бригады 1945" ',
                    ),
                    array(
                        'li' => '12 х 8,5 см. На обороте: "Черяпкин Иосиф Григорьевич 1945" ',
                    ),
                    array(
                        'li' => '12 х 9 см. На обороте: ',
                        'sup' => array(
                            array(
                                'number' => 'Ком-дир 1 гв Т.П. 1 гв.ТБр Черяпкин Иосиф Григорьевич / Коммисар полка Комлов Яков Яковлевич / Кирик Григорий Тимофеевич; ',
                            ),
                            array(
                                'number' => 'Шофер / Представитель ставки / Инженер полка / XII.1941 г. ст.Крюково Моск. обл.',
                            ),
                        ),
                    ),
                    array(
                        'li' => '14 х 9 см. На обороте: "Черяпкин И.Г. Совпартшкола 1924 г.',
                    ),
                ),
            ),
            array(
                'img' => 'photo/2.jpg',
                'text' => array(
                    array(
                        'li' => '17,7 х 11,4 см. На обороте: "Черяпкин Иосиф Григорьевич 1979 г."',
                    ),
                    array(
                        'li' => ' 11,6 х 8,7 см. На обороте: "Капитан Черяпкин Иосиф Григорьевич 1937 г"',
                    ),
                    array(
                        'li' => '13,7 х 8,9 см. На обороте: "1925 г Черяпкин Иосиф Григорьевич курсант 20-ой Саратовской пехотной школы "',
                    ),
                ),
            ),
        ),
        'images' => array(
            array(
                'src' => 'photo/image013.jpg',
            ),
            array(
                'src' => 'photo/image004.jpg',
            ),
            array(
                'src' => 'photo/image012.jpg',
            ),
        ),
    ),
);
$content = '<div class="description"><div class="row">';
$images = '<div class="description"><div class="row">';
$ul = '<ul>';
foreach ($elements as $element) {
    $out = '<h1 class="text-center">' . $element['header'] . '</h1>';
    foreach ($element['content'] as $item) {
        $content .= '<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><img src="' . $item['img'] . '" alt="" class="photo">';
        foreach ($item['text'] as $value) {
            $ul .= '<li>' . $value['li'] . '<li>';

        }
        $content .= $ul . '</ul></div>';
    }
    foreach ($element['images'] as $item) {
        $images .= '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"><img src="' . $item['src'] . '" alt="" class="photo"></div>';
    }
}
$content .= '</div></div>';
$images .= '</div></div>';
echo $out;
echo $content;
echo $images;