<?php

/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/6
 * Time: 9:05
 */

class user
{
    public function login($pdo,$name,$pwd)
    {
        $sql = "select * from user where name = '$name'";
        $data = $pdo->query($sql)->fetchAll();
        $arr = array();
        foreach ($data as $key => $value) {
            $arr['name'] = $data[$key]['name'];
            $arr['password'] = $data[$key]['password'];
        }
        if($arr == null){
            return 1;
        }elseif($arr['password'] == $pwd){
            return 2;
        }else{
            return 3;
        }
    }
    public function register($pdo,$name,$pwd)
    {
        $sql ="insert into user(`name`,`password`) values('$name','$pwd')";
        $res = $pdo->exec($sql);
        return $res;
    }
}
