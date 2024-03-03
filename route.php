<?php

require "./controller/Controller.php";
require "./controller/ProductController.php";
require "./controller/CartController.php";
require "./controller/CustomerController.php";
require "./controller/OrderController.php";
require "./view/header.php";

$action = $_GET['action'] ?? "index";

switch ($action) {
    case 'index':
        (new ProductController())->index();
        break;
    case 'detail':
        (new ProductController())->detail();
        break;
    case 'addCart':
        (new CartController())->addToCart();
        break;
    case 'viewCart':
        (new CartController())->viewCart();
        break;
    case 'destroy':
        (new CartController())->destroy();
        break;
    case 'signUp':
        (new CustomerController())->signUp();
        break;
    case 'store':
        (new CustomerController())->store();
        break;
    case 'edit':
        (new CustomerController())->edit();
        break;
    case 'update':
        (new CustomerController())->update();
        break;
    case 'signIn':
        (new CustomerController())->signIn();
        break;
    case 'verify':
        (new CustomerController())->verify();
        break;
    case 'user':
        (new CustomerController())->session();
        (new ProductController())->index();
        break;
    case 'logOut':
        (new CustomerController())->signOut();
        break;
    case 'order':
        (new OrderController())->order();
        break;
    case 'viewOrder':
        (new OrderController())->viewOrder();
        break;
    case 'detailOrder':
        (new OrderController())->detailOrder();
        break;
    case 'destroyOrder':
        (new OrderController())->destroyOrder();
        break;
    case "iPhone":
        (new ProductController())->iPhone();
        break;
    case "Xiaomi":
        (new ProductController())->Xiaomi();
        break;
    case "Samsung":
        (new ProductController())->Samsung();
        break;
    case "OPPO":
        (new ProductController())->OPPO();
        break;
    default:
        echo "Nhập linh tinh gì đấy";
        break;
}