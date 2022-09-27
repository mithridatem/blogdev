<?php
    //fonction pour ajouter un article (nom, contenu, date, categorie, image)
    function addCom($bdd,$id,$id_art, $com, $date_com){
        try {
            $req = $bdd->prepare("INSERT INTO ajouter
            (id_util, id_art, com, date_com)VALUES(?, ?, ?, ?)");
            $req->bindParam(1, $id, PDO::PARAM_INT);
            $req->bindParam(2, $id_art, PDO::PARAM_INT);
            $req->bindParam(3, $com, PDO::PARAM_STR);
            $req->bindParam(4, $date_com, PDO::PARAM_STR);
            $req->execute();
        } 
        catch (Exception $e) 
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
?>