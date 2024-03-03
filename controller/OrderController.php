<?php


class OrderController
{

    public function order()
    {
        require "./model/Order.php";
        $params = $_POST;
        $cart = $_SESSION['cart'];
        if ($params['payment_method'] == 1) {
            (new Order())->store($params, $cart);
            unset($_SESSION['cart']);
            header("location:index.php");
        } else if ($params['payment_method'] == 2) {
            require "./vnpay_php/vnpay_pay.php";
            (new Order())->store($params, $cart);
            unset($_SESSION['cart']);
        } else {
            echo "Lỗi";
        }

    }
    public function viewOrder()
    {
        $id = $_SESSION['id'];
        require "./model/Order.php";
        require "./model/Customer.php";
        $arrOrder = (new Order())->selectBill($id);
        $customer = (new Customer())->selectOne($id);
        require "./view/view-order.php";
    }
    public function detailOrder()
    {
        $order_id = $_GET['id'];
        $customer_id = $_SESSION['id'];
        require "./model/OrderDetail.php";
        $arrOrderDetail = (new OrderDetail())->selectOne($order_id);
        $arrProductDetail = new ArrayObject();
        require "./model/Product.php";
        foreach ($arrOrderDetail as $product) {
            $product_detail = (new Product())->selectOne($product->getProductId());
            $arrProductDetail[] = $product_detail;
        }
        require "./view/detail-order.php";
    }
    public function destroyOrder()
    {
        $order_id = $_GET['id'];
        require "./model/OrderDetail.php";
        require "./model/Order.php";
        (new OrderDetail())->removeOrder($order_id);
        (new Order())->destroy($order_id);
        header("location:?action=viewOrder");
    }
}