<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/6
 * Time: 20:06
 */
require "db.class.php";
require "user.class.php";
$name = $_POST['username'];
$pwd = $_POST['password'];
$db = db::GetInstance();
$pdo = $db->connect_db('test');
$user = new user();
$data = $user->login($pdo, $name, $pwd);
if ($data == 1) {
    echo "<script>alert('登录失败，用户名不存在');location.href='login.html'</script>";
} elseif ($data == 2) {
    echo "<script>alert('登录成功');location.href='show.php'</script>";
} else {
    echo "<script>alert('登录失败，密码错误');location.href='login.html'</script>";
}