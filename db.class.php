<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/6
 * Time: 11:34
 */
header("content-type:text/html;charset=utf8");


class db
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
            self::$instance = new db();
        }
        return self::$instance;
    }

    public function connect_db($db_name)
    {
        return new \PDO('mysql:host=127.0.0.1;dbname=' . $db_name . ';', 'root', 'root');
    }

}