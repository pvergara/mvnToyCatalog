<?php
    require_once('../model/ToyModel.php');
    $toy = new Toy();
    $toy->update($_POST["toy_id"],$_POST["name"],$_POST["price"],$_POST["provider"],$_POST["discount"],$_POST["image"]);
    header("Location: ../controller/view_toy.php");