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
        case '/blogdev/':
            include './home.php';
            break;
<<<<<<< Updated upstream
        case '/blog/activate':
            include './controller/ctrl_activation.php';
            break;
        case '/blog/temp':
            include './controller/ctrl_template.php';
            break;
        case '/blog/connexion':
=======
        case '/blogdev/cat':
            include './api/api_get_all_categorie.php';
            break;
        case '/blogdev/activate':
            include './controller/ctrl_activation.php';
            break;
        case '/blogdev/connexion':
>>>>>>> Stashed changes
            include './controller/ctrl_connexion.php';
            break;
        case '/blogdev/deconnexion':
            include './controller/ctrl_deconnexion.php';
            break;
        case '/blogdev/showAllArticle':
            include './controller/ctrl_show_all_article.php';
            break;
        case '/blogdev/createUser':
            include './controller/ctrl_create_user.php';
            break;
        case '/blogdev/createArticle':
            include './controller/ctrl_create_article.php';
            break;
        case '/blogdev/createArticleCode':
            include './controller/ctrl_create_article_code.php';
            break;
        case '/blogdev/createArticleApi':
        include './controller/ctrl_create_article_api.php';
        break;
        case '/blogdev/createCategory':
            include './controller/ctrl_create_category.php';
            break;
        default:
            include './error.php';
            break;
    }
?>