<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/8
 * Time: 8:49
 */
header("content-type:text.html;charset=utf8");
require "db.class.php";
require "msg.class.php";
$db = db::GetInstance();
$pdo = $db->connect_db('test');
$msg = new msg();
$title = $_POST['title'];
$author = $_POST['author'];
$message = $_POST['message'];
$data = $msg->add($pdo,$title,$author,$message);
if($data == 1){
    echo "<script>alert('添加留言成功');location.href='show.php'</script>";
}else{
    echo "<script>alert('添加留言失败');location.href='show.php'</script>";
}