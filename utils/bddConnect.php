<?php
   //connexion à la base de données
   $bdd = new PDO('mysql:host=localhost;dbname=blog', 'admin',1234,
   array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
