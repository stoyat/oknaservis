<?php
//отображение шибок
error_reporting(E_ALL);
//константа с путем к файлам
define("ROOT", dirname(__FILE__));
//подключаем автозагрузку классов
include_once (ROOT.'/components/Autoload.php');
//
$define = new Routes();
$define->run();