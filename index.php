<?php
    include './utils/bddConnect.php';
    include './utils/functions.php';

    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';

    //routeur
    switch ($path) {
        case '/blog/':
            include './home.php';
            break;
        case '/blog/showAllArticle':
            include './controller/ctrl_show_all_article.php';
            break;
        case '/blog/createUser':
            include './controller/ctrl_create_user.php';
            break;
        case '/blog/createArticle':
            include './controller/ctrl_create_article.php';
            break;
        case '/blog/createArticleCode':
            include './controller/ctrl_create_article_code.php';
            break;
        default:
            include './error.php';
            break;
    }
?>