<?php
    include './view/view_composant.php';
    ob_start();
?>
<form action="" method="post">
    <label for="test">Saisir votre nom:</label>
    <p><input type="text" name="test" ></p>
    <label for="test">Saisir votre mail:</label>
    <p><input type="text" name="mail" ></p>
    <select name="test" >
        <!--exemple de récupération de la liste -->
        <?php echo $liste ?> 
    </select>
    <p><input type="submit" value="submit"></p>
</form>
<?php
    $body = ob_get_clean();
?>