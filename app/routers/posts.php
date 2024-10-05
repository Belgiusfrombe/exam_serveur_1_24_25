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
    case 'insertForm':
        PostsController\insertFormAction($connexion, [
        'title' => $_POST['title'],
        'text' => $_POST['text'],
        'category_id' => $_POST['category_id'],
        'created_at' => date('Y-m-d H:i:s'),
    ]);
        break;
    case 'delete':
            PostsController\deleteAction($connexion, $_GET['id']);
            break;
    case 'editForm':
        PostsController\editFormAction($connexion, $_GET['id']);
        break;
    default:
        PostsController\indexAction($connexion);
        break;
endswitch;
