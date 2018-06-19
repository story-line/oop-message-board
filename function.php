<?php

define('IS_GET', $_SERVER['REQUEST_METHOD'] == 'GET' ? true : false);
define('IS_POST', $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false);

function C($key)
{
    global $config;
    return $config[$key];
}

function __autoload($class_name)
{
    include('./' . $class_name . '.php');
}

function url($controller, $action, $param = [])
{
    $url = APP_HOST . '/index.php?controller=' . $controller . '&action=' . $action;
    if ($param) {
        foreach ($param as $key => $value) {
            $url.= '&' .$key . '=' .$value;
        }
    }
    return $url;
}

function redirect($url)
{
    header('Location:'.$url);
}

function getImg($imgSrc)
{
    return APP_HOST .'/public/img/' .$imgSrc;
}

function getCss($cssSrc)
{
    return APP_HOST .'/public/css/' .$cssSrc;
}

function getJs($jsSrc)
{
    return APP_HOST .'/public/js/' .$jsSrc;
}