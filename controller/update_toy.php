<?php
    require_once('../model/ToyModel.php');
    $toy = new Toy();
    $data = $toy->getToyBy($_GET["toy_id"]);
    require_once('../view/toy_form.php');