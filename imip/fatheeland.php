<h1 class="text-center">Служба Отечеству</h1>
<?php
$elements = array(
    array(
        'description' => array(
            array(
              'text' => 'В РККА с 1925 года. Окончил 20-ю Саратовскую военную пехотную школу в 1928 году, Ульяновскую военную пехотную школу в 1931 году, бронетанковые курсы усовершенствования командного состава (КУКС) в 1938 году и академические курсы усовершенствования офицерского состава (КУОС) при Академии бронетанковых и механизированных войск в 1943 году. Участник боев с китайскими войсками на КВЖД в 1929 году, похода советских войск в Западную Украину и Западную Белоруссию в 1939 году. В этом походе был тяжело ранен.',
            ),
            array(
              'text' => 'Во время Великой Отечественной войны в действующей армии с 22 июня 1941 года. Сражался на Западном, Брянском, снова Западном, Крымском, 1-м Белорусском фронтах. Четырежды ранен. Особо отличился в ходе Варшавско-Познанской наступательной операции на территории Польши. 2-я гвардейская танковая армия, в том числе 9-й гвардейский танковый корпус, была введена в прорыв с Магнушевского плацдарма южнее Варшавы 16 января 1945 года в полосе 5-й ударной армии. Она наступала на северо-запад, обходя Варшаву, совершила стремительный бросок и у города Сохачев соединилась с войсками 2-го Белорусского фронта, отрезав Варшавскую группировку противника. 50-я гвардейская танковая бригада, которой командовал гвардии полковник И. Г. Черяпкин, во время этого рейда двигалась в передовом отряде корпуса, разгромив 3 батальона вражеской пехоты. При дальнейшем продвижении на северо-восток его бригада участвовала во взятии городов Гостынин, Влоцлавек, Лабишин, Накло, Бжесць-Куявски, Быдгощ, затем повернула на запад, преодолела Померанский вал, Мезеритцкий укрепленный район и 1 февраля вышла к Одеру, пройдя с боями за 14 дней более 500 километров и нанеся большие потери противнику в живой силе и технике. Указом Президиума Верховного Совета СССР от 6 апреля 1945 года за образцовое выполнение боевых заданий командования на фронте борьбы с немецкими захватчиками и проявленные при этом отвагу и геройство Черяпкину Иосифу Григорьевичу присвоено звание Героя Советского Союза с вручением ордена Ленина и медали "Золотая Звезда" (№ 7226). Участник боёв на КВЖД в 1929, участвовал в походе советских войск в Западную Украину и Западную Белоруссию в 1939. Был тяжело ранен.',
            ),
        ),
    )
);
$out = '';
foreach ($elements as $element=>$valus){
    foreach ($valus['description'] as $valu){
        $out .= '<div class="description"><p>'.$valu['text'].'</p></div>';
    }


}echo $out;