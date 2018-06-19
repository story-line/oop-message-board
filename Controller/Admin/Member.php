<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/15
 * Time: 10:13
 */
namespace Controller\Admin;
use Controller;
class Member extends Controller
{
    public function list()
    {
        $this->display('Admin/member/list');
    }

    public function del()
    {
        $this->display('Admin/member/del');
    }

    public function record_browse()
    {
        $this->display('Admin/member/record_browse');
    }

    public function record_download()
    {
        $this->display('Admin/member/record_download');
    }

    public function record_share()
    {
        $this->display('Admin/member/record_share');
    }
}