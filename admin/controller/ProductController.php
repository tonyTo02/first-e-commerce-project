<?php

class ProductController
{
    public function index()
    {
        require "./model/Product.php";
        $arr = (new Product())->all();
        require "./view/header.php";
        require "./view/product/index.php";

    }
    public function create()
    {
        require "./model/Manufacturer.php";
        $manufacturers = (new Manufacturer())->all();
        require "./view/product/create.php";
    }
    public function store()
    {
        require "./model/Product.php";
        $params = $_POST;
        $photo = $_FILES['image'];
        (new Product())->store($params, $photo);
        header("location:?controller=product");
    }
    public function edit()
    {
        require "./model/Product.php";
        $id = $_GET['id'];
        $each = (new Product())->selectOne($id);
        require "./model/Manufacturer.php";
        $manufacturers = (new Manufacturer())->all();
        require "./view/product/edit.php";
    }
    public function update()
    {
        require "./model/Product.php";
        $params = $_POST;
        $photo_new = $_FILES['new_image'];
        $photo_old = $_POST['old_image'];
        (new Product())->update($params, $photo_new, $photo_old);
        header("location:?controller=product");
    }
    public function delete()
    {
        $id = $_GET['id'];
        require "./model/Product.php";
        (new Product())->destroy($id);
        header("location:?controller=product");
    }

}