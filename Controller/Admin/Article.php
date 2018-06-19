<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/15
 * Time: 9:22
 */
namespace Controller\Admin;
use Controller;
class Article extends Controller
{
    public function articlelist()
    {
        $this->display('Admin/article/list');
    }
    public function articleadd()
    {
        $this->display('Admin/article/add');
    }

    public function articleadd_do()
    {
        var_dump($_POST);
    }
}