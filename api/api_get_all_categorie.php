<?php
    header ("Access-Control-Allow-Origin: *");
    include './model/categorie.php';
    $list = getAllCategory($bdd);
    echo json_encode($list);
?>
