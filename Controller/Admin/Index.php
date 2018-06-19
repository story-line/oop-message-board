<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/15
 * Time: 8:51
 */

namespace Controller\Admin;

use Controller;

class Index extends Controller
{
    public function index()
    {
        $this->display('Admin/index/index');
    }

    public function welcome()
    {
        $this->display('Admin/index/welcome');
    }
}