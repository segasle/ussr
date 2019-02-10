<h1 class="text-center">Биография</h1>
<?php
$elements = array(
    array(
        'img' => 'photo/great-grandfather.jpg',
        'alt' => 'Молодой Черяпкин Иосиф Григорьевич',
    ),
    array(
        'img' => 'photo/img_2990.jpg',
        'alt' => 'Подлоник Черяпкин Иосиф Григорьевич',
    ),
    array(
        'img' => 'photo/main.jpg',
        'alt' => 'В возрасте Черяпкин Иосиф Григорьевич',
    ),
);
$out = '<div class="row">';

foreach ($elements as $element){
    $out .= '<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><img class="photo" src="'.$element['img'].'" alt="'.$element['alt'].'"></div>';
}
$out .= '</div>';
echo $out;
?>
<h2>Черяпкин Иосиф Григорьевич</h2>
<?php
$elements = array(
        array(
                'info' => array(
                        array(
                            'fio' => 'Черяпкин Иосиф Григорьевич',
                            'data' => '12.11.1905 - 06.12.1995',
                        ),

                ),
                'end' => array(
                        array(
                                'text' =>  'Скончался 6 декабря 1995 года. ',
                        ),
                        array(
                                'text' =>  'Похоронен в колумбарии Крематория в Санкт-Петербурге',
                        ),
                        array(
                                'images' => array(
                                        array(
                                                'src' => 'photo/img_2991.jpg',
                                        ),
                                ),
                        ),
                ),
                'description' => array(
                        array(
                            'text' => 'Черяпкин И. Г. родился в селе Старые Верхиссы в Мордовии 12 ноября 1905 года. В 1921 году переехал в посёлок Потравный Иссинского района Пензенской области. Позже учился в пензенской совпартшколе.',
                        ),
                        array(
                            'text' => 'В РККА с 1925 года. Участник боёв на КВЖД (Дальный Восток) в 1929 году, похода на Западную Украину и в Западную Белоруссию в 1939 году. На фронтах Великой Отечественной войны с июня 1941 года.',
                        ),
                        array(
                                'text' => 'На фронтах Великой Отечественной войны с июня 1941 года. ',
                        ),
                        array(
                                'text' => 'Командир 50-й танковой бригады (9-й гваврдейский танковый корпус, 2-я гвардейская танковая армия, Первый Белорусский фронт). ',
                        ),
                        array(
                                'text' => 'Полковник Черяпкин И. Г. отличился в боях за пригороды Варшавы. С 16 по 25 января 1945 года бригада под его началом, действуя в качестве передового отряда, уничтожила до 3-х батальонов пехоты врага (около 2000 человек).',
                        ),
                        array(
                                'text' => 'Звание Героя присвоено 6 апреля 1945 года. ',
                        ),
                        array(
                                'text' => 'Награждён 8-ю орденами. ',
                        ),
                        array(
                                'text' => ' После окончания войны И.Г.Черяпкин продолжал службу в Советской Армии. ',
                        ),
                        array(
                                'text' => 'В 1948 году окончил курсы усовершенствования офицерского состава. ',
                        ),
                        array(
                                'text' => 'С 1954 года полковник И.Г.Черяпкин – в запасе. ',
                        ),
                        array(
                                'text' => 'Жил в Санкт-Петербурге.',
                        ),
                ),
        ),
);
foreach ($elements as $element=>$valus){
    $outo = '<div class="description">';
    $outop = '<div class="description">';
        foreach ($valus['info'] as $elem){
            $outi = "<p>".$elem['data']."</p>"."<p>".$elem['fio']."</p>";
        }
        foreach ($valus['description'] as $elem){
            $outo .= "<p>".$elem['text']."</p>";
        }
        foreach ($valus['end'] as $elem){
            if (isset($elem['text'])){
                $outop .= "<p>".$elem['text']."</p>";
            }

            if (isset($elem['images'])){
                if (is_array($elem['images']) || is_object($elem['images'])){
                    foreach ($elem['images'] as $items){
                        $outop .= '<img src="'.$items['src'].'" class="photo">';
                    }
                }
            }

        }
        echo $outi;
    $outo .= '</div>';
    $outop .= '</div>';
    echo $outo;
    echo $outop;
}
