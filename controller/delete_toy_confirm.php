<?php
    require_once('../model/ToyModel.php');
    $toy = new Toy();
    $toy->delete($_GET["toy_id"]);
    header("Location: ../controller/view_toy.php");



