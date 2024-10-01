<?php

namespace App\Controllers\PagesController;

function homeAction(\PDO $connexion)
{
    include_once "../app/models/postsModel.php";
    $posts = \App\Models\PostsModel\findAll($connexion);

    // Charge la vue dans $content
    global $content, $title;
    $title = "Posts";
    ob_start();
    include "../app/views/pages/home.php";
    $content = ob_get_clean();
}
