<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/14
 * Time: 20:03
 */

namespace Controller\Home;

use Controller;

class Duanzi extends Controller
{
    public function index()
    {
        $this->display('Home/duanzi/index');
    }
}