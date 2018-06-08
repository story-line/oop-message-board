<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/7
 * Time: 8:52
 */
header("content-type:text/html;charset=utf8");
require "db.class.php";
require "user.class.php";
$arr = $_POST;
$db = db::GetInstance();
$pdo = $db->connect_db('test');
$user = new user();
$data = $user->register($pdo, 'user', $arr);
//var_dump($data);die;
if ($data == 1) {
    echo "<script>alert('注册成功,请登录！');location.href='login.html'</script>";
} else {
    echo "<script>alert('对不起注册失败，请重新注册');location.href='register.html'</script>";
}