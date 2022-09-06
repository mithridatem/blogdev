<?php
    function createArticle($bdd,$nomArticle, $contenuArticle, $dateArticle){
        try {
            $req = $bdd->prepare("INSERT INTO article
            (nom_art, contenu_art, date_art)VALUES(?, ?, ?)");
            $req->bindParam(1, $nomArticle, PDO::PARAM_STR);
            $req->bindParam(2, $contenuArticle, PDO::PARAM_STR);
            $req->bindParam(3, $dateArticle, PDO::PARAM_STR);
            $req->execute();
        } 
        catch (Exception $e) 
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    //function qui recupére le code
    function getCode($bdd, $code):?array{
        try {
            //stocker et évaluer la requête
            $req = $bdd->prepare("SELECT id_codeauto, valeur_codeauto FROM codeauto 
            WHERE valeur_codeauto = ?");
            //binder la valeur $mail au ?
            $req->bindParam(1, $code, PDO::PARAM_INT);
            //exécuter la requête
            $req->execute();
            //stocker dans $data le résultat de la requête (tableau associatif)
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
            //retourner le tableau associatif
            return $data;
        } 
        catch (Exception $e) 
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    //function qui retourne la liste de tous les articles
    function getAllArticle($bdd):?array{
        try {
            //stocker et évaluer la requête
            $req = $bdd->prepare("SELECT id_art, nom_art, contenu_art,
            date_art FROM article");
            //exécuter la requête
            $req->execute();
            //stocker dans $data le résultat de la requête (tableau associatif)
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
            //retourner le tableau associatif
            return $data;
        } 
        catch (Exception $e) 
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    //function qui retourne la liste triée par date (asc ou desc)
    function getAllArticleByFilter($bdd, $filter):?array{
        try {
            //cas ou $filter vaut 'asc'
            if($filter == 'asc'){
                //stocker et évaluer la requête
                $req = $bdd->prepare("SELECT id_art, nom_art, contenu_art,
                date_art FROM article ORDER BY date_art ASC");
            }
            //cas ou $filter vaut 'desc'
            else{
                //stocker et évaluer la requête
                $req = $bdd->prepare("SELECT id_art, nom_art, contenu_art,
                date_art FROM article ORDER BY date_art DESC");
            }
            //exécuter la requête
            $req->execute();
            //stocker dans $data le résultat de la requête (tableau associatif)
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
            //retourner le tableau associatif
            return $data;
        } 
        catch (Exception $e) 
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
?>