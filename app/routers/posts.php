<?php

use \App\Controllers\PostsController;

include_once '../app/controllers/postsController.php';

switch ($_GET['posts']):
    case 'show':
        PostsController\showAction($connexion, $_GET['id']);
        break;
    case 'createForm':
        PostsController\createFormAction($connexion);
        break;
    default:
        PostsController\indexAction($connexion);
        break;
endswitch;
