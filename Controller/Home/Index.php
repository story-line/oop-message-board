<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/14
 * Time: 14:30
 */

namespace Controller\Home;

use Controller;

class Index extends Controller
{
    public function index()
    {
        $this->display('Home/index/index');
    }

    public function search()
    {
        $this->display('Home/index/search');
    }
}