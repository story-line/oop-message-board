<?php

/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/9
 * Time: 9:27
 */
class Controller
{
    public $array;
    public $key;
    public $val;

    public function assign($key, $val)
    {
        if (array($val)) {
            $this->array["$key"] = $val;
        } else {
            $this->array["$key"] = compact($val);
        }
    }

    public function display($tpl)
    {
        $this->assign($this->key, $this->val);
        extract($this->array);
        $tpl = './View/' . $tpl . '.html';
        if (file_exists($tpl)) { //模板存在就加载文件。
            include $tpl;
        }
    }
}