<?php
    ob_start();
    $tab = getAllCategory($bdd);
    foreach($tab as $value){
        echo '<option value= '.$value['id_cat'].'>'.$value['nom_cat'].'</option>';
    }
    $liste = ob_get_clean();
?>