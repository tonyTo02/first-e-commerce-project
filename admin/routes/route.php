<?php
require "./controller/AdminController.php";
require "./controller/ProductController.php";
require "./controller/ManufacturerController.php";
require "./controller/CustomerController.php";
require "./controller/OrderController.php";

$action = $_GET['action'] ?? 'index';
$controller = $_GET['controller'] ?? 'base';
// $role = $_GET['role'] ?? "base";

switch ($controller) {
    case 'base':
        require "./controller/Controller.php";
        (new Controller())->signin();
        break;
    case 'menu':
        require "./controller/Controller.php";
        (new Controller())->menu();
        break;
    case 'admin':
        switch ($action) {
            case 'index':
                (new AdminController())->index();
                break;
            case 'create':
                (new AdminController())->create();
                break;
            case 'store':
                (new AdminController())->store();
                break;
            case 'edit':
                (new AdminController())->edit();
                break;
            case 'update':
                (new AdminController())->update();
                break;
            case 'delete':
                (new AdminController())->delete();
                break;
            case 'signin':
                (new AdminController())->signin();
                break;
            case 'verify':
                (new AdminController())->verify();
                break;

            default:
                echo "Nhập linh tinh gì đấy";
                break;
        }
        break;
    case 'product':
        switch ($action) {
            case 'index':
                (new ProductController())->index();
                break;
            case 'create':
                (new ProductController())->create();
                break;
            case 'store':
                (new ProductController())->store();
                break;
            case 'edit':
                (new ProductController())->edit();
                break;
            case 'update':
                (new ProductController())->update();
                break;
            case 'delete':
                (new ProductController())->delete();
                break;
            default:
                echo "Nhập linh tinh gì đấy";
                break;
        }
        break;
    case 'manufacturer':
        switch ($action) {
            case 'index':
                (new ManufacturerController())->index();
                break;
            case 'create':
                (new ManufacturerController())->create();
                break;
            case 'store':
                (new ManufacturerController())->store();
                break;
            case 'edit':
                (new ManufacturerController())->edit();
                break;
            case 'update':
                (new ManufacturerController())->update();
                break;
            case 'delete':
                (new ManufacturerController())->delete();
                break;
            default:
                echo "Nhập linh tinh gì đấy";
                break;
        }
        break;
    case 'customer':
        switch ($action) {
            case 'index':
                (new CustomerController())->index();
                break;
            case 'create':
                (new CustomerController())->create();
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
            case 'delete':
                (new CustomerController())->delete();
                break;
            default:
                echo "Nhập linh tinh gì đấy";
                break;
        }
        break;
    case 'bill':
        switch ($action) {
            case 'index':
                (new OrderController())->index();
                break;
            case 'detailOrder':
                (new OrderController())->detailOrder();
                break;
            case 'destroyOrder':
                (new OrderController())->destroyOrder();
                break;
            case 'updateOrder':
                (new OrderController())->updateOrder();
                break;
            case 'update':
                (new OrderController())->update();
                break;
            default:
                echo "Nhập linh tinh gì đấy";
                break;
        }
        break;

    default:
        echo "Nhập linh tinh gì đấy";
        break;
}