<?php

class AdminController
{
    public function index()
    {
        require "./model/Admin.php";
        $arr = (new Admin())->all();
        require "./view/header.php";
        require "./view/admin/index.php";
    }
    public function create()
    {
        require "./view/admin/create.php";
    }
    public function store()
    {
        require "./model/Admin.php";
        $params = $_POST;
        (new Admin())->store($params);
        header("location:?controller=admin");
    }
    public function edit()
    {
        require "./model/Admin.php";
        $id = $_GET['id'];
        $each = (new Admin())->selectOne($id);
        require "./view/admin/edit.php";
    }
    public function update()
    {
        require "./model/Admin.php";
        $params = $_POST;
        (new Admin())->update($params);
        header("location:?controller=admin");
    }
    public function delete()
    {
        $id = $_GET['id'];
        require "./model/Admin.php";
        (new Admin())->destroy($id);
        header("location:?controller=admin");
    }
    public function signin()
    {
        require './view/admin/sign-in.php';
    }
    public function verify()
    {
        $params = $_POST;
        require "./model/Admin.php";
        $each = (new Admin())->verify($params);
        if (isset($_POST['remember'])) {
            $_SESSION['id'] = $each->getId();
            $_SESSION['name'] = $each->getName();
            echo $_SESSION['id'];
            echo $_SESSION['name'];

        }
        header("location:?controller=menu");
    }
}