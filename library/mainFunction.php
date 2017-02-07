<?php

function loadPage ($controllerName, $actionName = 'index'){
    //подключаем контролер
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';

    $function();

}
