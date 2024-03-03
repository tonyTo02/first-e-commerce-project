<?php

require "./model/OrderDetailObject.php";
require_once "./model/Connect.php";
class OrderDetail
{
    public function selectOne($id)
    {
        $sql = "select * from bill_detail
                where bill_id = '$id'";
        $result = (new Connect())->query($sql);
        $arrObject = new ArrayObject();
        foreach ($result as $each) {
            $object = new OrderDetailObject($each);
            $arrObject[] = $object;
        }
        return $arrObject;
    }
    public function removeOrder($id)
    {
        $sql = "delete from bill_detail
                where bill_id = '$id'";
        (new Connect())->query($sql);
    }
}
