<?php
    require_once("../model/ToyModel.php");
    $toy = new Toy();
    $data = $toy->getToy();
    require_once("../view/toy_list.php");

