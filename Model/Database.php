<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/9
 * Time: 14:56
 */

namespace Model;

class Database
{
    private static $instance;

    private function __construct()
    {

    }

    private function __clone()
    {

    }

    public static function GetInstance()
    {
        if (self::$instance == '') {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function connect_db()
    {
        $db = C('db');
        return new \PDO('mysql:host=' . $db['host'] .';dbname=' . $db['db_name'] . ';', $db['user'], $db['pass']);
    }

}