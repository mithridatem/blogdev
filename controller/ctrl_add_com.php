<?php
    //include './model/commentaire.php';
    //version objet
    include './model/ajouter.php';
    include './manager/mgr_ajouter.php';
    include './view/view_add_com.php';
    include 'view/view_footer.php';
    //test si l'utilisateur est connecté
    if(isset($_SESSION['id'])){
        //test si l'id_art existe
        if(isset($_GET['id_art']) AND !empty($_GET['id_art'])){
            include './view/view_template.php';
            //test si le bouton est cliqué
            if(isset($_POST['submit'])){
                //test si les champs sont remplis
                if(!empty($_POST['com']) AND !empty($_POST['date_com'])){
                    //nettoyer les inputs
                    $com = cleanInput($_POST['com']);
                    $dateCom = cleanInput($_POST['date_com']);
                    //ajouter le commentaire en bdd
                    echo $_SESSION['id'];
                    echo '<br>';
                    echo $_GET['id_art'];
                    $commentaire = new ManagerAjouter();
                    $commentaire->setIdArt($_GET['id_art']);
                    $commentaire->setIdUtil($_SESSION['id']);
                    $commentaire->setCom($com);
                    $commentaire->setDateCom($dateCom);
                    $commentaire->addCom($bdd);
                    echo '<br>';
                    echo "le commentaire à été ajouté";
                }
                else{
                    echo 'veuillez remplir les champs de formulaire';
                }
            }
        }
        //si id_art est vide ou n'existe pas
        else{
            //redirection si id_art = existe
            header('Location:./showAllArticle');
        }  
    }
    //si pas connecté redirection vers la connexion
    else{
        echo 'Veuillez vous connecter';
        header('refresh: 2; url=./connexion');
    }
?>