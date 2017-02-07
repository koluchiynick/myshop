<?php
/*
 *
 * Основные функции
 *
 *
 */


/**
 * Формирование запрашиваемой страницы
 * @param string $controllerName название контролера
 * @param string $actionName название функции обработки страницы
 */
function loadPage ($controllerName, $actionName = 'index'){
    //подключаем контролер
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';

    $function();

}
