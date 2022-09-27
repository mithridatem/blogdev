<?php
    class ManagerAjouter extends Ajouter{
        //fonction pour ajouter un article (nom, contenu, date, categorie, image)
        public function addCom($bdd){
            $id = $this->getIdUtil();
            $id_art = $this->getIdArt();
            $com = $this->getCom();
            $date_com = $this->getDateCom();
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
    }
?>