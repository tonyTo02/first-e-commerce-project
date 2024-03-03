<?php

class ProductController
{
    public function index()
    {
        require "./model/Product.php";
        require "./model/Type.php";
        $arrProduct = (new Product())->all();
        $arrCategory = (new Type())->index();
        require "./view/index.php";

    }
    public function detail()
    {
        $id = $_GET['id'];
        require "./model/Product.php";
        $each = (new Product())->selectOne($id);
        require "./view/product-detail.php";

    }

    public function iPhone()
    {
        require "./model/Product.php";
        require "./model/Type.php";
        $arr = (new Product())->selectIphone();
        require "./view/category-iphone.php";
    }
    public function Xiaomi()
    {
        require "./model/Product.php";
        require "./model/Type.php";
        $arr = (new Product())->selectXiaomi();
        require "./view/category-xiaomi.php";
    }
    public function Samsung()
    {
        require "./model/Product.php";
        require "./model/Type.php";
        $arr = (new Product())->selectSamsung();
        require "./view/category-samsung.php";
    }
    public function OPPO()
    {
        require "./model/Product.php";
        require "./model/Type.php";
        $arr = (new Product())->selectOppo();
        require "./view/category-oppo.php";
    }

}