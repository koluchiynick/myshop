<?php
/*
 *
 * Основные функции
 *
 *
 */


/**
 * Формирование запрашиваемой страницы
 * @param string $smarty
 * @param string $controllerName название контролера
 * @param string $actionName название функции обработки страницы
 */
function loadPage ($smarty, $controllerName, $actionName = 'index'){
    //подключаем контролер
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';

    $function($smarty);

}

/**
 * Загрузка шаблона
 * @param object $smarty объект шаблонизатора
 * @param string $templateName назавание файла шаблона
 */
function loadTemplate($smarty, $templateName){
    $smarty->display($templateName . TemplatePostfix);
}