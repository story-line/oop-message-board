<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/7
 * Time: 8:57
 */
require "db.class.php";
require "msg.class.php";
$db = db::GetInstance();
$pdo = $db->connect_db('test');
$msg = new msg();
$data = $msg->findAll($pdo, 'messageboard');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
    <form action="add.php" method="post">
        <table border="1">
            <tr>
                <td>标题</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td>作者</td>
                <td><input type="text" name="author"></td>
            </tr>
            <tr>
                <td>内容</td>
                <td><input type="text" name="message"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="添加留言">
                </td>
            </tr>
        </table>
    </form>
</center>
<center>
    <table border="1">
        <tr>
            <td>标题</td>
            <td>作者</td>
            <td>内容</td>
            <td>操作</td>
        </tr>
        <?php foreach ($data as $key => $value) { ?>
            <tr>
                <td><?= $value['title'] ?></td>
                <td><?= $value['author'] ?></td>
                <td><?= $value['message'] ?></td>
                <td><a href="del.php?id=<?= $value['id'] ?>">删除</a></td>
            </tr>
        <?php } ?>
    </table>
</center>
</body>
</html>
