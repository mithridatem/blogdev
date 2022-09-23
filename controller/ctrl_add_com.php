<?php
    include './model/commentaire.php';
    include './view_add_com.php';
    include './view_template.php';
    //test si l'utilisateur est connecté
    if(isset($_SESSION['id'])){
        //test si l'id_art existe
        if(isset($_GET['id_art']) AND !empty($_GET['id_art'])){
            //test si le bouton est cliqué
            if(isset($_POST['submit'])){
                //test si les champs sont remplis
                if(!empty($_POST['com']) AND !empty($_POST['com'])){

                }
                else{
                    
                }
            }
        }
        
    }
    //si pas connecté redirection vers la connexion
    else{
        echo 'Veuillez vous connecter';
        header('refresh: 1; url=./connexion');
    }
    
?>