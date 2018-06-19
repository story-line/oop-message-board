<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/15
 * Time: 9:00
 */

namespace Controller\Admin;

use Controller;

class Admin extends Controller
{
    public function admin_list()
    {
        $this->display('Admin/admin/list');
    }

    public function admin_add()
    {
        $this->display('Admin/admin/add');
    }

    public function admin_permission()
    {
        $this->display('Admin/admin/permission');
    }

    public function admin_role()
    {
        $this->display('Admin/admin/role');
    }

    public function admin_role_add()
    {
        $this->display('Admin/admin/role_add');
    }
}