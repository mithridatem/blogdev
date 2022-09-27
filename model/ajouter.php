<?php
    class Ajouter{
        /*----------------------------------
                    Attributs 
        -----------------------------------*/
        private ?int $id_util;
        private ?int $id_art;
        private ?string $com;
        private ?string $date_com;
        private ?bool $validate_com;
        /*----------------------------------
                    Constructeur
        -----------------------------------*/
        public function __construct(){}
        /*----------------------------------
                    Getter and Setter
        -----------------------------------*/
        //setter
        public function getIdUtil():?int{
            return $this->id_util;
        }
        public function getIdArt():?int{
            return $this->id_art;
        }
        public function getCom():?string{
            return $this->com;
        }
        public function getDateCom():?string{
            return $this->date_com;
        }
        public function getValidateCom():?bool{
            return $this->validate_com;
        }
        //setter
        public function setIdUtil(?int $id){
            $this->id_util = $id;
        }
        public function setIdArt(?int $id){
            $this->id_art = $id;
        }
        public function setCom(?string $com){
            $this->com = $com;
        }
        public function setDateCom(?string $date){
            $this->date_com = $date;
        }
        public function setValidate(?bool $valid){
            $this->validate_com = $valid;
        }  
    }
?>