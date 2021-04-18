<?php

class TableDataGateway
{
    // подключаем pdo
    public function connectPDO(): PDO
    {
        $host = '127.0.0.1';
        $db = 'database';
        $charset = 'utf8';
        $user = 'root';
        $pass = 'root';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        //массив опций
        $opt = [
            //вывод ошибок
            PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION,
            //Определяет, в каком виде следующая строка будет возвращена в вызывающий метод
            //возвращает массив, индексированный именами столбцов результирующего набора
            PDO::ATTR_DEFAULT_FETCH_MODE =>  PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);

        return $pdo;
    }

    public function requestOut($pdo)
    {
        $outPut = $pdo->query('SELECT FirstName, LastName, Groupp, Point FROM student');

        return $outPut;
    }
}