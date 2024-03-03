<?php

require "./model/CustomerObject.php";
require_once "./model/Connect.php";
class Customer
{

    public function all()
    {
        $sql = "select * from customer";
        $result = (new Connect())->query($sql);
        $arr = [];
        foreach ($result as $each) {
            $object = new CustomerObject($each);
            $arr[] = $object;
        }
        return $arr;
    }
    public function store($params)
    {
        $object = new CustomerObject($params);
        $sql = "insert into customer
                (name, gender, dob, email, password,phoneNumber, address)
                values('{$object->getName()}',
                '{$object->getGender()}', 
                '{$object->getDob()}', 
                '{$object->getEmail()}', 
                '{$object->getPhoneNumber()}', 
                '{$object->getPassword()}',
                '{$object->getAddress()}')";
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

    public function selectInfoCustomerFromBill()
    {
        $sql = "select C.*
        from bill as B
        left join customer as C on B.customer_id = C.id";
        $result = (new Connect())->query($sql);
        $arrObject = new ArrayObject();
        foreach ($result as $each) {
            $object = (new CustomerObject($each));
            $arrObject[] = $object;
        }
        return $arrObject;
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
    public function checkEmail($email)
    {
        $sql = "select email from customer where email = '$email'";
        $result = (new Connect())->query($sql);
        if ($result->num_rows == 1) {
            return true;
        }
        return false;
    }

}