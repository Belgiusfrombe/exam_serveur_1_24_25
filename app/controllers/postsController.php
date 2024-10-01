<?php

namespace App\Controllers\PostsController;

use \PDO, \App\Models\PostsModel;

function showAction(PDO $connexion, int $id)
{
    //Je vais demander des données aux modèles
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connexion, $id);

    //Je charge la vue index.php des Posts dans $content
    global $content, $title;
    $title = $post['title'];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}

function indexAction(PDO $connexion) {
    include_once "../app/models/postsModel.php";
    $posts = \App\Models\PostsModel\findAll($connexion);

    // Charge la vue dans $content
    global $content, $title;
    $title = "Posts";
    ob_start();
    include "../app/views/posts/_index.php";
    $content = ob_get_clean();
}

function createFormAction(PDO $connexion) {
    global $content, $title;
    $title = "Create a New Post";

    ob_start();
    include "../app/views/form/index.php";
    $content = ob_get_clean();
}


