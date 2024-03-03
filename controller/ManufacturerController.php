<?php

class ManufacturerController
{
    public function index()
    {
        require "./model/Manufacturer.php";
        $arr = (new Manufacturer())->all();
        require "./view/manufacturer/index.php";
    }
}