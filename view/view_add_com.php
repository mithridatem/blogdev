<?php
    ob_start();
?>
<form action="" method="post">
    <label for="com">Ajouter un commentaire :</label>
    <p><input type="text" name="com"></p>
    <label for="com">Ajouter une date :</label>
    <p><input type="datetime-local" name="date_com"></p>
    <p><input type="submit" value="ajouter" name="submit"></p>
</form>
<?php
    $body = ob_get_clean();
?>