<?php
    //démarage de la capture
    ob_start();
?>
    <script src="./asset/script/script.js"></script>
    <link rel="stylesheet" href="./asset/style/style.css">
<?php
    //stockage du code html dans $link
    $link = ob_get_clean();
?>