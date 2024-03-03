<?php

class CustomerController
{
    public function signUp()
    {
        require "./view/sign-up.php";
    }
    public function store()
    {
        $params = $_POST;
        $email = $_POST['email'];
        $token = password_hash($params['email'], PASSWORD_DEFAULT);
        require "./model/Customer.php";
        $flag = (new Customer())->checkEmail($email);
        if ($flag) {
            echo "<h1>Email Đã Tồn Tại!</h1>";
            echo "<h2><a href=\"?action=signUp\">Nhấp vào đây để quay về</a></h2>";
        } else {
            (new Customer())->store($params, $token);
            header("location:?action=signIn");
        }

    }
    public function edit()
    {
        require "./model/Customer.php";
        $id = $_SESSION['id'];
        $each = (new Customer())->selectOne($id);
        require "./view/edit.php";
    }
    public function update()
    {
        $params = $_POST;
        require "./model/Customer.php";
        $result = (new Customer())->update($params);
        header("location:?action=viewOrder");
    }


    public function signIn()
    {
        if (isset($_COOKIE['remember'])) {
            $token = $_COOKIE['remember'];
            require "./model/Customer.php";
            $each = (new Customer())->getToken($token);
            $_SESSION['id'] = $each->getId();
            $_SESSION['name'] = $each->getName();
            if (isset($_SESSION['id'])) {
                header("location:?action=user");
            }
        }
        require "./view/sign-in.php";

    }
    public function session()
    {
        $user_id = $_SESSION['id'];
        require "./model/Customer.php";
        $each = (new Customer())->selectOne($user_id);
    }

    public function verify()
    {
        $params = $_POST;
        require "./model/Customer.php";
        $each = (new Customer())->verify($params);
        if (empty($each)) {
            header("location:?action=signIn");
            exit();
        }
        if (isset($_POST['remember'])) {
            $_SESSION['id'] = $each->getId();
            $_SESSION['name'] = $each->getName();
            setcookie("remember", $each->gettoken(), time() + 84600 * 30);
            $_SESSION['cart'];
            header("location:?action=user");
            exit();
        }
    }


    public function signOut()
    {
        unset($_SESSION['name']);
        unset($_SESSION['id']);
        setcookie("remember", "", -1);
        header("location:?action=index");
    }
}