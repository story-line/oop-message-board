<?php
/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/7
 * Time: 8:58
 */
class msg
{
    public function add($pdo,$title,$author,$message)
    {
        $c_time = time();
        $sql = "insert into messageboard(`title`,`author`,`message`,`c_time`) values('$title','$author','$message','$c_time')";
        $res = $pdo->exec($sql);
        return $res;
    }
    public function del($pdo,$id)
    {
        $sql = "delete from messageboard where id = '$id'";
        $res = $pdo->exec($sql);
        return $res;
    }

    public function findAll($pdo){
        $sql = "select * from messageboard";
        $data = $pdo->query($sql)->fetchAll();
        $arr = array();
        foreach ($data as $key=>$value) {
            $arr[$key]['title'] = $data[$key]['title'];
            $arr[$key]['author'] = $data[$key]['author'];
            $arr[$key]['message'] = $data[$key]['message'];
        }
        return $arr;
    }
}