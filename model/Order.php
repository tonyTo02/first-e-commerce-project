<?php

require "./model/OrderObject.php";
require "./model/ProductObject.php";
require_once "./model/Connect.php";
class Order
{
    public function store($params, $cart)
    {
        $object = (new OrderObject($params));
        $sql = "insert into bill(customer_id, phoneNumber, note, status, total, payment_method)
                values('{$params['customer_id']}',
                        '{$params['phoneNumber']}',
                        '{$params['note']}',
                        '{$params['status']}',
                        '{$params['total']}',
                        '{$params['payment_method']}'
                        )";
        (new Connect())->query($sql);
        $sql = "select max(id) as max_order_id
                from bill
                where customer_id = '{$params['customer_id']}'";
        $result = (new Connect())->query($sql);
        $order_id = mysqli_fetch_array($result)['max_order_id'];
        foreach ($cart as $product_id => $each) {
            $quantity = $each;
            $sql = "insert into bill_detail(bill_id, product_id, quantity)
            values('$order_id','$product_id','$quantity')";
            (new Connect())->query($sql);
        }
    }

    //id đây là id khách hàng
    public function selectBill($id)
    {
        $sql = "select *
                from bill
                where customer_id = '$id'";
        $result = (new Connect())->query($sql);
        $arrObject = new ArrayObject();
        foreach ($result as $each) {
            $object = (new OrderObject($each));
            $arrObject[] = $object;
        }
        return $arrObject;
    }

    //id đây là id của đơn hàng
    public function selectOne($id)
    {
        $sql = "select * from bill
                where id = '$id'";
        die($sql);
        $result = (new Connect())->query($sql);
        $each = mysqli_fetch_array($result);
        print_r($each);
        die();
        $object = (new OrderObject($each));
        return $each;
    }
    public function destroy($id)
    {
        $sql = "delete from bill
                where id = '$id'";
        (new Connect())->query($sql);
    }
}