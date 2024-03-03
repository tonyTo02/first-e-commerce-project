<?php

require "./model/ProductObject.php";
require_once "./model/Connect.php";
class Product
{

    public function all()
    {
        $sql = "select pr.*, manu.name as name_manufacturer
        from products as pr
        left join manufacturers as manu
        on pr.manufacturer_id = manu.id";
        $result = (new Connect())->query($sql);
        $arr = [];
        foreach ($result as $each) {
            $object = (new ProductObject($each));
            $arr[] = $object;
        }
        return $arr;
    }
    public function selectOne($id)
    {
        $sql = "select pr.*, manu.name as name_manufacturer
                from products as pr
                left join manufacturers as manu
                on pr.manufacturer_id = manu.id
                where pr.id = '$id'";
        $result = (new Connect())->query($sql);
        $each = mysqli_fetch_array($result);
        $object = new ProductObject($each);
        return $object;
    }

    public function selectIphone()
    {
        $sql = "select P.*
                from products as P
                join product_type as PT on P.id = PT.product_id
                join type as T on PT.type_id = T.id
                where T.id = 1";
        $result = (new Connect())->query($sql);
        $arr = [];
        foreach ($result as $each) {
            $object = (new ProductObject($each));
            $arr[] = $object;
        }
        return $arr;
    }
    public function selectSamsung()
    {
        $sql = "select P.*
        from products as P
        join product_type as PT on P.id = PT.product_id
        join type as T on PT.type_id = T.id
        where T.id = 2";
        $result = (new Connect())->query($sql);
        $arr = [];
        foreach ($result as $each) {
            $object = (new ProductObject($each));
            $arr[] = $object;
        }
        return $arr;
    }
    public function selectOppo()
    {
        $sql = "select P.*
        from products as P
        join product_type as PT on P.id = PT.product_id
        join type as T on PT.type_id = T.id
        where T.id = 3";
        $result = (new Connect())->query($sql);
        $arr = [];
        foreach ($result as $each) {
            $object = (new ProductObject($each));
            $arr[] = $object;
        }
        return $arr;
    }
    public function selectXiaomi()
    {
        $sql = "select P.*
        from products as P
        join product_type as PT on P.id = PT.product_id
        join type as T on PT.type_id = T.id
        where T.id = 4";
        $result = (new Connect())->query($sql);
        $arr = [];
        foreach ($result as $each) {
            $object = (new ProductObject($each));
            $arr[] = $object;
        }
        return $arr;
    }

}