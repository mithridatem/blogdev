<?php
    ob_start();
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $namePage;?></title>
    <?php echo $link;?>
</head>
<?php
    $header = ob_get_clean();
?>