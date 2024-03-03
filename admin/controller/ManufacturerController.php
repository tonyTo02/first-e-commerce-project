<?php

class ManufacturerController
{
    public function index()
    {
        require "./model/Manufacturer.php";
        $arr = (new Manufacturer())->all();
        require "./view/header.php";
        require "./view/manufacturer/index.php";
    }
    public function create()
    {
        require "./view/manufacturer/create.php";
    }
    public function store()
    {
        require "./model/Manufacturer.php";
        $params = $_POST;
        (new Manufacturer())->store($params);
        header("location:?controller=manufacturer");
    }
    public function edit()
    {
        require "./model/Manufacturer.php";
        $id = $_GET['id'];
        $each = (new Manufacturer())->selectOne($id);
        require "./view/manufacturer/edit.php";
    }
    public function update()
    {
        require "./model/Manufacturer.php";
        $params = $_POST;
        (new Manufacturer())->update($params);
        header("location:?controller=manufacturer");
    }
    public function delete()
    {
        $id = $_GET['id'];
        require "./model/Manufacturer.php";
        (new Manufacturer())->destroy($id);
        header("location:?controller=manufacturer");
    }
}