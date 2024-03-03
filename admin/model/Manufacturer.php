<?php

require "./model/ManufacturerObject.php";
require_once "./model/Connect.php";
class Manufacturer
{

    public function all()
    {
        $sql = "select * from manufacturers";
        $result = (new Connect())->query($sql);
        $arr = [];
        foreach ($result as $each) {
            $object = new ManufacturerObject($each);
            $arr[] = $object;
        }
        return $arr;
    }
    public function store($params)
    {
        $object = new ManufacturerObject($params);
        $sql = "insert into manufacturers
                (name, address, phone, image)
                values('{$object->getName()}', '{$object->getAddress()}', '{$object->getPhone()}', '{$object->getImage()}')";
        (new Connect())->query($sql);
    }
    public function selectOne($id)
    {
        $sql = "select * from manufacturers
                where id = '$id'";
        $result = (new Connect())->query($sql);
        $each = mysqli_fetch_array($result);
        $object = new ManufacturerObject($each);
        return $object;
    }

    public function update($params)
    {
        $object = new ManufacturerObject($params);
        $sql = "update manufacturers set
                name = '{$object->getName()}',
                address = '{$object->getAddress()}',
                phone = '{$object->getPhone()}',
                image = '{$object->getImage()}'
                where id = '{$object->getId()}'
                ";
        (new Connect())->query($sql);
    }

    public function destroy($id)
    {
        $sql = "delete from manufacturers
                where id = '$id'";
        (new Connect())->query($sql);
    }
}