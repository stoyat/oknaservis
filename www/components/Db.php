<?php
/**
 * Класс Db
 * Компонент для работы с базой данных
 */
class Db {

    public  function getConnection() {   
        // Получаем параметры подключения 
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);
        
        // Устанавливаем соединение
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        
        // Кодировка
        $db->exec("set names utf8");
        return $db;
    }
}

