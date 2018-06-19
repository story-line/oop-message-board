<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/15
 * Time: 10:56
 */
namespace Controller\Admin;
use Controller;
class Picture extends Controller
{
    public function picture_list()
    {
        $this->display('Admin/picture/picture_list');
    }

    public function picture_add()
    {
        $this->display('Admin/picture/picture_add');
    }

    public function picture_show()
    {
        $this->display('Admin/picture/picture_show');
    }
}