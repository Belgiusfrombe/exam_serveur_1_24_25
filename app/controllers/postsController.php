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
    include_once "../app/models/categoriesModel.php";
    $categories = \App\Models\CategoriesModel\findAll($connexion);

    ob_start();
    include "../app/views/form/index.php";
    $content = ob_get_clean();
}

function insertOneAction(PDO $connexion, array $data) {
    include_once "../app/models/postsModel.php";
    $id = \App\Models\PostsModel\insertOne($connexion, $data);
    header("Location: /posts/$id");
    exit;
}

function deleteAction(PDO $connexion, int $id) {
    // Je demande au modele de supprimer les liaisons n:m
    include_once "../app/models/postsModel.php";
    $return1 = \App\Models\PostsModel\deletePostHasCategoriesById($connexion, $id);
    // Je demande au modele de supprimer le post
    $return2 = \App\Models\PostsModel\deleteOneById($connexion, $id);
    // Je redirige vers la liste des posts
    header("Location: /posts");
}

function editFormAction(PDO $connexion, int $id) {
    include_once "../app/models/postsModel.php";
    $post = \App\Models\PostsModel\findOneById($connexion, $id);

    include_once "../app/models/categoriesModel.php";
    $categories = \App\Models\CategoriesModel\findAll($connexion);


    global $content, $title;
    $title = "Edit Post";
    ob_start();
    include "../app/views/form/edit.php";
    $content = ob_get_clean();
}


