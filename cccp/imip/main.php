<h1 class="text-center">Сайт посвящается моему прапрадеду Черяпкину Иосифу Григорьевичу - Герою Советского Союза</h1>
<div class="block-center">
    <img class="" src="photo/main.jpg">
</div>
<?php
$elements = array(
    array(
        'head' => 'Даты указов:',
        'description' => '06.04.1945',
    ),
    array(
        'head' => 'Медаль № 7226:',
        'description' => 'Орден Ленина № 38200',
    ),
);
$out = '<div class="description">';
foreach ($elements as $element){
    $out .= '<p><b class="text-block">'.$element['head'].'</b><b class="text-block">'.$element['description'].'</b></p>';
}
$out .= '</div>';
echo $out;