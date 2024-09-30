<?php

namespace App\Controllers\PagesController;

function homeAction(\PDO $connexion)
{
    // Charge les derniers books dans $books
    include_once "../app/models/booksModel.php";
    $books = \App\Models\BooksModel\findAll($connexion);

    // Charge les derniers posts dans $posts
    include_once "../app/models/postsModel.php";
    $posts = \App\Models\postsModel\findAll($connexion);

    // Charge la vue dans $content
    global $content, $title;
    $title = "Latest Books and posts";
    ob_start();
    include "../app/views/pages/home.php";
    $content = ob_get_clean();
}
