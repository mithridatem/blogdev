<?php
    $namePage = "Home";
    //import des ressources
    include './utils/bddConnect.php';
    include './model/utilisateur.php';
    include './view/view_header.php';
    include './view/view_navbar.php';
    include './view/view_home.php';
    include './view/view_footer.php';
?>