<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/14
 * Time: 15:35
 */

namespace Controller\Home;

use Controller;

class Ganhuo extends Controller
{
    public function index()
    {
        $this->display('Home/ganhuo/index');
    }
}