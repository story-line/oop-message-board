<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/8
 * Time: 8:46
 */
header("content-type:text.html;charset=utf8");
$id = $_GET['id'];
require "db.class.php";
require "msg.class.php";
$db = db::GetInstance();
$pdo = $db->connect_db('test');
$msg = new msg();
$data = $msg->del($pdo, 'messageboard', $id);
if ($data == 1) {
    echo "<script>alert('删除成功');location.href='show.php'</script>";
} else {
    echo "<script>alert('删除失败');location.href='show.php'</script>";
}