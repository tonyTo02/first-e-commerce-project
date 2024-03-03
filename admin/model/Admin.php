<?php

require "./model/AdminObject.php";
require_once "./model/Connect.php";
class Admin
{

    public function all()
    {
        $sql = "select * from admin";
        $result = (new Connect())->query($sql);
        $arr = [];
        foreach ($result as $each) {
            $object = new AdminObject($each);
            $arr[] = $object;
        }
        return $arr;
    }
    public function store($params)
    {
        $object = new AdminObject($params);
        $sql = "insert into admin
                (name, email, password, level, status)
                values('{$object->getName()}', '{$object->getEmail()}', '{$object->getPassword()}', '{$object->getLevel()}', '{$object->getStatus()}')";
        (new Connect())->query($sql);
    }
    public function selectOne($id)
    {
        $sql = "select * from admin
                where id = '$id'";
        $result = (new Connect())->query($sql);
        $each = mysqli_fetch_array($result);
        $object = new AdminObject($each);
        return $object;
    }

    public function update($params)
    {
        $object = new AdminObject($params);
        $sql = "update admin set
                name = '{$object->getName()}',
                email = '{$object->getEmail()}',
                password = '{$object->getPassword()}',
                level = '{$object->getLevel()}',
                status = '{$object->getStatus()}'
                where id = '{$object->getId()}'
                ";
        (new Connect())->query($sql);
    }

    public function destroy($id)
    {
        $sql = "delete from admin
                where id = '$id'";
        (new Connect())->query($sql);
    }
    public function verify($params)
    {
        $sql = "select * from admin
                where email = '{$params['email']}' and password = '{$params['password']}'";
        $result = (new Connect())->query($sql);
        $each = mysqli_fetch_array($result);
        $object = new AdminObject($each);
        return $object;
    }
}