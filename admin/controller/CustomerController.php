<?php

class CustomerController
{
    public function index()
    {
        require "./model/Customer.php";
        $arr = (new Customer())->all();
        require "./view/header.php";
        require "./view/Customer/index.php";
    }
    public function create()
    {
        require "./view/customer/create.php";
    }
    public function store()
    {
        require "./model/Customer.php";
        $params = $_POST;
        (new Customer())->store($params);
        header("location:?controller=customer");
    }
    public function edit()
    {
        require "./model/Customer.php";
        $id = $_GET['id'];
        $each = (new Customer())->selectOne($id);
        require "./view/customer/edit.php";
    }
    public function update()
    {
        require "./model/Customer.php";
        $params = $_POST;
        (new Customer())->update($params);
        header("location:?controller=customer");
    }
    public function delete()
    {
        $id = $_GET['id'];
        require "./model/Customer.php";
        (new Customer())->destroy($id);
        header("location:?controller=customer");
    }
}