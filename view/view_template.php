<?php
    $namePage = "template";
    $nav ="";
    $content ="";
    $footer = "";
    include './view/view_link.php';
    include './view/view_head.php';
    //balise head title, import JS, CSS
    echo $header;
?>
<body>
<?php
    //navbar
    echo $nav;
    //corp de la page
    echo $content;
    //footer
    echo $footer;
?>
</body>
</html>