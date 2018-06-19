<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/9
 * Time: 9:21
 */

namespace Controller\Admin;

use Controller;
use Model\Database;

class User extends Controller
{
    public $pdo;

    public function __construct()
    {
        $db = Database::GetInstance();
        $this->pdo = $db->connect_db();
    }

    public function login()
    {
        $this->display('Admin/User/login');
    }

    public function DoLogin()
    {
        $username = $_POST['name'];
        $password = $_POST['password'];
        $sql = "select * from user where name='$username'";
        $data = $this->pdo->query($sql)->fetchAll();
        $arr = [];
        foreach ($data as $key=>$value) {
            $arr['name'] = $data[$key]['name'];
            $arr['password'] = $data[$key]['password'];
        }
//        var_dump($arr);die;
        if ($arr) {
            if($arr['password'] == $password){
                echo "<script>alert('登录成功');location.href='index.php?controller=index&&action=index'</script>";
            }else{
                echo "<script>alert('登录失败,密码错误');location.href='index.php?controller=user&&action=login'</script>";
            }
        }else{
            echo "<script>alert('登录失败,用户名不存在');location.href='index.php?controller=user&&action=login'</script>";
        }
    }

    public function register()
    {
        echo 'this is register action';
    }
}