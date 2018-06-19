<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/15
 * Time: 10:38
 */
namespace Controller\Admin;
use Controller;
class Product extends Controller
{
    public function product_list()
    {
        $this->display('Admin/product/product_list');
    }

    public function product_add()
    {
        $this->display('Admin/product/product_add');
    }

    public function product_brand()
    {
        $this->display('Admin/product/product_brand');
    }

    public function product_category()
    {
        $this->display('Admin/product/product_category');
    }

    public function product_category_add()
    {
        $this->display('Admin/product/product_category_add');
    }
}