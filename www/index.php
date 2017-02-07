<?php

include_once '../config/config.php'; //иницилизация настроек
include_once '../library/mainFunction.php'; //Основные функции


//определяем с каким контролером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

//определяем с какой функций будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($controllerName, $actionName);

