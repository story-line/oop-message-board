<?php

/**
 * Created by PhpStorm.
 * User: msi-pc
 * Date: 2018/6/7
 * Time: 8:58
 */
class msg
{
    public function add($pdo, $table_name, $arr)
    {
        $c_time = time();
        $key = '';
        $val = '';
        $arr['c_time'] = $c_time;
        foreach ($arr as $item => $value) {
            $key .= $item . ',';
            $val .= "'" . $value . "'" . ',';
        }
        $sql = "insert into " . $table_name . "(" . trim($key, ',') . ") values(" . trim($val, ',') . ")";
        $res = $pdo->exec($sql);
        return $res;
    }

    public function del($pdo, $table_name, $id)
    {
        $sql = "delete from " . $table_name . " where id = '$id'";
        $res = $pdo->exec($sql);
        return $res;
    }

    public function findAll($pdo, $table_name)
    {
        $sql = "select * from " . $table_name . "";
        $data = $pdo->query($sql)->fetchAll();
        $arr = array();
        foreach ($data as $key => $value) {
            $arr[$key]['title'] = $data[$key]['title'];
            $arr[$key]['author'] = $data[$key]['author'];
            $arr[$key]['message'] = $data[$key]['message'];
            $arr[$key]['id'] = $data[$key]['id'];
        }
        return $arr;
    }
}