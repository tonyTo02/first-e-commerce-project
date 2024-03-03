<?php


class CartController
{

    public function addToCart()
    {
        $id = $_GET['id'];

        if (empty($_SESSION['cart'])) {
            $_SESSION['cart'][$id] = 1;
        } else {
            if (!empty($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]++;
            } else {
                $_SESSION['cart'][$id] = 1;
            }
        }
        header("location:?action=index");
    }
    public function viewCart()
    {
        require './model/Product.php';
        require './model/Customer.php';
        if (!isset($_SESSION['id'])) {
            require "./view/sign-in.php";
        } else {
            if (!isset($_SESSION['cart'])) {
                echo "Không có sản phẩm trong giỏ hàng";
            } else {
                $cart = $_SESSION['cart'];
                $id = $_SESSION['id'];
                $arrObject = new ArrayObject();
                foreach ($cart as $product_id => $quantity) {
                    $each = (new Product())->selectOne($product_id);
                    $arrObject->append($each);
                }
                $customer = (new Customer())->selectOne($id);
                require './view/view-cart.php';
                require './view/customer-info.php';
            }
        }
    }
    public function destroy()
    {
        $id = $_GET['id'];
        if ($_SESSION['cart'][$id] == 1) {
            unset($_SESSION['cart'][$id]);
        } else {
            $_SESSION['cart'][$id]--;
        }
        header("location:?action=viewCart");
    }
}