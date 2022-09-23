<h3>Ajouter un article :</h3>
<form action="" method="post" enctype="multipart/form-data">
    <p>Saisir le nom de l'article:</p>
    <p><input type="text" name="nom_art"></p>
    <p>Saisir le contenu de l'article</p>
    <p><textarea name="contenu_art"></textarea></p>
    <p><select name="id_cat" id ="id_categorie">
    </select></p>
        <p>Saisir date l\'article</p>
        <p><input type="date" name="date_art"></p>
        <input type="file" name="img_art">
        <p><input type="submit" value="ajouter" name="submit"></p>
</form>
<script src="./asset/script/script.js" defer></script>    