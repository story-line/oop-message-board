<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/15
 * Time: 10:34
 */
namespace Controller\Admin;
use Controller;
class Comment extends Controller
{
    public function feedback_list()
    {
        $this->display('Admin/comment/feedback_list');
    }
}