<?php

/**
 * Соединение с БД
 */
class Db {
    
    public static function getConnection(){
        
        $dsn = 'mysql:host=localhost;dbname=example';
        
        try{
            $pdo = new PDO($dsn, 'root', '');
            return $pdo;
        } catch (PDOException $ex) {
            exit($ex->getMessage());
        }
    }
}
