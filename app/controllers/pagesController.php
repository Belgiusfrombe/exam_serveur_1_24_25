<?php

namespace App\Controllers\PagesController;

function homeAction(\PDO $connexion)
{
    // Charge les derniers authors dans $authors
    include_once "../app/models/postsModel.php";
    $authors = \App\Models\PostsModel\findAll($connexion);

    // Charge la vue dans $content
    global $content, $title;
    $title = "Posts";
    ob_start();
    include "../app/views/pages/home.php";
    $content = ob_get_clean();
}
