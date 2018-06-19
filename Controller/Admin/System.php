<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/15
 * Time: 9:53
 */
namespace Controller\Admin;
use Controller;
class System extends Controller
{
    public function log()
    {
        $this->display('Admin/system/log');
    }

    public function shielding()
    {
        $this->display('Admin/system/shielding');
    }

    public function data()
    {
        $this->display('Admin/system/data');
    }

    public function category()
    {
        $this->display('Admin/system/category');
    }

    public function categoryadd()
    {
        $this->display('Admin/system/categoryadd');
    }

    public function base()
    {
        $this->display('Admin/system/base');
    }
}