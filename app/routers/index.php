<?php

if (isset($_GET['posts'])):
    include_once '../app/routers/posts.php';

else:
    include_once "../app/controllers/postsController.php";
    include_once "../app/controllers/categoriesController.php";
    App\Controllers\PostsController\indexAction($connexion);
    App\Controllers\CategoriesController\indexAction($connexion);
endif;