<?php
/*
 * Файл настроек
 */



//>константы для обращения к контролерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');
//<
//> используем шаблонизатор Smarty
$template = 'default';

//путь к файлам шаблонов (*.tpl)
define('TemplatePrefix', "../views/{$template}/");
define('TemplatePostfix', '.tpl');

//путь к файлам шаблонов в вебпространстве
define('TemplateWebPath', "/templates/{$template}/");
//<

//> Инициализация шаблонизатора Smarty
//put full path to Smarty.class.php
require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);
//<