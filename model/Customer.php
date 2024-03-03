<?php

require "./model/CustomerObject.php";
require_once "./model/Connect.php";
class Customer
{
    public function store($params, $token)
    {
        $object = new CustomerObject($params);
        $sql = "insert into customer
                (name, email, gender ,password, phoneNumber, token)
                values('{$object->getName()}',
                '{$object->getEmail()}', 
                '{$object->getGender()}', 
                '{$object->getPassword()}',
                '{$object->getPhoneNumber()}',
                '$token')";
        (new Connect())->query($sql);
    }
    public function selectOne($id)
    {
        $sql = "select * from customer
                where id = '$id'";
        $result = (new Connect())->query($sql);
        $each = mysqli_fetch_array($result);
        $object = new CustomerObject($each);
        return $object;
    }

    public function update($params)
    {
        $object = new CustomerObject($params);
        $sql = "update customer set
                name = '{$object->getName()}',
                gender = '{$object->getGender()}',
                dob = '{$object->getDob()}',
                email = '{$object->getEmail()}',
                password = '{$object->getPassword()}',
                phoneNumber = '{$object->getPhoneNumber()}',
                address = '{$object->getAddress()}'
                where id = '{$object->getId()}'
                ";
        (new Connect())->query($sql);
    }

    public function destroy($id)
    {
        $sql = "delete from customer
                where id = '$id'";
        (new Connect())->query($sql);
    }
    public function getToken($token)
    {
        $sql = "select * from users where token = '$token'";
        $result = (new Connect())->query($sql);
        $each = mysqli_fetch_array($result);
        $object = new CustomerObject($each);
        return $object;
    }
    public function verify($params)
    {
        $sql = "select * from customer
                where email = '{$params['email']}' && password = '{$params['password']}'";
        $result = (new Connect())->query($sql);
        $each = mysqli_fetch_array($result);
        $object = new CustomerObject($each);
        return $object;
    }
    public function checkEmail($email)
    {
        $sql = "select * from customer where email = '$email'";
        $result = (new Connect())->query($sql);
        $rows = mysqli_num_rows($result);
        if ($rows > 0) {
            return true;
        }
        return false;
    }
}