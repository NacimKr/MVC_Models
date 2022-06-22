<?php

abstract class Model{
    private static $pdo;

    protected function myPDO(){
        self::$pdo = new PDO('mysql:host=localhost;dbname=ma_table', "root", "");
        return self::$pdo;
    }
}