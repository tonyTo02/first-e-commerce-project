<?php


class OrderController
{
    public function index()
    {
        require "./model/Order.php";
        require "./model/Customer.php";
        $arrOrder = (new Order())->selectAll();
        $customer = (new Customer())->selectInfoCustomerFromBill();
        require "./view/header.php";
        require "./view/order/view-order.php";
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
        require "./view/header.php";
        require "./view/order/detail-order.php";
    }
    public function destroyOrder()
    {
        $order_id = $_GET['id'];
        require "./model/OrderDetail.php";
        require "./model/Order.php";
        (new OrderDetail())->removeOrder($order_id);
        (new Order())->destroy($order_id);
        header("location:?action=index");
    }
    public function updateOrder()
    {
        $order_id = $_GET['id'];
        require "./model/Order.php";
        (new Order())->selectOne($order_id);
        require "./view/header.php";
        require "./view/order/updateOrder.php";
    }
    public function update()
    {
        $params = $_POST;
        $order_id = $_POST['id'];
        require "./model/Order.php";
        (new Order())->updateOrder($params, $order_id);
        header("location:?controller=bill");
    }
}