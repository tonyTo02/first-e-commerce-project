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
    public function store($params, $photo)
    {
        $folder = 'view/photos/';
        $file_extension = explode('.', $photo["name"])[1];
        $file_name = time() . '.' . $file_extension;
        $path_file = $folder . $file_name;
        move_uploaded_file($photo["tmp_name"], $path_file);
        $object = new ProductObject($params);
        $sql = "insert into products
                (name, description, price, image, manufacturer_id)
                values('{$object->getName()}', '{$object->getDescription()}', '{$object->getPrice()}', '$file_name', '{$object->getManufacturerId()}')";
        (new Connect())->query($sql);
    }
    public function selectOne($id)
    {
        $sql = "select * from products
                where id = '$id'";
        $result = (new Connect())->query($sql);
        $each = mysqli_fetch_array($result);
        $object = new ProductObject($each);
        return $object;
    }

    public function update($params, $photo_new, $photo_old)
    {
        if ($photo_new['size'] > 0) {
            $folder = 'view/photos/';
            $file_extension = explode('.', $photo_new["name"])[1];
            $file_name = time() . '.' . $file_extension;
            $path_file = $folder . $file_name;
            move_uploaded_file($photo_new["tmp_name"], $path_file);
        } else {
            $file_name = $photo_old;
        }
        $object = new ProductObject($params);
        $sql = "update products set
                name = '{$object->getName()}',
                description = '{$object->getDescription()}',
                price = '{$object->getPrice()}',
                image = '$file_name',
                manufacturer_id = '{$object->getManufacturerId()}'
                where id = '{$object->getId()}'
                ";
        (new Connect())->query($sql);
    }

    public function destroy($id)
    {
        $sql = "delete from products
                where id = '$id'";
        (new Connect())->query($sql);
    }

    public function selectCategory()
    {
        $sql = "select pr.*
                from products as pr, type as ty, product_type as pt
                where pr.id = pt.product_id and ty.id = pt.type_id";
        die($sql);
    }
}