<?php

require "./model/TypeObject.php";
require_once "./model/Connect.php";
class Type
{

    public function index()
    {
        $sql = "select * from type";
        $result = (new Connect())->query($sql);
        $arr = [];
        foreach ($result as $each) {
            $object = (new TypeObject($each));
            $arr[] = $object;
        }
        return $arr;
    }
    public function selectOne($id)
    {
        $sql = "select * from type
                where id = '$id'";
        $result = (new Connect())->query($sql);
        $each = mysqli_fetch_array($result);
        $object = new TypeObject($each);
        return $object;
    }

}