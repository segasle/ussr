<?php
global $title;
if (basename($_SERVER['REQUEST_URI']) == '?page=main') {
    $title = 'Сайт посвящается моему прапрадеду Черяпкину Иосифу Григорьевичу - Герою Советского Союза';
}
if (basename($_SERVER['REQUEST_URI']) == '?page=bio') {
    $title = 'Биография';
}
if (basename($_SERVER['REQUEST_URI']) == '?page=fatheeland') {
    $title = 'Служба Отечеству';
}
if (basename($_SERVER['REQUEST_URI']) == '?page=rewards') {
    $title = 'Награды || Из наградного листа на присвоение звания Героя Советского Союза:';
}
if (basename($_SERVER['REQUEST_URI']) == '?page=wounds') {
    $title = 'Ранения';
}
if (basename($_SERVER['REQUEST_URI']) == '?page=photo') {
    $title = 'Фото галерея';
}
if (basename($_SERVER['REQUEST_URI']) == '?page=book') {
    $title = 'Из книги Д.Н.Егорова «Июнь 1941. Разгром Западного фронта»';
}
if (basename($_SERVER['REQUEST_URI']) == '') {
    $title = 'Сайт посвящается моему прапрадеду Черяпкину Иосифу Григорьевичу - Герою Советского Союза';
}