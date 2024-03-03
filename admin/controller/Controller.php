<?php
class Controller
{

    public function menu()
    {
        require './view/header.php';
        require './view/home.php';

    }
    public function signin()
    {
        require "./view/admin/sign-in.php";
    }

}