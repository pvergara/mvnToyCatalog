<?php
    require_once("../model/model.php");
    $toy = new Toy();
    $data = $toy->getToy();
    require_once("../view/toy_list.php");

