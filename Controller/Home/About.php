<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/14
 * Time: 19:55
 */
namespace Controller\Home;
use Controller;
class About extends Controller
{
    public function index()
    {
        $this->display('Home/about/index');
    }
}