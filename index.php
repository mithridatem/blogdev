<?php
    include './utils/bddConnect.php';
    include './utils/functions.php';
    
    //utilisation de session_start(pour gérer la connexion au serveur)
    session_start();

    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';

    //routeur
    switch ($path) {
        case '/blog/':
            include './home.php';
            break;
        case '/blog/addCom':
            include './controller/ctrl_add_com.php';
            break;
        case '/blog/template':
            include './controller/ctrl_template.php';
            break;
        case '/blog/cat':
            include './api/api_get_all_categorie.php';
            break;
        case '/blog/activate':
            include './controller/ctrl_activation.php';
            break;
        case '/blog/connexion':
            include './controller/ctrl_connexion.php';
            break;
        case '/blog/deconnexion':
            include './controller/ctrl_deconnexion.php';
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
        case '/blog/createArticleApi':
            include './controller/ctrl_create_article_api.php';
            break;
        case '/blog/createCategory':
            include './controller/ctrl_create_category.php';
            break;
        default:
            include './error.php';
            break;
    }
?>